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
class ListItemAggregationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\ListItemAggregationRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ListItemAggregationRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\ListItemAggregationRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->setSearchString($data['searchString']);
        }
        elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
            $object->setSearchString(null);
        }
        if (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] !== null) {
            $values = array();
            foreach ($data['searchBehaviors'] as $value) {
                $values[] = $value;
            }
            $object->setSearchBehaviors($values);
        }
        elseif (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] === null) {
            $object->setSearchBehaviors(null);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $object->setFilter($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
        }
        if (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] !== null) {
            $values_1 = array();
            foreach ($data['aggregationFilters'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\AggregationFilter', 'json', $context);
            }
            $object->setAggregationFilters($values_1);
        }
        elseif (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] === null) {
            $object->setAggregationFilters(null);
        }
        if (\array_key_exists('includeAllSchemaChildren', $data)) {
            $object->setIncludeAllSchemaChildren($data['includeAllSchemaChildren']);
        }
        if (\array_key_exists('brokenDependenciesFilter', $data)) {
            $object->setBrokenDependenciesFilter($data['brokenDependenciesFilter']);
        }
        if (\array_key_exists('schemaIds', $data) && $data['schemaIds'] !== null) {
            $values_2 = array();
            foreach ($data['schemaIds'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSchemaIds($values_2);
        }
        elseif (\array_key_exists('schemaIds', $data) && $data['schemaIds'] === null) {
            $object->setSchemaIds(null);
        }
        if (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] !== null) {
            $values_3 = array();
            foreach ($data['searchLanguages'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setSearchLanguages($values_3);
        }
        elseif (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] === null) {
            $object->setSearchLanguages(null);
        }
        if (\array_key_exists('lifeCycleFilter', $data)) {
            $object->setLifeCycleFilter($data['lifeCycleFilter']);
        }
        if (\array_key_exists('aggregators', $data)) {
            $values_4 = array();
            foreach ($data['aggregators'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
            }
            $object->setAggregators($values_4);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSearchString()) {
            $data['searchString'] = $object->getSearchString();
        }
        if (null !== $object->getSearchBehaviors()) {
            $values = array();
            foreach ($object->getSearchBehaviors() as $value) {
                $values[] = $value;
            }
            $data['searchBehaviors'] = $values;
        }
        if (null !== $object->getFilter()) {
            $data['filter'] = $object->getFilter();
        }
        if (null !== $object->getAggregationFilters()) {
            $values_1 = array();
            foreach ($object->getAggregationFilters() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['aggregationFilters'] = $values_1;
        }
        $data['includeAllSchemaChildren'] = $object->getIncludeAllSchemaChildren();
        $data['brokenDependenciesFilter'] = $object->getBrokenDependenciesFilter();
        if (null !== $object->getSchemaIds()) {
            $values_2 = array();
            foreach ($object->getSchemaIds() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['schemaIds'] = $values_2;
        }
        if (null !== $object->getSearchLanguages()) {
            $values_3 = array();
            foreach ($object->getSearchLanguages() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['searchLanguages'] = $values_3;
        }
        $data['lifeCycleFilter'] = $object->getLifeCycleFilter();
        $values_4 = array();
        foreach ($object->getAggregators() as $value_4) {
            $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
        }
        $data['aggregators'] = $values_4;
        return $data;
    }
}