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
class ContentAggregationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\ContentAggregationRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentAggregationRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\ContentAggregationRequest();
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
        if (\array_key_exists('channelId', $data) && $data['channelId'] !== null) {
            $object->setChannelId($data['channelId']);
        }
        elseif (\array_key_exists('channelId', $data) && $data['channelId'] === null) {
            $object->setChannelId(null);
        }
        if (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] !== null) {
            $values_2 = array();
            foreach ($data['searchLanguages'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSearchLanguages($values_2);
        }
        elseif (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] === null) {
            $object->setSearchLanguages(null);
        }
        if (\array_key_exists('collectionId', $data) && $data['collectionId'] !== null) {
            $object->setCollectionId($data['collectionId']);
        }
        elseif (\array_key_exists('collectionId', $data) && $data['collectionId'] === null) {
            $object->setCollectionId(null);
        }
        if (\array_key_exists('lifeCycleFilter', $data)) {
            $object->setLifeCycleFilter($data['lifeCycleFilter']);
        }
        if (\array_key_exists('brokenDependenciesFilter', $data)) {
            $object->setBrokenDependenciesFilter($data['brokenDependenciesFilter']);
        }
        if (\array_key_exists('searchType', $data)) {
            $object->setSearchType($data['searchType']);
        }
        if (\array_key_exists('aggregators', $data)) {
            $values_3 = array();
            foreach ($data['aggregators'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
            }
            $object->setAggregators($values_3);
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
        if (null !== $object->getChannelId()) {
            $data['channelId'] = $object->getChannelId();
        }
        if (null !== $object->getSearchLanguages()) {
            $values_2 = array();
            foreach ($object->getSearchLanguages() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['searchLanguages'] = $values_2;
        }
        if (null !== $object->getCollectionId()) {
            $data['collectionId'] = $object->getCollectionId();
        }
        $data['lifeCycleFilter'] = $object->getLifeCycleFilter();
        $data['brokenDependenciesFilter'] = $object->getBrokenDependenciesFilter();
        $data['searchType'] = $object->getSearchType();
        $values_3 = array();
        foreach ($object->getAggregators() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $data['aggregators'] = $values_3;
        return $data;
    }
}