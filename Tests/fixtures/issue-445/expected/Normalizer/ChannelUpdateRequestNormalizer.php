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
class ChannelUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\ChannelUpdateRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ChannelUpdateRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\ChannelUpdateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values = array();
            foreach ($data['sort'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\SortInfo', 'json', $context);
            }
            $object->setSort($values);
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
            $object->setSort(null);
        }
        if (\array_key_exists('sortOrder', $data)) {
            $object->setSortOrder($data['sortOrder']);
        }
        if (\array_key_exists('sortFields', $data)) {
            $values_1 = array();
            foreach ($data['sortFields'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\SortField', 'json', $context);
            }
            $object->setSortFields($values_1);
        }
        if (\array_key_exists('names', $data)) {
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['names'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setNames($values_2);
        }
        if (\array_key_exists('searchIndexId', $data) && $data['searchIndexId'] !== null) {
            $object->setSearchIndexId($data['searchIndexId']);
        }
        elseif (\array_key_exists('searchIndexId', $data) && $data['searchIndexId'] === null) {
            $object->setSearchIndexId(null);
        }
        if (\array_key_exists('grantedUserRoleIds', $data) && $data['grantedUserRoleIds'] !== null) {
            $values_3 = array();
            foreach ($data['grantedUserRoleIds'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setGrantedUserRoleIds($values_3);
        }
        elseif (\array_key_exists('grantedUserRoleIds', $data) && $data['grantedUserRoleIds'] === null) {
            $object->setGrantedUserRoleIds(null);
        }
        if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
            $values_4 = array();
            foreach ($data['aggregations'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
            }
            $object->setAggregations($values_4);
        }
        elseif (\array_key_exists('aggregations', $data) && $data['aggregations'] === null) {
            $object->setAggregations(null);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $object->setFilter($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
        }
        if (\array_key_exists('extendedSimpleSearchFields', $data) && $data['extendedSimpleSearchFields'] !== null) {
            $values_5 = array();
            foreach ($data['extendedSimpleSearchFields'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setExtendedSimpleSearchFields($values_5);
        }
        elseif (\array_key_exists('extendedSimpleSearchFields', $data) && $data['extendedSimpleSearchFields'] === null) {
            $object->setExtendedSimpleSearchFields(null);
        }
        if (\array_key_exists('missingResultsDisplayPatterns', $data) && $data['missingResultsDisplayPatterns'] !== null) {
            $object->setMissingResultsDisplayPatterns($data['missingResultsDisplayPatterns']);
        }
        elseif (\array_key_exists('missingResultsDisplayPatterns', $data) && $data['missingResultsDisplayPatterns'] === null) {
            $object->setMissingResultsDisplayPatterns(null);
        }
        if (\array_key_exists('viewForAll', $data)) {
            $object->setViewForAll($data['viewForAll']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSort()) {
            $values = array();
            foreach ($object->getSort() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['sort'] = $values;
        }
        $data['sortOrder'] = $object->getSortOrder();
        $values_1 = array();
        foreach ($object->getSortFields() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['sortFields'] = $values_1;
        $values_2 = array();
        foreach ($object->getNames() as $key => $value_2) {
            $values_2[$key] = $value_2;
        }
        $data['names'] = $values_2;
        if (null !== $object->getSearchIndexId()) {
            $data['searchIndexId'] = $object->getSearchIndexId();
        }
        if (null !== $object->getGrantedUserRoleIds()) {
            $values_3 = array();
            foreach ($object->getGrantedUserRoleIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['grantedUserRoleIds'] = $values_3;
        }
        if (null !== $object->getAggregations()) {
            $values_4 = array();
            foreach ($object->getAggregations() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['aggregations'] = $values_4;
        }
        if (null !== $object->getFilter()) {
            $data['filter'] = $object->getFilter();
        }
        if (null !== $object->getExtendedSimpleSearchFields()) {
            $values_5 = array();
            foreach ($object->getExtendedSimpleSearchFields() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['extendedSimpleSearchFields'] = $values_5;
        }
        if (null !== $object->getMissingResultsDisplayPatterns()) {
            $data['missingResultsDisplayPatterns'] = $object->getMissingResultsDisplayPatterns();
        }
        $data['viewForAll'] = $object->getViewForAll();
        return $data;
    }
}