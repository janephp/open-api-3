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
class ScopedInstallationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ScopedInstallation';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ScopedInstallation';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ScopedInstallation();
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($data['permissions']);
        }
        if (\array_key_exists('repository_selection', $data)) {
            $object->setRepositorySelection($data['repository_selection']);
        }
        if (\array_key_exists('single_file_name', $data) && $data['single_file_name'] !== null) {
            $object->setSingleFileName($data['single_file_name']);
        }
        elseif (\array_key_exists('single_file_name', $data) && $data['single_file_name'] === null) {
            $object->setSingleFileName(null);
        }
        if (\array_key_exists('repositories_url', $data)) {
            $object->setRepositoriesUrl($data['repositories_url']);
        }
        if (\array_key_exists('account', $data) && $data['account'] !== null) {
            $object->setAccount($this->denormalizer->denormalize($data['account'], 'Github\\Model\\SimpleUser', 'json', $context));
        }
        elseif (\array_key_exists('account', $data) && $data['account'] === null) {
            $object->setAccount(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPermissions()) {
            $data['permissions'] = $object->getPermissions();
        }
        if (null !== $object->getRepositorySelection()) {
            $data['repository_selection'] = $object->getRepositorySelection();
        }
        if (null !== $object->getSingleFileName()) {
            $data['single_file_name'] = $object->getSingleFileName();
        }
        if (null !== $object->getRepositoriesUrl()) {
            $data['repositories_url'] = $object->getRepositoriesUrl();
        }
        if (null !== $object->getAccount()) {
            $data['account'] = $this->normalizer->normalize($object->getAccount(), 'json', $context);
        }
        return $data;
    }
}