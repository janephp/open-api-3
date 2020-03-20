<?php

namespace Jane\OpenApi3\Generator;

use Jane\JsonSchema\Generator\GeneratorInterface;
use Jane\OpenApi3\Generator\Parameter\NonBodyParameterGenerator;
use Jane\OpenApi3\Generator\RequestBodyContent\DefaultBodyContentGenerator;
use Jane\OpenApi3\Generator\RequestBodyContent\FormBodyContentGenerator;
use Jane\OpenApi3\Generator\RequestBodyContent\JsonBodyContentGenerator;
use Jane\OpenApiCommon\Generator\ExceptionGenerator;
use Jane\OpenApiCommon\Naming\ChainOperationNaming;
use Jane\OpenApi3\Naming\OperationUrlNaming;
use Jane\OpenApiCommon\Naming\OperationIdNaming;
use Jane\OpenApi3\Operation\OperationManager;
use PhpParser\ParserFactory;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class GeneratorFactory
{
    public static function build(DenormalizerInterface $serializer): GeneratorInterface
    {
        $parserFactory = new ParserFactory();
        $parser = $parserFactory->create(ParserFactory::PREFER_PHP7);

        $nonBodyParameter = new NonBodyParameterGenerator($serializer, $parser);
        $exceptionGenerator = new ExceptionGenerator();
        $operationManager = new OperationManager();
        $operationNaming = new ChainOperationNaming([
            new OperationIdNaming(),
            new OperationUrlNaming(),
        ]);

        $defaultContentGenerator = new DefaultBodyContentGenerator($serializer);
        $requestBodyGenerator = new RequestBodyGenerator($defaultContentGenerator);
        $requestBodyGenerator->addRequestBodyGenerator(['application/json'], new JsonBodyContentGenerator($serializer));
        $requestBodyGenerator->addRequestBodyGenerator(['application/x-www-form-urlencoded', 'multipart/form-data'], new FormBodyContentGenerator($serializer));

        $psr7EndpointGenerator = new Psr7EndpointGenerator($operationNaming, $nonBodyParameter, $serializer, $exceptionGenerator, $requestBodyGenerator);
        $psr7OperationGenerator = new Psr7OperationGenerator($psr7EndpointGenerator);

        return new Psr18ClientGenerator($operationManager, $psr7OperationGenerator, $operationNaming);
    }
}
