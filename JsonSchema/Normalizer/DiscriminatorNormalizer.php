<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi3\JsonSchema\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi3\JsonSchema\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DiscriminatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi3\\JsonSchema\\Model\\Discriminator';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\OpenApi3\JsonSchema\Model\Discriminator;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\OpenApi3\JsonSchema\Model\Discriminator();
        if (\array_key_exists('propertyName', $data) && $data['propertyName'] !== null) {
            $object->setPropertyName($data['propertyName']);
        } elseif (\array_key_exists('propertyName', $data) && $data['propertyName'] === null) {
            $object->setPropertyName(null);
        }
        if (\array_key_exists('mapping', $data) && $data['mapping'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['mapping'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setMapping($values);
        } elseif (\array_key_exists('mapping', $data) && $data['mapping'] === null) {
            $object->setMapping(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getPropertyName()) {
            $data['propertyName'] = $object->getPropertyName();
        } else {
            $data['propertyName'] = null;
        }
        if (null !== $object->getMapping()) {
            $values = [];
            foreach ($object->getMapping() as $key => $value) {
                $values[$key] = $value;
            }
            $data['mapping'] = $values;
        } else {
            $data['mapping'] = null;
        }

        return $data;
    }
}
