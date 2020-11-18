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
class CreateTransferRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\CreateTransferRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\CreateTransferRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\CreateTransferRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('transferType', $data)) {
            $object->setTransferType($data['transferType']);
        }
        if (\array_key_exists('files', $data) && $data['files'] !== null) {
            $values = array();
            foreach ($data['files'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\TransferUploadFile', 'json', $context);
            }
            $object->setFiles($values);
        }
        elseif (\array_key_exists('files', $data) && $data['files'] === null) {
            $object->setFiles(null);
        }
        if (\array_key_exists('webLinks', $data) && $data['webLinks'] !== null) {
            $values_1 = array();
            foreach ($data['webLinks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\TransferWebLink', 'json', $context);
            }
            $object->setWebLinks($values_1);
        }
        elseif (\array_key_exists('webLinks', $data) && $data['webLinks'] === null) {
            $object->setWebLinks(null);
        }
        if (\array_key_exists('collectionName', $data) && $data['collectionName'] !== null) {
            $object->setCollectionName($data['collectionName']);
        }
        elseif (\array_key_exists('collectionName', $data) && $data['collectionName'] === null) {
            $object->setCollectionName(null);
        }
        if (\array_key_exists('createCollection', $data)) {
            $object->setCreateCollection($data['createCollection']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['name'] = $object->getName();
        $data['transferType'] = $object->getTransferType();
        if (null !== $object->getFiles()) {
            $values = array();
            foreach ($object->getFiles() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['files'] = $values;
        }
        if (null !== $object->getWebLinks()) {
            $values_1 = array();
            foreach ($object->getWebLinks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['webLinks'] = $values_1;
        }
        if (null !== $object->getCollectionName()) {
            $data['collectionName'] = $object->getCollectionName();
        }
        $data['createCollection'] = $object->getCreateCollection();
        return $data;
    }
}