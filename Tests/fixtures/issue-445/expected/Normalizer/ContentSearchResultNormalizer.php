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
class ContentSearchResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\ContentSearchResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentSearchResult';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\ContentSearchResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('totalResults', $data)) {
            $object->setTotalResults($data['totalResults']);
        }
        if (\array_key_exists('results', $data)) {
            $values = array();
            foreach ($data['results'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\Content', 'json', $context);
            }
            $object->setResults($values);
        }
        if (\array_key_exists('elapsedMilliseconds', $data)) {
            $object->setElapsedMilliseconds($data['elapsedMilliseconds']);
        }
        if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
            $object->setPageToken($data['pageToken']);
        }
        elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
            $object->setPageToken(null);
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->setSearchString($data['searchString']);
        }
        elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
            $object->setSearchString(null);
        }
        if (\array_key_exists('isSearchStringRewritten', $data)) {
            $object->setIsSearchStringRewritten($data['isSearchStringRewritten']);
        }
        if (\array_key_exists('queryDebugInformation', $data) && $data['queryDebugInformation'] !== null) {
            $values_1 = array();
            foreach ($data['queryDebugInformation'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\QueryDebugInformation', 'json', $context);
            }
            $object->setQueryDebugInformation($values_1);
        }
        elseif (\array_key_exists('queryDebugInformation', $data) && $data['queryDebugInformation'] === null) {
            $object->setQueryDebugInformation(null);
        }
        if (\array_key_exists('aggregationResults', $data) && $data['aggregationResults'] !== null) {
            $values_2 = array();
            foreach ($data['aggregationResults'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'PicturePark\\API\\Model\\AggregationResult', 'json', $context);
            }
            $object->setAggregationResults($values_2);
        }
        elseif (\array_key_exists('aggregationResults', $data) && $data['aggregationResults'] === null) {
            $object->setAggregationResults(null);
        }
        if (\array_key_exists('rightsAggregationsCounts', $data) && $data['rightsAggregationsCounts'] !== null) {
            $values_3 = array();
            foreach ($data['rightsAggregationsCounts'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\ContentRightAggregationCount', 'json', $context);
            }
            $object->setRightsAggregationsCounts($values_3);
        }
        elseif (\array_key_exists('rightsAggregationsCounts', $data) && $data['rightsAggregationsCounts'] === null) {
            $object->setRightsAggregationsCounts(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['totalResults'] = $object->getTotalResults();
        $values = array();
        foreach ($object->getResults() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['results'] = $values;
        $data['elapsedMilliseconds'] = $object->getElapsedMilliseconds();
        if (null !== $object->getPageToken()) {
            $data['pageToken'] = $object->getPageToken();
        }
        if (null !== $object->getSearchString()) {
            $data['searchString'] = $object->getSearchString();
        }
        if (null !== $object->getIsSearchStringRewritten()) {
            $data['isSearchStringRewritten'] = $object->getIsSearchStringRewritten();
        }
        if (null !== $object->getQueryDebugInformation()) {
            $values_1 = array();
            foreach ($object->getQueryDebugInformation() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['queryDebugInformation'] = $values_1;
        }
        if (null !== $object->getAggregationResults()) {
            $values_2 = array();
            foreach ($object->getAggregationResults() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['aggregationResults'] = $values_2;
        }
        if (null !== $object->getRightsAggregationsCounts()) {
            $values_3 = array();
            foreach ($object->getRightsAggregationsCounts() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['rightsAggregationsCounts'] = $values_3;
        }
        return $data;
    }
}