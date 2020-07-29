<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ScimV2OrganizationsOrgUsersScimUserIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ScimV2OrganizationsOrgUsersScimUserIdPatchBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ScimV2OrganizationsOrgUsersScimUserIdPatchBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPatchBody();
        if (\array_key_exists('schemas', $data)) {
            $values = array();
            foreach ($data['schemas'] as $value) {
                $values[] = $value;
            }
            $object->setSchemas($values);
        }
        if (\array_key_exists('Operations', $data)) {
            $values_1 = array();
            foreach ($data['Operations'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\ScimV2OrganizationsOrgUsersScimUserIdPatchBodyOperationsItem', 'json', $context);
            }
            $object->setOperations($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSchemas()) {
            $values = array();
            foreach ($object->getSchemas() as $value) {
                $values[] = $value;
            }
            $data['schemas'] = $values;
        }
        if (null !== $object->getOperations()) {
            $values_1 = array();
            foreach ($object->getOperations() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Operations'] = $values_1;
        }
        return $data;
    }
}