<?php

namespace PicturePark\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AggregationResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\AggregationResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\AggregationResult';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\AggregationResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('sumOtherDocCount', $data) && $data['sumOtherDocCount'] !== null) {
            $object->setSumOtherDocCount($data['sumOtherDocCount']);
        }
        elseif (\array_key_exists('sumOtherDocCount', $data) && $data['sumOtherDocCount'] === null) {
            $object->setSumOtherDocCount(null);
        }
        if (\array_key_exists('aggregationResultItems', $data) && $data['aggregationResultItems'] !== null) {
            $values = array();
            foreach ($data['aggregationResultItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\AggregationResultItem', 'json', $context);
            }
            $object->setAggregationResultItems($values);
        }
        elseif (\array_key_exists('aggregationResultItems', $data) && $data['aggregationResultItems'] === null) {
            $object->setAggregationResultItems(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['name'] = $object->getName();
        if (null !== $object->getSumOtherDocCount()) {
            $data['sumOtherDocCount'] = $object->getSumOtherDocCount();
        }
        if (null !== $object->getAggregationResultItems()) {
            $values = array();
            foreach ($object->getAggregationResultItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['aggregationResultItems'] = $values;
        }
        return $data;
    }
}