<?php

namespace Jane\OpenApi3;

use Jane\JsonSchema\Generator\Naming;
use Jane\OpenApi3\Generator\EndpointGenerator;
use Jane\OpenApi3\Generator\GeneratorFactory;
use Jane\OpenApi3\Guesser\OpenApiSchema\GuesserFactory;
use Jane\OpenApi3\SchemaParser\SchemaParser;
use Jane\OpenApiCommon\Generator\AuthenticationGenerator;
use Jane\OpenApiCommon\Generator\ModelGenerator;
use Jane\OpenApiCommon\Generator\NormalizerGenerator;
use Jane\OpenApiCommon\JaneOpenApi as CommonJaneOpenApi;
use PhpParser\ParserFactory;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class JaneOpenApi extends CommonJaneOpenApi
{
    protected const OBJECT_NORMALIZER_CLASS = JsonSchema\Normalizer\JaneObjectNormalizer::class;
    protected const WHITELIST_FETCH_CLASS = WhitelistedSchema::class;

    protected static function create(array $options = []): CommonJaneOpenApi
    {
        $serializer = self::buildSerializer();

        return new self(
            SchemaParser::class,
            GuesserFactory::create($serializer, $options),
            $options['strict'] ?? true
        );
    }

    protected static function generators(DenormalizerInterface $denormalizer, array $options = []): \Generator
    {
        $naming = new Naming();
        $parser = (new ParserFactory())->create(ParserFactory::PREFER_PHP7);

        yield new ModelGenerator($naming, $parser);
        yield new NormalizerGenerator($naming, $parser, $options['reference'] ?? false, $options['use-cacheable-supports-method'] ?? false, $options['skip-null-values'] ?? true);
        yield new AuthenticationGenerator();
        yield GeneratorFactory::build($denormalizer, $options['endpoint-generator'] ?: EndpointGenerator::class);
    }
}
