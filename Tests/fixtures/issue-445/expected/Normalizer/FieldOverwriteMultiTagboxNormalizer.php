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
class FieldOverwriteMultiTagboxNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\FieldOverwriteMultiTagbox';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\FieldOverwriteMultiTagbox';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\FieldOverwriteMultiTagbox();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('required', $data)) {
            $object->setRequired($data['required']);
        }
        if (\array_key_exists('overwriteRequired', $data)) {
            $object->setOverwriteRequired($data['overwriteRequired']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $object->setFilter($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
        }
        if (\array_key_exists('overwriteFilter', $data)) {
            $object->setOverwriteFilter($data['overwriteFilter']);
        }
        if (\array_key_exists('listItemCreateTemplate', $data) && $data['listItemCreateTemplate'] !== null) {
            $object->setListItemCreateTemplate($data['listItemCreateTemplate']);
        }
        elseif (\array_key_exists('listItemCreateTemplate', $data) && $data['listItemCreateTemplate'] === null) {
            $object->setListItemCreateTemplate(null);
        }
        if (\array_key_exists('overwriteListItemCreateTemplate', $data)) {
            $object->setOverwriteListItemCreateTemplate($data['overwriteListItemCreateTemplate']);
        }
        if (\array_key_exists('maximumItems', $data) && $data['maximumItems'] !== null) {
            $object->setMaximumItems($data['maximumItems']);
        }
        elseif (\array_key_exists('maximumItems', $data) && $data['maximumItems'] === null) {
            $object->setMaximumItems(null);
        }
        if (\array_key_exists('overwriteMaximumItems', $data)) {
            $object->setOverwriteMaximumItems($data['overwriteMaximumItems']);
        }
        if (\array_key_exists('minimumItems', $data) && $data['minimumItems'] !== null) {
            $object->setMinimumItems($data['minimumItems']);
        }
        elseif (\array_key_exists('minimumItems', $data) && $data['minimumItems'] === null) {
            $object->setMinimumItems(null);
        }
        if (\array_key_exists('overwriteMinimumItems', $data)) {
            $object->setOverwriteMinimumItems($data['overwriteMinimumItems']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['required'] = $object->getRequired();
        $data['overwriteRequired'] = $object->getOverwriteRequired();
        $data['kind'] = $object->getKind();
        if (null !== $object->getFilter()) {
            $data['filter'] = $object->getFilter();
        }
        if (null !== $object->getOverwriteFilter()) {
            $data['overwriteFilter'] = $object->getOverwriteFilter();
        }
        if (null !== $object->getListItemCreateTemplate()) {
            $data['listItemCreateTemplate'] = $object->getListItemCreateTemplate();
        }
        if (null !== $object->getOverwriteListItemCreateTemplate()) {
            $data['overwriteListItemCreateTemplate'] = $object->getOverwriteListItemCreateTemplate();
        }
        if (null !== $object->getMaximumItems()) {
            $data['maximumItems'] = $object->getMaximumItems();
        }
        if (null !== $object->getOverwriteMaximumItems()) {
            $data['overwriteMaximumItems'] = $object->getOverwriteMaximumItems();
        }
        if (null !== $object->getMinimumItems()) {
            $data['minimumItems'] = $object->getMinimumItems();
        }
        if (null !== $object->getOverwriteMinimumItems()) {
            $data['overwriteMinimumItems'] = $object->getOverwriteMinimumItems();
        }
        return $data;
    }
}