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
    class MetadataErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\MetadataError';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\MetadataError';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\MetadataError();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('errorType', $data) && $data['errorType'] !== null) {
                $object->setErrorType($data['errorType']);
            }
            elseif (\array_key_exists('errorType', $data) && $data['errorType'] === null) {
                $object->setErrorType(null);
            }
            if (\array_key_exists('lineNumber', $data)) {
                $object->setLineNumber($data['lineNumber']);
            }
            if (\array_key_exists('linePosition', $data)) {
                $object->setLinePosition($data['linePosition']);
            }
            if (\array_key_exists('path', $data) && $data['path'] !== null) {
                $object->setPath($data['path']);
            }
            elseif (\array_key_exists('path', $data) && $data['path'] === null) {
                $object->setPath(null);
            }
            if (\array_key_exists('message', $data) && $data['message'] !== null) {
                $object->setMessage($data['message']);
            }
            elseif (\array_key_exists('message', $data) && $data['message'] === null) {
                $object->setMessage(null);
            }
            if (\array_key_exists('schemaId', $data) && $data['schemaId'] !== null) {
                $object->setSchemaId($data['schemaId']);
            }
            elseif (\array_key_exists('schemaId', $data) && $data['schemaId'] === null) {
                $object->setSchemaId(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('errorType') && null !== $object->getErrorType()) {
                $data['errorType'] = $object->getErrorType();
            }
            $data['lineNumber'] = $object->getLineNumber();
            $data['linePosition'] = $object->getLinePosition();
            if ($object->isInitialized('path') && null !== $object->getPath()) {
                $data['path'] = $object->getPath();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['message'] = $object->getMessage();
            }
            if ($object->isInitialized('schemaId') && null !== $object->getSchemaId()) {
                $data['schemaId'] = $object->getSchemaId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\MetadataError' => false];
        }
    }
} else {
    class MetadataErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\MetadataError';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\MetadataError';
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
            $object = new \PicturePark\API\Model\MetadataError();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('errorType', $data) && $data['errorType'] !== null) {
                $object->setErrorType($data['errorType']);
            }
            elseif (\array_key_exists('errorType', $data) && $data['errorType'] === null) {
                $object->setErrorType(null);
            }
            if (\array_key_exists('lineNumber', $data)) {
                $object->setLineNumber($data['lineNumber']);
            }
            if (\array_key_exists('linePosition', $data)) {
                $object->setLinePosition($data['linePosition']);
            }
            if (\array_key_exists('path', $data) && $data['path'] !== null) {
                $object->setPath($data['path']);
            }
            elseif (\array_key_exists('path', $data) && $data['path'] === null) {
                $object->setPath(null);
            }
            if (\array_key_exists('message', $data) && $data['message'] !== null) {
                $object->setMessage($data['message']);
            }
            elseif (\array_key_exists('message', $data) && $data['message'] === null) {
                $object->setMessage(null);
            }
            if (\array_key_exists('schemaId', $data) && $data['schemaId'] !== null) {
                $object->setSchemaId($data['schemaId']);
            }
            elseif (\array_key_exists('schemaId', $data) && $data['schemaId'] === null) {
                $object->setSchemaId(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('errorType') && null !== $object->getErrorType()) {
                $data['errorType'] = $object->getErrorType();
            }
            $data['lineNumber'] = $object->getLineNumber();
            $data['linePosition'] = $object->getLinePosition();
            if ($object->isInitialized('path') && null !== $object->getPath()) {
                $data['path'] = $object->getPath();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['message'] = $object->getMessage();
            }
            if ($object->isInitialized('schemaId') && null !== $object->getSchemaId()) {
                $data['schemaId'] = $object->getSchemaId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\MetadataError' => false];
        }
    }
}