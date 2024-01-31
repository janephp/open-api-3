<?php

namespace Jane\Component\OpenApi3\Tests\Client\Runtime\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ReferenceNormalizer implements NormalizerInterface
{
    /**
     * {@inheritdoc}
     */
    public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
    {
        $ref = [];
        $ref['$ref'] = (string) $object->getReferenceUri();
        return $ref;
    }
    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, $format = null, $context = []) : bool
    {
        return $data instanceof Reference;
    }
}