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
class AlphaHandlingActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\AlphaHandlingAction';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\AlphaHandlingAction';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\AlphaHandlingAction();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('alphaHandling', $data)) {
            $object->setAlphaHandling($data['alphaHandling']);
        }
        if (\array_key_exists('replacementRgbColorHexCode', $data) && $data['replacementRgbColorHexCode'] !== null) {
            $object->setReplacementRgbColorHexCode($data['replacementRgbColorHexCode']);
        }
        elseif (\array_key_exists('replacementRgbColorHexCode', $data) && $data['replacementRgbColorHexCode'] === null) {
            $object->setReplacementRgbColorHexCode(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['kind'] = $object->getKind();
        if (null !== $object->getAlphaHandling()) {
            $data['alphaHandling'] = $object->getAlphaHandling();
        }
        if (null !== $object->getReplacementRgbColorHexCode()) {
            $data['replacementRgbColorHexCode'] = $object->getReplacementRgbColorHexCode();
        }
        return $data;
    }
}