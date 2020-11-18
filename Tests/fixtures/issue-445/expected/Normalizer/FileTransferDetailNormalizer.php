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
class FileTransferDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\FileTransferDetail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\FileTransferDetail';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\FileTransferDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('identifier', $data) && $data['identifier'] !== null) {
            $object->setIdentifier($data['identifier']);
        }
        elseif (\array_key_exists('identifier', $data) && $data['identifier'] === null) {
            $object->setIdentifier(null);
        }
        if (\array_key_exists('requestId', $data)) {
            $object->setRequestId($data['requestId']);
        }
        if (\array_key_exists('transferId', $data)) {
            $object->setTransferId($data['transferId']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('contentId', $data) && $data['contentId'] !== null) {
            $object->setContentId($data['contentId']);
        }
        elseif (\array_key_exists('contentId', $data) && $data['contentId'] === null) {
            $object->setContentId(null);
        }
        if (\array_key_exists('audit', $data)) {
            $object->setAudit($data['audit']);
        }
        if (\array_key_exists('fileMetadata', $data) && $data['fileMetadata'] !== null) {
            $object->setFileMetadata($data['fileMetadata']);
        }
        elseif (\array_key_exists('fileMetadata', $data) && $data['fileMetadata'] === null) {
            $object->setFileMetadata(null);
        }
        if (\array_key_exists('outputItems', $data) && $data['outputItems'] !== null) {
            $values = array();
            foreach ($data['outputItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\FileTransferOutput', 'json', $context);
            }
            $object->setOutputItems($values);
        }
        elseif (\array_key_exists('outputItems', $data) && $data['outputItems'] === null) {
            $object->setOutputItems(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['name'] = $object->getName();
        if (null !== $object->getIdentifier()) {
            $data['identifier'] = $object->getIdentifier();
        }
        $data['requestId'] = $object->getRequestId();
        $data['transferId'] = $object->getTransferId();
        $data['state'] = $object->getState();
        if (null !== $object->getContentId()) {
            $data['contentId'] = $object->getContentId();
        }
        $data['audit'] = $object->getAudit();
        if (null !== $object->getFileMetadata()) {
            $data['fileMetadata'] = $object->getFileMetadata();
        }
        if (null !== $object->getOutputItems()) {
            $values = array();
            foreach ($object->getOutputItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['outputItems'] = $values;
        }
        return $data;
    }
}