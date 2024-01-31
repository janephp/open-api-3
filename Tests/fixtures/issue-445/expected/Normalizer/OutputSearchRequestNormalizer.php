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
    class OutputSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\OutputSearchRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\OutputSearchRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\OutputSearchRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($data['limit']);
            }
            if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
                $object->setPageToken($data['pageToken']);
            }
            elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
                $object->setPageToken(null);
            }
            if (\array_key_exists('contentIds', $data) && $data['contentIds'] !== null) {
                $values = [];
                foreach ($data['contentIds'] as $value) {
                    $values[] = $value;
                }
                $object->setContentIds($values);
            }
            elseif (\array_key_exists('contentIds', $data) && $data['contentIds'] === null) {
                $object->setContentIds(null);
            }
            if (\array_key_exists('renderingStates', $data) && $data['renderingStates'] !== null) {
                $values_1 = [];
                foreach ($data['renderingStates'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRenderingStates($values_1);
            }
            elseif (\array_key_exists('renderingStates', $data) && $data['renderingStates'] === null) {
                $object->setRenderingStates(null);
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
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['limit'] = $object->getLimit();
            if ($object->isInitialized('pageToken') && null !== $object->getPageToken()) {
                $data['pageToken'] = $object->getPageToken();
            }
            if ($object->isInitialized('contentIds') && null !== $object->getContentIds()) {
                $values = [];
                foreach ($object->getContentIds() as $value) {
                    $values[] = $value;
                }
                $data['contentIds'] = $values;
            }
            if ($object->isInitialized('renderingStates') && null !== $object->getRenderingStates()) {
                $values_1 = [];
                foreach ($object->getRenderingStates() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['renderingStates'] = $values_1;
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
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\OutputSearchRequest' => false];
        }
    }
} else {
    class OutputSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\OutputSearchRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\OutputSearchRequest';
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
            $object = new \PicturePark\API\Model\OutputSearchRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($data['limit']);
            }
            if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
                $object->setPageToken($data['pageToken']);
            }
            elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
                $object->setPageToken(null);
            }
            if (\array_key_exists('contentIds', $data) && $data['contentIds'] !== null) {
                $values = [];
                foreach ($data['contentIds'] as $value) {
                    $values[] = $value;
                }
                $object->setContentIds($values);
            }
            elseif (\array_key_exists('contentIds', $data) && $data['contentIds'] === null) {
                $object->setContentIds(null);
            }
            if (\array_key_exists('renderingStates', $data) && $data['renderingStates'] !== null) {
                $values_1 = [];
                foreach ($data['renderingStates'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRenderingStates($values_1);
            }
            elseif (\array_key_exists('renderingStates', $data) && $data['renderingStates'] === null) {
                $object->setRenderingStates(null);
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
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['limit'] = $object->getLimit();
            if ($object->isInitialized('pageToken') && null !== $object->getPageToken()) {
                $data['pageToken'] = $object->getPageToken();
            }
            if ($object->isInitialized('contentIds') && null !== $object->getContentIds()) {
                $values = [];
                foreach ($object->getContentIds() as $value) {
                    $values[] = $value;
                }
                $data['contentIds'] = $values;
            }
            if ($object->isInitialized('renderingStates') && null !== $object->getRenderingStates()) {
                $values_1 = [];
                foreach ($object->getRenderingStates() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['renderingStates'] = $values_1;
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
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\OutputSearchRequest' => false];
        }
    }
}