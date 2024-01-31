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
    class CreateTransferRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\CreateTransferRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\CreateTransferRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
                $values = [];
                foreach ($data['files'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\TransferUploadFile', 'json', $context);
                }
                $object->setFiles($values);
            }
            elseif (\array_key_exists('files', $data) && $data['files'] === null) {
                $object->setFiles(null);
            }
            if (\array_key_exists('webLinks', $data) && $data['webLinks'] !== null) {
                $values_1 = [];
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
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['name'] = $object->getName();
            $data['transferType'] = $object->getTransferType();
            if ($object->isInitialized('files') && null !== $object->getFiles()) {
                $values = [];
                foreach ($object->getFiles() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['files'] = $values;
            }
            if ($object->isInitialized('webLinks') && null !== $object->getWebLinks()) {
                $values_1 = [];
                foreach ($object->getWebLinks() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['webLinks'] = $values_1;
            }
            if ($object->isInitialized('collectionName') && null !== $object->getCollectionName()) {
                $data['collectionName'] = $object->getCollectionName();
            }
            $data['createCollection'] = $object->getCreateCollection();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\CreateTransferRequest' => false];
        }
    }
} else {
    class CreateTransferRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\CreateTransferRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\CreateTransferRequest';
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
                $values = [];
                foreach ($data['files'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\TransferUploadFile', 'json', $context);
                }
                $object->setFiles($values);
            }
            elseif (\array_key_exists('files', $data) && $data['files'] === null) {
                $object->setFiles(null);
            }
            if (\array_key_exists('webLinks', $data) && $data['webLinks'] !== null) {
                $values_1 = [];
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
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['name'] = $object->getName();
            $data['transferType'] = $object->getTransferType();
            if ($object->isInitialized('files') && null !== $object->getFiles()) {
                $values = [];
                foreach ($object->getFiles() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['files'] = $values;
            }
            if ($object->isInitialized('webLinks') && null !== $object->getWebLinks()) {
                $values_1 = [];
                foreach ($object->getWebLinks() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['webLinks'] = $values_1;
            }
            if ($object->isInitialized('collectionName') && null !== $object->getCollectionName()) {
                $data['collectionName'] = $object->getCollectionName();
            }
            $data['createCollection'] = $object->getCreateCollection();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\CreateTransferRequest' => false];
        }
    }
}