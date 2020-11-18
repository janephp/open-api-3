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
class PermissionSetUserPermissionRightsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\PermissionSetUserPermissionRights';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\PermissionSetUserPermissionRights';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\PermissionSetUserPermissionRights();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('permissionSetId', $data) && $data['permissionSetId'] !== null) {
            $object->setPermissionSetId($data['permissionSetId']);
        }
        elseif (\array_key_exists('permissionSetId', $data) && $data['permissionSetId'] === null) {
            $object->setPermissionSetId(null);
        }
        if (\array_key_exists('permissionSetRights', $data) && $data['permissionSetRights'] !== null) {
            $values = array();
            foreach ($data['permissionSetRights'] as $value) {
                $values[] = $value;
            }
            $object->setPermissionSetRights($values);
        }
        elseif (\array_key_exists('permissionSetRights', $data) && $data['permissionSetRights'] === null) {
            $object->setPermissionSetRights(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPermissionSetId()) {
            $data['permissionSetId'] = $object->getPermissionSetId();
        }
        if (null !== $object->getPermissionSetRights()) {
            $values = array();
            foreach ($object->getPermissionSetRights() as $value) {
                $values[] = $value;
            }
            $data['permissionSetRights'] = $values;
        }
        return $data;
    }
}