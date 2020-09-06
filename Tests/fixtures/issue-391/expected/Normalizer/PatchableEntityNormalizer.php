<?php

namespace Gounlaf\JanephpBug\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Gounlaf\JanephpBug\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PatchableEntityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gounlaf\\JanephpBug\\Model\\PatchableEntity';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gounlaf\\JanephpBug\\Model\\PatchableEntity';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gounlaf\JanephpBug\Model\PatchableEntity();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('nullable_property', $data) && $data['nullable_property'] !== null) {
            $object->setNullableProperty($data['nullable_property']);
        }
        elseif (\array_key_exists('nullable_property', $data) && $data['nullable_property'] === null) {
            $object->setNullableProperty(null);
        }
        if (\array_key_exists('nullable_and_required_property', $data) && $data['nullable_and_required_property'] !== null) {
            $object->setNullableAndRequiredProperty($data['nullable_and_required_property']);
        }
        elseif (\array_key_exists('nullable_and_required_property', $data) && $data['nullable_and_required_property'] === null) {
            $object->setNullableAndRequiredProperty(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNullableProperty()) {
            $data['nullable_property'] = $object->getNullableProperty();
        }
        $data['nullable_and_required_property'] = $object->getNullableAndRequiredProperty();
        return $data;
    }
}