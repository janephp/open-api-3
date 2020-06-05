<?php

namespace Jane\OpenApi3\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\File;
use Jane\OpenApi3\Generator\Endpoint\GetAuthenticationScopesTrait;
use Jane\OpenApi3\Generator\Endpoint\GetConstructorTrait;
use Jane\OpenApi3\Generator\Endpoint\GetGetBodyTrait;
use Jane\OpenApi3\Generator\Endpoint\GetGetExtraHeadersTrait;
use Jane\OpenApi3\Generator\Endpoint\GetGetMethodTrait;
use Jane\OpenApi3\Generator\Endpoint\GetGetOptionsResolverTrait;
use Jane\OpenApi3\Generator\Endpoint\GetGetUriTrait;
use Jane\OpenApi3\Generator\Endpoint\GetTransformResponseBodyTrait;
use Jane\OpenApi3\Generator\Parameter\NonBodyParameterGenerator;
use Jane\OpenApi3\Guesser\GuessClass;
use Jane\OpenApi3\JsonSchema\Model\Schema;
use Jane\OpenApiCommon\Generator\ExceptionGenerator;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\OpenApiCommon\Naming\OperationNamingInterface;
use Jane\OpenApiRuntime\Client\BaseEndpoint;
use Jane\OpenApiRuntime\Client\Endpoint;
use Jane\OpenApiRuntime\Client\EndpointTrait;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class EndpointGenerator
{
    use GetConstructorTrait;
    use GetTransformResponseBodyTrait;
    use GetGetMethodTrait;
    use GetGetUriTrait;
    use GetGetExtraHeadersTrait;
    use GetGetOptionsResolverTrait;
    use GetGetBodyTrait;
    use GetAuthenticationScopesTrait;

    public const IN_PATH = 'path';
    public const IN_QUERY = 'query';
    public const IN_HEADER = 'header';

    /** @var OperationNamingInterface */
    private $operationNaming;

    /** @var NonBodyParameterGenerator */
    private $nonBodyParameterGenerator;

    /** @var ExceptionGenerator */
    private $exceptionGenerator;

    /** @var RequestBodyGenerator */
    private $requestBodyGenerator;

    /** @var GuessClass */
    private $guessClass;

    public function __construct(
        OperationNamingInterface $operationNaming,
        NonBodyParameterGenerator $nonBodyParameterGenerator,
        DenormalizerInterface $denormalizer,
        ExceptionGenerator $exceptionGenerator,
        RequestBodyGenerator $requestBodyGenerator
    ) {
        $this->operationNaming = $operationNaming;
        $this->nonBodyParameterGenerator = $nonBodyParameterGenerator;
        $this->exceptionGenerator = $exceptionGenerator;
        $this->requestBodyGenerator = $requestBodyGenerator;
        $this->guessClass = new GuessClass(Schema::class, $denormalizer);
    }

    public function createEndpointClass(OperationGuess $operation, Context $context): array
    {
        $endpointName = $this->operationNaming->getEndpointName($operation);

        [$constructorMethod, $methodParams, $methodParamsDoc, $pathProperties] = $this->getConstructor($operation, $context, $this->guessClass, $this->nonBodyParameterGenerator, $this->requestBodyGenerator);
        [$transformBodyMethod, $outputTypes, $throwTypes] = $this->getTransformResponseBody($operation, $endpointName, $this->guessClass, $this->exceptionGenerator, $context);
        $class = new Stmt\Class_($endpointName, [
            'extends' => new Name\FullyQualified(BaseEndpoint::class),
            'implements' => [new Name\FullyQualified(Endpoint::class)],
            'stmts' => array_merge($pathProperties, $constructorMethod === null ? [] : [$constructorMethod], [
                new Stmt\Use_([new Stmt\UseUse(new Name\FullyQualified(EndpointTrait::class))]),
                $this->getGetMethod($operation),
                $this->getGetUri($operation, $this->guessClass),
                $this->getGetBody($operation, $context, $this->guessClass, $this->requestBodyGenerator),
            ]),
        ]);

        $extraHeadersMethod = $this->getExtraHeadersMethod($operation, $this->guessClass);
        $queryResolverMethod = $this->getOptionsResolverMethod($operation, self::IN_QUERY, 'getQueryOptionsResolver', $this->guessClass, $this->nonBodyParameterGenerator);
        $headerResolverMethod = $this->getOptionsResolverMethod($operation, self::IN_HEADER, 'getHeadersOptionsResolver', $this->guessClass, $this->nonBodyParameterGenerator);

        if ($extraHeadersMethod) {
            $class->stmts[] = $extraHeadersMethod;
        }

        if ($queryResolverMethod) {
            $class->stmts[] = $queryResolverMethod;
        }

        if ($headerResolverMethod) {
            $class->stmts[] = $headerResolverMethod;
        }

        $class->stmts[] = $transformBodyMethod;
        $class->stmts[] = $this->getAuthenticationScopesMethod($operation);

        $file = new File(
            $context->getCurrentSchema()->getDirectory() . \DIRECTORY_SEPARATOR . 'Endpoint' . \DIRECTORY_SEPARATOR . $endpointName . '.php',
            new Stmt\Namespace_(
                new Name($context->getCurrentSchema()->getNamespace() . '\\Endpoint'),
                [
                    $class,
                ]
            ),
            'Endpoint'
        );

        $context->getCurrentSchema()->addFile($file);

        return [$context->getCurrentSchema()->getNamespace() . '\\Endpoint\\' . $endpointName, $methodParams, $methodParamsDoc, $outputTypes, $throwTypes];
    }
}
