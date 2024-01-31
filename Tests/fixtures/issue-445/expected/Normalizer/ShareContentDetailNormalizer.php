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
    class ShareContentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ShareContentDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ShareContentDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ShareContentDetail();
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
            if (\array_key_exists('content', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['content'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setContent($values_1);
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
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('outputs', $data)) {
                $values_3 = [];
                foreach ($data['outputs'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\ShareOutputBase', 'json', $context);
                }
                $object->setOutputs($values_3);
            }
            if (\array_key_exists('contentType', $data)) {
                $object->setContentType($data['contentType']);
            }
            if (\array_key_exists('displayValues', $data)) {
                $object->setDisplayValues($data['displayValues']);
            }
            if (\array_key_exists('iconUrl', $data) && $data['iconUrl'] !== null) {
                $object->setIconUrl($data['iconUrl']);
            }
            elseif (\array_key_exists('iconUrl', $data) && $data['iconUrl'] === null) {
                $object->setIconUrl(null);
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
            $values_1 = [];
            foreach ($object->getContent() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['content'] = $values_1;
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $values_2 = [];
                foreach ($object->getMetadata() as $key_1 => $value_2) {
                    $values_2[$key_1] = $value_2;
                }
                $data['metadata'] = $values_2;
            }
            $data['id'] = $object->getId();
            $values_3 = [];
            foreach ($object->getOutputs() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['outputs'] = $values_3;
            $data['contentType'] = $object->getContentType();
            $data['displayValues'] = $object->getDisplayValues();
            if ($object->isInitialized('iconUrl') && null !== $object->getIconUrl()) {
                $data['iconUrl'] = $object->getIconUrl();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ShareContentDetail' => false];
        }
    }
} else {
    class ShareContentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ShareContentDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ShareContentDetail';
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
            $object = new \PicturePark\API\Model\ShareContentDetail();
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
            if (\array_key_exists('content', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['content'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setContent($values_1);
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
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('outputs', $data)) {
                $values_3 = [];
                foreach ($data['outputs'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\ShareOutputBase', 'json', $context);
                }
                $object->setOutputs($values_3);
            }
            if (\array_key_exists('contentType', $data)) {
                $object->setContentType($data['contentType']);
            }
            if (\array_key_exists('displayValues', $data)) {
                $object->setDisplayValues($data['displayValues']);
            }
            if (\array_key_exists('iconUrl', $data) && $data['iconUrl'] !== null) {
                $object->setIconUrl($data['iconUrl']);
            }
            elseif (\array_key_exists('iconUrl', $data) && $data['iconUrl'] === null) {
                $object->setIconUrl(null);
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
            $values_1 = [];
            foreach ($object->getContent() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['content'] = $values_1;
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $values_2 = [];
                foreach ($object->getMetadata() as $key_1 => $value_2) {
                    $values_2[$key_1] = $value_2;
                }
                $data['metadata'] = $values_2;
            }
            $data['id'] = $object->getId();
            $values_3 = [];
            foreach ($object->getOutputs() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['outputs'] = $values_3;
            $data['contentType'] = $object->getContentType();
            $data['displayValues'] = $object->getDisplayValues();
            if ($object->isInitialized('iconUrl') && null !== $object->getIconUrl()) {
                $data['iconUrl'] = $object->getIconUrl();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ShareContentDetail' => false];
        }
    }
}