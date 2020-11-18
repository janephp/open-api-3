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
class XmpMappingEntryConfigurationTagboxNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\XmpMappingEntryConfigurationTagbox';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\XmpMappingEntryConfigurationTagbox';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\XmpMappingEntryConfigurationTagbox();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('keyFieldIds', $data)) {
            $values = array();
            foreach ($data['keyFieldIds'] as $value) {
                $values[] = $value;
            }
            $object->setKeyFieldIds($values);
        }
        if (\array_key_exists('caseSensitive', $data)) {
            $object->setCaseSensitive($data['caseSensitive']);
        }
        if (\array_key_exists('includeAllSchemaChildren', $data)) {
            $object->setIncludeAllSchemaChildren($data['includeAllSchemaChildren']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['kind'] = $object->getKind();
        $values = array();
        foreach ($object->getKeyFieldIds() as $value) {
            $values[] = $value;
        }
        $data['keyFieldIds'] = $values;
        $data['caseSensitive'] = $object->getCaseSensitive();
        $data['includeAllSchemaChildren'] = $object->getIncludeAllSchemaChildren();
        return $data;
    }
}