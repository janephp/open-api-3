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
class BusinessProcessSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\BusinessProcessSearchRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessProcessSearchRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessProcessSearchRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('limit', $data)) {
            $object->setLimit($data['limit']);
        }
        if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
            $object->setPageToken($data['pageToken']);
        }
        elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
            $object->setPageToken(null);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $object->setFilter($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
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
        if (\array_key_exists('debugMode', $data)) {
            $object->setDebugMode($data['debugMode']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['limit'] = $object->getLimit();
        if (null !== $object->getPageToken()) {
            $data['pageToken'] = $object->getPageToken();
        }
        if (null !== $object->getFilter()) {
            $data['filter'] = $object->getFilter();
        }
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
        $data['debugMode'] = $object->getDebugMode();
        return $data;
    }
}