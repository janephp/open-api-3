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
class ClarifaiTaggingOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\ClarifaiTaggingOptions';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ClarifaiTaggingOptions';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\ClarifaiTaggingOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tagOutputFormatId', $data) && $data['tagOutputFormatId'] !== null) {
            $object->setTagOutputFormatId($data['tagOutputFormatId']);
        }
        elseif (\array_key_exists('tagOutputFormatId', $data) && $data['tagOutputFormatId'] === null) {
            $object->setTagOutputFormatId(null);
        }
        if (\array_key_exists('keywordLookupCacheName', $data) && $data['keywordLookupCacheName'] !== null) {
            $object->setKeywordLookupCacheName($data['keywordLookupCacheName']);
        }
        elseif (\array_key_exists('keywordLookupCacheName', $data) && $data['keywordLookupCacheName'] === null) {
            $object->setKeywordLookupCacheName(null);
        }
        if (\array_key_exists('taggingLayerId', $data) && $data['taggingLayerId'] !== null) {
            $object->setTaggingLayerId($data['taggingLayerId']);
        }
        elseif (\array_key_exists('taggingLayerId', $data) && $data['taggingLayerId'] === null) {
            $object->setTaggingLayerId(null);
        }
        if (\array_key_exists('foundTagsFieldId', $data) && $data['foundTagsFieldId'] !== null) {
            $object->setFoundTagsFieldId($data['foundTagsFieldId']);
        }
        elseif (\array_key_exists('foundTagsFieldId', $data) && $data['foundTagsFieldId'] === null) {
            $object->setFoundTagsFieldId(null);
        }
        if (\array_key_exists('missingKeywordsFieldId', $data) && $data['missingKeywordsFieldId'] !== null) {
            $object->setMissingKeywordsFieldId($data['missingKeywordsFieldId']);
        }
        elseif (\array_key_exists('missingKeywordsFieldId', $data) && $data['missingKeywordsFieldId'] === null) {
            $object->setMissingKeywordsFieldId(null);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('model', $data) && $data['model'] !== null) {
            $object->setModel($data['model']);
        }
        elseif (\array_key_exists('model', $data) && $data['model'] === null) {
            $object->setModel(null);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('minimumValue', $data) && $data['minimumValue'] !== null) {
            $object->setMinimumValue($data['minimumValue']);
        }
        elseif (\array_key_exists('minimumValue', $data) && $data['minimumValue'] === null) {
            $object->setMinimumValue(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTagOutputFormatId()) {
            $data['tagOutputFormatId'] = $object->getTagOutputFormatId();
        }
        if (null !== $object->getKeywordLookupCacheName()) {
            $data['keywordLookupCacheName'] = $object->getKeywordLookupCacheName();
        }
        if (null !== $object->getTaggingLayerId()) {
            $data['taggingLayerId'] = $object->getTaggingLayerId();
        }
        if (null !== $object->getFoundTagsFieldId()) {
            $data['foundTagsFieldId'] = $object->getFoundTagsFieldId();
        }
        if (null !== $object->getMissingKeywordsFieldId()) {
            $data['missingKeywordsFieldId'] = $object->getMissingKeywordsFieldId();
        }
        $data['kind'] = $object->getKind();
        if (null !== $object->getModel()) {
            $data['model'] = $object->getModel();
        }
        if (null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if (null !== $object->getMinimumValue()) {
            $data['minimumValue'] = $object->getMinimumValue();
        }
        return $data;
    }
}