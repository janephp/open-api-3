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
    class SchemaUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\SchemaUpdateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SchemaUpdateRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\SchemaUpdateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('names', $data) && $data['names'] !== null) {
                $object->setNames($data['names']);
            }
            elseif (\array_key_exists('names', $data) && $data['names'] === null) {
                $object->setNames(null);
            }
            if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
                $object->setDescriptions($data['descriptions']);
            }
            elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
                $object->setDescriptions(null);
            }
            if (\array_key_exists('displayPatterns', $data) && $data['displayPatterns'] !== null) {
                $values = [];
                foreach ($data['displayPatterns'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\DisplayPattern', 'json', $context);
                }
                $object->setDisplayPatterns($values);
            }
            elseif (\array_key_exists('displayPatterns', $data) && $data['displayPatterns'] === null) {
                $object->setDisplayPatterns(null);
            }
            if (\array_key_exists('fields', $data) && $data['fields'] !== null) {
                $values_1 = [];
                foreach ($data['fields'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\FieldBase', 'json', $context);
                }
                $object->setFields($values_1);
            }
            elseif (\array_key_exists('fields', $data) && $data['fields'] === null) {
                $object->setFields(null);
            }
            if (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] !== null) {
                $values_2 = [];
                foreach ($data['fieldsOverwrite'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'PicturePark\\API\\Model\\FieldOverwriteBase', 'json', $context);
                }
                $object->setFieldsOverwrite($values_2);
            }
            elseif (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] === null) {
                $object->setFieldsOverwrite(null);
            }
            if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
                $values_3 = [];
                foreach ($data['aggregations'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
                }
                $object->setAggregations($values_3);
            }
            elseif (\array_key_exists('aggregations', $data) && $data['aggregations'] === null) {
                $object->setAggregations(null);
            }
            if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
                $values_4 = [];
                foreach ($data['sort'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'PicturePark\\API\\Model\\SortInfo', 'json', $context);
                }
                $object->setSort($values_4);
            }
            elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
                $object->setSort(null);
            }
            if (\array_key_exists('viewForAll', $data)) {
                $object->setViewForAll($data['viewForAll']);
            }
            if (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] !== null) {
                $values_5 = [];
                foreach ($data['schemaPermissionSetIds'] as $value_5) {
                    $values_5[] = $value_5;
                }
                $object->setSchemaPermissionSetIds($values_5);
            }
            elseif (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] === null) {
                $object->setSchemaPermissionSetIds(null);
            }
            if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
                $values_6 = [];
                foreach ($data['layerSchemaIds'] as $value_6) {
                    $values_6[] = $value_6;
                }
                $object->setLayerSchemaIds($values_6);
            }
            elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
                $object->setLayerSchemaIds(null);
            }
            if (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] !== null) {
                $values_7 = [];
                foreach ($data['referencedInContentSchemaIds'] as $value_7) {
                    $values_7[] = $value_7;
                }
                $object->setReferencedInContentSchemaIds($values_7);
            }
            elseif (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] === null) {
                $object->setReferencedInContentSchemaIds(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('descriptions') && null !== $object->getDescriptions()) {
                $data['descriptions'] = $object->getDescriptions();
            }
            if ($object->isInitialized('displayPatterns') && null !== $object->getDisplayPatterns()) {
                $values = [];
                foreach ($object->getDisplayPatterns() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['displayPatterns'] = $values;
            }
            if ($object->isInitialized('fields') && null !== $object->getFields()) {
                $values_1 = [];
                foreach ($object->getFields() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['fields'] = $values_1;
            }
            if ($object->isInitialized('fieldsOverwrite') && null !== $object->getFieldsOverwrite()) {
                $values_2 = [];
                foreach ($object->getFieldsOverwrite() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['fieldsOverwrite'] = $values_2;
            }
            if ($object->isInitialized('aggregations') && null !== $object->getAggregations()) {
                $values_3 = [];
                foreach ($object->getAggregations() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['aggregations'] = $values_3;
            }
            if ($object->isInitialized('sort') && null !== $object->getSort()) {
                $values_4 = [];
                foreach ($object->getSort() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['sort'] = $values_4;
            }
            $data['viewForAll'] = $object->getViewForAll();
            if ($object->isInitialized('schemaPermissionSetIds') && null !== $object->getSchemaPermissionSetIds()) {
                $values_5 = [];
                foreach ($object->getSchemaPermissionSetIds() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['schemaPermissionSetIds'] = $values_5;
            }
            if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
                $values_6 = [];
                foreach ($object->getLayerSchemaIds() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['layerSchemaIds'] = $values_6;
            }
            if ($object->isInitialized('referencedInContentSchemaIds') && null !== $object->getReferencedInContentSchemaIds()) {
                $values_7 = [];
                foreach ($object->getReferencedInContentSchemaIds() as $value_7) {
                    $values_7[] = $value_7;
                }
                $data['referencedInContentSchemaIds'] = $values_7;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\SchemaUpdateRequest' => false];
        }
    }
} else {
    class SchemaUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\SchemaUpdateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SchemaUpdateRequest';
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
            $object = new \PicturePark\API\Model\SchemaUpdateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('names', $data) && $data['names'] !== null) {
                $object->setNames($data['names']);
            }
            elseif (\array_key_exists('names', $data) && $data['names'] === null) {
                $object->setNames(null);
            }
            if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
                $object->setDescriptions($data['descriptions']);
            }
            elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
                $object->setDescriptions(null);
            }
            if (\array_key_exists('displayPatterns', $data) && $data['displayPatterns'] !== null) {
                $values = [];
                foreach ($data['displayPatterns'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\DisplayPattern', 'json', $context);
                }
                $object->setDisplayPatterns($values);
            }
            elseif (\array_key_exists('displayPatterns', $data) && $data['displayPatterns'] === null) {
                $object->setDisplayPatterns(null);
            }
            if (\array_key_exists('fields', $data) && $data['fields'] !== null) {
                $values_1 = [];
                foreach ($data['fields'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\FieldBase', 'json', $context);
                }
                $object->setFields($values_1);
            }
            elseif (\array_key_exists('fields', $data) && $data['fields'] === null) {
                $object->setFields(null);
            }
            if (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] !== null) {
                $values_2 = [];
                foreach ($data['fieldsOverwrite'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'PicturePark\\API\\Model\\FieldOverwriteBase', 'json', $context);
                }
                $object->setFieldsOverwrite($values_2);
            }
            elseif (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] === null) {
                $object->setFieldsOverwrite(null);
            }
            if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
                $values_3 = [];
                foreach ($data['aggregations'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
                }
                $object->setAggregations($values_3);
            }
            elseif (\array_key_exists('aggregations', $data) && $data['aggregations'] === null) {
                $object->setAggregations(null);
            }
            if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
                $values_4 = [];
                foreach ($data['sort'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'PicturePark\\API\\Model\\SortInfo', 'json', $context);
                }
                $object->setSort($values_4);
            }
            elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
                $object->setSort(null);
            }
            if (\array_key_exists('viewForAll', $data)) {
                $object->setViewForAll($data['viewForAll']);
            }
            if (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] !== null) {
                $values_5 = [];
                foreach ($data['schemaPermissionSetIds'] as $value_5) {
                    $values_5[] = $value_5;
                }
                $object->setSchemaPermissionSetIds($values_5);
            }
            elseif (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] === null) {
                $object->setSchemaPermissionSetIds(null);
            }
            if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
                $values_6 = [];
                foreach ($data['layerSchemaIds'] as $value_6) {
                    $values_6[] = $value_6;
                }
                $object->setLayerSchemaIds($values_6);
            }
            elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
                $object->setLayerSchemaIds(null);
            }
            if (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] !== null) {
                $values_7 = [];
                foreach ($data['referencedInContentSchemaIds'] as $value_7) {
                    $values_7[] = $value_7;
                }
                $object->setReferencedInContentSchemaIds($values_7);
            }
            elseif (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] === null) {
                $object->setReferencedInContentSchemaIds(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('descriptions') && null !== $object->getDescriptions()) {
                $data['descriptions'] = $object->getDescriptions();
            }
            if ($object->isInitialized('displayPatterns') && null !== $object->getDisplayPatterns()) {
                $values = [];
                foreach ($object->getDisplayPatterns() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['displayPatterns'] = $values;
            }
            if ($object->isInitialized('fields') && null !== $object->getFields()) {
                $values_1 = [];
                foreach ($object->getFields() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['fields'] = $values_1;
            }
            if ($object->isInitialized('fieldsOverwrite') && null !== $object->getFieldsOverwrite()) {
                $values_2 = [];
                foreach ($object->getFieldsOverwrite() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['fieldsOverwrite'] = $values_2;
            }
            if ($object->isInitialized('aggregations') && null !== $object->getAggregations()) {
                $values_3 = [];
                foreach ($object->getAggregations() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['aggregations'] = $values_3;
            }
            if ($object->isInitialized('sort') && null !== $object->getSort()) {
                $values_4 = [];
                foreach ($object->getSort() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['sort'] = $values_4;
            }
            $data['viewForAll'] = $object->getViewForAll();
            if ($object->isInitialized('schemaPermissionSetIds') && null !== $object->getSchemaPermissionSetIds()) {
                $values_5 = [];
                foreach ($object->getSchemaPermissionSetIds() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['schemaPermissionSetIds'] = $values_5;
            }
            if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
                $values_6 = [];
                foreach ($object->getLayerSchemaIds() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['layerSchemaIds'] = $values_6;
            }
            if ($object->isInitialized('referencedInContentSchemaIds') && null !== $object->getReferencedInContentSchemaIds()) {
                $values_7 = [];
                foreach ($object->getReferencedInContentSchemaIds() as $value_7) {
                    $values_7[] = $value_7;
                }
                $data['referencedInContentSchemaIds'] = $values_7;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\SchemaUpdateRequest' => false];
        }
    }
}