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
    class OutputResetRetryAttemptsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\OutputResetRetryAttemptsRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\OutputResetRetryAttemptsRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\OutputResetRetryAttemptsRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('outputIds', $data) && $data['outputIds'] !== null) {
                $values = [];
                foreach ($data['outputIds'] as $value) {
                    $values[] = $value;
                }
                $object->setOutputIds($values);
            }
            elseif (\array_key_exists('outputIds', $data) && $data['outputIds'] === null) {
                $object->setOutputIds(null);
            }
            if (\array_key_exists('contentIds', $data) && $data['contentIds'] !== null) {
                $values_1 = [];
                foreach ($data['contentIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setContentIds($values_1);
            }
            elseif (\array_key_exists('contentIds', $data) && $data['contentIds'] === null) {
                $object->setContentIds(null);
            }
            if (\array_key_exists('fileExtensions', $data) && $data['fileExtensions'] !== null) {
                $values_2 = [];
                foreach ($data['fileExtensions'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setFileExtensions($values_2);
            }
            elseif (\array_key_exists('fileExtensions', $data) && $data['fileExtensions'] === null) {
                $object->setFileExtensions(null);
            }
            if (\array_key_exists('outputFormatIds', $data) && $data['outputFormatIds'] !== null) {
                $values_3 = [];
                foreach ($data['outputFormatIds'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setOutputFormatIds($values_3);
            }
            elseif (\array_key_exists('outputFormatIds', $data) && $data['outputFormatIds'] === null) {
                $object->setOutputFormatIds(null);
            }
            if (\array_key_exists('includeCompleted', $data)) {
                $object->setIncludeCompleted($data['includeCompleted']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('outputIds') && null !== $object->getOutputIds()) {
                $values = [];
                foreach ($object->getOutputIds() as $value) {
                    $values[] = $value;
                }
                $data['outputIds'] = $values;
            }
            if ($object->isInitialized('contentIds') && null !== $object->getContentIds()) {
                $values_1 = [];
                foreach ($object->getContentIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['contentIds'] = $values_1;
            }
            if ($object->isInitialized('fileExtensions') && null !== $object->getFileExtensions()) {
                $values_2 = [];
                foreach ($object->getFileExtensions() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['fileExtensions'] = $values_2;
            }
            if ($object->isInitialized('outputFormatIds') && null !== $object->getOutputFormatIds()) {
                $values_3 = [];
                foreach ($object->getOutputFormatIds() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['outputFormatIds'] = $values_3;
            }
            $data['includeCompleted'] = $object->getIncludeCompleted();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\OutputResetRetryAttemptsRequest' => false];
        }
    }
} else {
    class OutputResetRetryAttemptsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\OutputResetRetryAttemptsRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\OutputResetRetryAttemptsRequest';
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
            $object = new \PicturePark\API\Model\OutputResetRetryAttemptsRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('outputIds', $data) && $data['outputIds'] !== null) {
                $values = [];
                foreach ($data['outputIds'] as $value) {
                    $values[] = $value;
                }
                $object->setOutputIds($values);
            }
            elseif (\array_key_exists('outputIds', $data) && $data['outputIds'] === null) {
                $object->setOutputIds(null);
            }
            if (\array_key_exists('contentIds', $data) && $data['contentIds'] !== null) {
                $values_1 = [];
                foreach ($data['contentIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setContentIds($values_1);
            }
            elseif (\array_key_exists('contentIds', $data) && $data['contentIds'] === null) {
                $object->setContentIds(null);
            }
            if (\array_key_exists('fileExtensions', $data) && $data['fileExtensions'] !== null) {
                $values_2 = [];
                foreach ($data['fileExtensions'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setFileExtensions($values_2);
            }
            elseif (\array_key_exists('fileExtensions', $data) && $data['fileExtensions'] === null) {
                $object->setFileExtensions(null);
            }
            if (\array_key_exists('outputFormatIds', $data) && $data['outputFormatIds'] !== null) {
                $values_3 = [];
                foreach ($data['outputFormatIds'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setOutputFormatIds($values_3);
            }
            elseif (\array_key_exists('outputFormatIds', $data) && $data['outputFormatIds'] === null) {
                $object->setOutputFormatIds(null);
            }
            if (\array_key_exists('includeCompleted', $data)) {
                $object->setIncludeCompleted($data['includeCompleted']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('outputIds') && null !== $object->getOutputIds()) {
                $values = [];
                foreach ($object->getOutputIds() as $value) {
                    $values[] = $value;
                }
                $data['outputIds'] = $values;
            }
            if ($object->isInitialized('contentIds') && null !== $object->getContentIds()) {
                $values_1 = [];
                foreach ($object->getContentIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['contentIds'] = $values_1;
            }
            if ($object->isInitialized('fileExtensions') && null !== $object->getFileExtensions()) {
                $values_2 = [];
                foreach ($object->getFileExtensions() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['fileExtensions'] = $values_2;
            }
            if ($object->isInitialized('outputFormatIds') && null !== $object->getOutputFormatIds()) {
                $values_3 = [];
                foreach ($object->getOutputFormatIds() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['outputFormatIds'] = $values_3;
            }
            $data['includeCompleted'] = $object->getIncludeCompleted();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\OutputResetRetryAttemptsRequest' => false];
        }
    }
}