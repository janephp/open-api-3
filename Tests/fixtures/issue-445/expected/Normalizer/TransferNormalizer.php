<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class TransferNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\Transfer';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Transfer';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\Transfer();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
            }
            if (\array_key_exists('transferType', $data)) {
                $object->setTransferType($data['transferType']);
            }
            if (\array_key_exists('businessProcessId', $data) && $data['businessProcessId'] !== null) {
                $object->setBusinessProcessId($data['businessProcessId']);
            }
            elseif (\array_key_exists('businessProcessId', $data) && $data['businessProcessId'] === null) {
                $object->setBusinessProcessId(null);
            }
            if (\array_key_exists('fileTransferCount', $data)) {
                $object->setFileTransferCount($data['fileTransferCount']);
            }
            if (\array_key_exists('collectionId', $data) && $data['collectionId'] !== null) {
                $object->setCollectionId($data['collectionId']);
            }
            elseif (\array_key_exists('collectionId', $data) && $data['collectionId'] === null) {
                $object->setCollectionId(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['name'] = $object->getName();
            $data['state'] = $object->getState();
            $data['transferType'] = $object->getTransferType();
            if ($object->isInitialized('businessProcessId') && null !== $object->getBusinessProcessId()) {
                $data['businessProcessId'] = $object->getBusinessProcessId();
            }
            $data['fileTransferCount'] = $object->getFileTransferCount();
            if ($object->isInitialized('collectionId') && null !== $object->getCollectionId()) {
                $data['collectionId'] = $object->getCollectionId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\Transfer' => false];
        }
    }
} else {
    class TransferNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\Transfer';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Transfer';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\Transfer();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
            }
            if (\array_key_exists('transferType', $data)) {
                $object->setTransferType($data['transferType']);
            }
            if (\array_key_exists('businessProcessId', $data) && $data['businessProcessId'] !== null) {
                $object->setBusinessProcessId($data['businessProcessId']);
            }
            elseif (\array_key_exists('businessProcessId', $data) && $data['businessProcessId'] === null) {
                $object->setBusinessProcessId(null);
            }
            if (\array_key_exists('fileTransferCount', $data)) {
                $object->setFileTransferCount($data['fileTransferCount']);
            }
            if (\array_key_exists('collectionId', $data) && $data['collectionId'] !== null) {
                $object->setCollectionId($data['collectionId']);
            }
            elseif (\array_key_exists('collectionId', $data) && $data['collectionId'] === null) {
                $object->setCollectionId(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['name'] = $object->getName();
            $data['state'] = $object->getState();
            $data['transferType'] = $object->getTransferType();
            if ($object->isInitialized('businessProcessId') && null !== $object->getBusinessProcessId()) {
                $data['businessProcessId'] = $object->getBusinessProcessId();
            }
            $data['fileTransferCount'] = $object->getFileTransferCount();
            if ($object->isInitialized('collectionId') && null !== $object->getCollectionId()) {
                $data['collectionId'] = $object->getCollectionId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\Transfer' => false];
        }
    }
}