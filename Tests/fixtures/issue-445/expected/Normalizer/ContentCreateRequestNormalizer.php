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
    class ContentCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ContentCreateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentCreateRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ContentCreateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentSchemaId', $data)) {
                $object->setContentSchemaId($data['contentSchemaId']);
            }
            if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
                $values = [];
                foreach ($data['layerSchemaIds'] as $value) {
                    $values[] = $value;
                }
                $object->setLayerSchemaIds($values);
            }
            elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
                $object->setLayerSchemaIds(null);
            }
            if (\array_key_exists('content', $data) && $data['content'] !== null) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['content'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setContent($values_1);
            }
            elseif (\array_key_exists('content', $data) && $data['content'] === null) {
                $object->setContent(null);
            }
            if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['metadata'] as $key_1 => $value_2) {
                    $values_2[$key_1] = $value_2;
                }
                $object->setMetadata($values_2);
            }
            elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
                $object->setMetadata(null);
            }
            if (\array_key_exists('contentPermissionSetIds', $data) && $data['contentPermissionSetIds'] !== null) {
                $values_3 = [];
                foreach ($data['contentPermissionSetIds'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setContentPermissionSetIds($values_3);
            }
            elseif (\array_key_exists('contentPermissionSetIds', $data) && $data['contentPermissionSetIds'] === null) {
                $object->setContentPermissionSetIds(null);
            }
            if (\array_key_exists('requestId', $data) && $data['requestId'] !== null) {
                $object->setRequestId($data['requestId']);
            }
            elseif (\array_key_exists('requestId', $data) && $data['requestId'] === null) {
                $object->setRequestId(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['contentSchemaId'] = $object->getContentSchemaId();
            if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
                $values = [];
                foreach ($object->getLayerSchemaIds() as $value) {
                    $values[] = $value;
                }
                $data['layerSchemaIds'] = $values;
            }
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $values_1 = [];
                foreach ($object->getContent() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['content'] = $values_1;
            }
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $values_2 = [];
                foreach ($object->getMetadata() as $key_1 => $value_2) {
                    $values_2[$key_1] = $value_2;
                }
                $data['metadata'] = $values_2;
            }
            if ($object->isInitialized('contentPermissionSetIds') && null !== $object->getContentPermissionSetIds()) {
                $values_3 = [];
                foreach ($object->getContentPermissionSetIds() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['contentPermissionSetIds'] = $values_3;
            }
            if ($object->isInitialized('requestId') && null !== $object->getRequestId()) {
                $data['requestId'] = $object->getRequestId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ContentCreateRequest' => false];
        }
    }
} else {
    class ContentCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ContentCreateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentCreateRequest';
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
            $object = new \PicturePark\API\Model\ContentCreateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentSchemaId', $data)) {
                $object->setContentSchemaId($data['contentSchemaId']);
            }
            if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
                $values = [];
                foreach ($data['layerSchemaIds'] as $value) {
                    $values[] = $value;
                }
                $object->setLayerSchemaIds($values);
            }
            elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
                $object->setLayerSchemaIds(null);
            }
            if (\array_key_exists('content', $data) && $data['content'] !== null) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['content'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setContent($values_1);
            }
            elseif (\array_key_exists('content', $data) && $data['content'] === null) {
                $object->setContent(null);
            }
            if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['metadata'] as $key_1 => $value_2) {
                    $values_2[$key_1] = $value_2;
                }
                $object->setMetadata($values_2);
            }
            elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
                $object->setMetadata(null);
            }
            if (\array_key_exists('contentPermissionSetIds', $data) && $data['contentPermissionSetIds'] !== null) {
                $values_3 = [];
                foreach ($data['contentPermissionSetIds'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setContentPermissionSetIds($values_3);
            }
            elseif (\array_key_exists('contentPermissionSetIds', $data) && $data['contentPermissionSetIds'] === null) {
                $object->setContentPermissionSetIds(null);
            }
            if (\array_key_exists('requestId', $data) && $data['requestId'] !== null) {
                $object->setRequestId($data['requestId']);
            }
            elseif (\array_key_exists('requestId', $data) && $data['requestId'] === null) {
                $object->setRequestId(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['contentSchemaId'] = $object->getContentSchemaId();
            if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
                $values = [];
                foreach ($object->getLayerSchemaIds() as $value) {
                    $values[] = $value;
                }
                $data['layerSchemaIds'] = $values;
            }
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $values_1 = [];
                foreach ($object->getContent() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['content'] = $values_1;
            }
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $values_2 = [];
                foreach ($object->getMetadata() as $key_1 => $value_2) {
                    $values_2[$key_1] = $value_2;
                }
                $data['metadata'] = $values_2;
            }
            if ($object->isInitialized('contentPermissionSetIds') && null !== $object->getContentPermissionSetIds()) {
                $values_3 = [];
                foreach ($object->getContentPermissionSetIds() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['contentPermissionSetIds'] = $values_3;
            }
            if ($object->isInitialized('requestId') && null !== $object->getRequestId()) {
                $data['requestId'] = $object->getRequestId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ContentCreateRequest' => false];
        }
    }
}