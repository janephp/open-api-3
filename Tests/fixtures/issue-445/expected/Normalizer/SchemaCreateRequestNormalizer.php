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
    class SchemaCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\SchemaCreateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SchemaCreateRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\SchemaCreateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('parentSchemaId', $data) && $data['parentSchemaId'] !== null) {
                $object->setParentSchemaId($data['parentSchemaId']);
            }
            elseif (\array_key_exists('parentSchemaId', $data) && $data['parentSchemaId'] === null) {
                $object->setParentSchemaId(null);
            }
            if (\array_key_exists('types', $data) && $data['types'] !== null) {
                $values = [];
                foreach ($data['types'] as $value) {
                    $values[] = $value;
                }
                $object->setTypes($values);
            }
            elseif (\array_key_exists('types', $data) && $data['types'] === null) {
                $object->setTypes(null);
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
            if (\array_key_exists('displayPatterns', $data)) {
                $values_1 = [];
                foreach ($data['displayPatterns'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\DisplayPattern', 'json', $context);
                }
                $object->setDisplayPatterns($values_1);
            }
            if (\array_key_exists('fields', $data) && $data['fields'] !== null) {
                $values_2 = [];
                foreach ($data['fields'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'PicturePark\\API\\Model\\FieldBase', 'json', $context);
                }
                $object->setFields($values_2);
            }
            elseif (\array_key_exists('fields', $data) && $data['fields'] === null) {
                $object->setFields(null);
            }
            if (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] !== null) {
                $values_3 = [];
                foreach ($data['fieldsOverwrite'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\FieldOverwriteBase', 'json', $context);
                }
                $object->setFieldsOverwrite($values_3);
            }
            elseif (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] === null) {
                $object->setFieldsOverwrite(null);
            }
            if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
                $values_4 = [];
                foreach ($data['aggregations'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
                }
                $object->setAggregations($values_4);
            }
            elseif (\array_key_exists('aggregations', $data) && $data['aggregations'] === null) {
                $object->setAggregations(null);
            }
            if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
                $values_5 = [];
                foreach ($data['sort'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, 'PicturePark\\API\\Model\\SortInfo', 'json', $context);
                }
                $object->setSort($values_5);
            }
            elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
                $object->setSort(null);
            }
            if (\array_key_exists('viewForAll', $data)) {
                $object->setViewForAll($data['viewForAll']);
            }
            if (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] !== null) {
                $values_6 = [];
                foreach ($data['schemaPermissionSetIds'] as $value_6) {
                    $values_6[] = $value_6;
                }
                $object->setSchemaPermissionSetIds($values_6);
            }
            elseif (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] === null) {
                $object->setSchemaPermissionSetIds(null);
            }
            if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
                $values_7 = [];
                foreach ($data['layerSchemaIds'] as $value_7) {
                    $values_7[] = $value_7;
                }
                $object->setLayerSchemaIds($values_7);
            }
            elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
                $object->setLayerSchemaIds(null);
            }
            if (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] !== null) {
                $values_8 = [];
                foreach ($data['referencedInContentSchemaIds'] as $value_8) {
                    $values_8[] = $value_8;
                }
                $object->setReferencedInContentSchemaIds($values_8);
            }
            elseif (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] === null) {
                $object->setReferencedInContentSchemaIds(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            if ($object->isInitialized('parentSchemaId') && null !== $object->getParentSchemaId()) {
                $data['parentSchemaId'] = $object->getParentSchemaId();
            }
            if ($object->isInitialized('types') && null !== $object->getTypes()) {
                $values = [];
                foreach ($object->getTypes() as $value) {
                    $values[] = $value;
                }
                $data['types'] = $values;
            }
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('descriptions') && null !== $object->getDescriptions()) {
                $data['descriptions'] = $object->getDescriptions();
            }
            $values_1 = [];
            foreach ($object->getDisplayPatterns() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['displayPatterns'] = $values_1;
            if ($object->isInitialized('fields') && null !== $object->getFields()) {
                $values_2 = [];
                foreach ($object->getFields() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['fields'] = $values_2;
            }
            if ($object->isInitialized('fieldsOverwrite') && null !== $object->getFieldsOverwrite()) {
                $values_3 = [];
                foreach ($object->getFieldsOverwrite() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['fieldsOverwrite'] = $values_3;
            }
            if ($object->isInitialized('aggregations') && null !== $object->getAggregations()) {
                $values_4 = [];
                foreach ($object->getAggregations() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['aggregations'] = $values_4;
            }
            if ($object->isInitialized('sort') && null !== $object->getSort()) {
                $values_5 = [];
                foreach ($object->getSort() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['sort'] = $values_5;
            }
            $data['viewForAll'] = $object->getViewForAll();
            if ($object->isInitialized('schemaPermissionSetIds') && null !== $object->getSchemaPermissionSetIds()) {
                $values_6 = [];
                foreach ($object->getSchemaPermissionSetIds() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['schemaPermissionSetIds'] = $values_6;
            }
            if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
                $values_7 = [];
                foreach ($object->getLayerSchemaIds() as $value_7) {
                    $values_7[] = $value_7;
                }
                $data['layerSchemaIds'] = $values_7;
            }
            if ($object->isInitialized('referencedInContentSchemaIds') && null !== $object->getReferencedInContentSchemaIds()) {
                $values_8 = [];
                foreach ($object->getReferencedInContentSchemaIds() as $value_8) {
                    $values_8[] = $value_8;
                }
                $data['referencedInContentSchemaIds'] = $values_8;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\SchemaCreateRequest' => false];
        }
    }
} else {
    class SchemaCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\SchemaCreateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SchemaCreateRequest';
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
            $object = new \PicturePark\API\Model\SchemaCreateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('parentSchemaId', $data) && $data['parentSchemaId'] !== null) {
                $object->setParentSchemaId($data['parentSchemaId']);
            }
            elseif (\array_key_exists('parentSchemaId', $data) && $data['parentSchemaId'] === null) {
                $object->setParentSchemaId(null);
            }
            if (\array_key_exists('types', $data) && $data['types'] !== null) {
                $values = [];
                foreach ($data['types'] as $value) {
                    $values[] = $value;
                }
                $object->setTypes($values);
            }
            elseif (\array_key_exists('types', $data) && $data['types'] === null) {
                $object->setTypes(null);
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
            if (\array_key_exists('displayPatterns', $data)) {
                $values_1 = [];
                foreach ($data['displayPatterns'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\DisplayPattern', 'json', $context);
                }
                $object->setDisplayPatterns($values_1);
            }
            if (\array_key_exists('fields', $data) && $data['fields'] !== null) {
                $values_2 = [];
                foreach ($data['fields'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'PicturePark\\API\\Model\\FieldBase', 'json', $context);
                }
                $object->setFields($values_2);
            }
            elseif (\array_key_exists('fields', $data) && $data['fields'] === null) {
                $object->setFields(null);
            }
            if (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] !== null) {
                $values_3 = [];
                foreach ($data['fieldsOverwrite'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\FieldOverwriteBase', 'json', $context);
                }
                $object->setFieldsOverwrite($values_3);
            }
            elseif (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] === null) {
                $object->setFieldsOverwrite(null);
            }
            if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
                $values_4 = [];
                foreach ($data['aggregations'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
                }
                $object->setAggregations($values_4);
            }
            elseif (\array_key_exists('aggregations', $data) && $data['aggregations'] === null) {
                $object->setAggregations(null);
            }
            if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
                $values_5 = [];
                foreach ($data['sort'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, 'PicturePark\\API\\Model\\SortInfo', 'json', $context);
                }
                $object->setSort($values_5);
            }
            elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
                $object->setSort(null);
            }
            if (\array_key_exists('viewForAll', $data)) {
                $object->setViewForAll($data['viewForAll']);
            }
            if (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] !== null) {
                $values_6 = [];
                foreach ($data['schemaPermissionSetIds'] as $value_6) {
                    $values_6[] = $value_6;
                }
                $object->setSchemaPermissionSetIds($values_6);
            }
            elseif (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] === null) {
                $object->setSchemaPermissionSetIds(null);
            }
            if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
                $values_7 = [];
                foreach ($data['layerSchemaIds'] as $value_7) {
                    $values_7[] = $value_7;
                }
                $object->setLayerSchemaIds($values_7);
            }
            elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
                $object->setLayerSchemaIds(null);
            }
            if (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] !== null) {
                $values_8 = [];
                foreach ($data['referencedInContentSchemaIds'] as $value_8) {
                    $values_8[] = $value_8;
                }
                $object->setReferencedInContentSchemaIds($values_8);
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
            $data['id'] = $object->getId();
            if ($object->isInitialized('parentSchemaId') && null !== $object->getParentSchemaId()) {
                $data['parentSchemaId'] = $object->getParentSchemaId();
            }
            if ($object->isInitialized('types') && null !== $object->getTypes()) {
                $values = [];
                foreach ($object->getTypes() as $value) {
                    $values[] = $value;
                }
                $data['types'] = $values;
            }
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('descriptions') && null !== $object->getDescriptions()) {
                $data['descriptions'] = $object->getDescriptions();
            }
            $values_1 = [];
            foreach ($object->getDisplayPatterns() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['displayPatterns'] = $values_1;
            if ($object->isInitialized('fields') && null !== $object->getFields()) {
                $values_2 = [];
                foreach ($object->getFields() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['fields'] = $values_2;
            }
            if ($object->isInitialized('fieldsOverwrite') && null !== $object->getFieldsOverwrite()) {
                $values_3 = [];
                foreach ($object->getFieldsOverwrite() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['fieldsOverwrite'] = $values_3;
            }
            if ($object->isInitialized('aggregations') && null !== $object->getAggregations()) {
                $values_4 = [];
                foreach ($object->getAggregations() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['aggregations'] = $values_4;
            }
            if ($object->isInitialized('sort') && null !== $object->getSort()) {
                $values_5 = [];
                foreach ($object->getSort() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['sort'] = $values_5;
            }
            $data['viewForAll'] = $object->getViewForAll();
            if ($object->isInitialized('schemaPermissionSetIds') && null !== $object->getSchemaPermissionSetIds()) {
                $values_6 = [];
                foreach ($object->getSchemaPermissionSetIds() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['schemaPermissionSetIds'] = $values_6;
            }
            if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
                $values_7 = [];
                foreach ($object->getLayerSchemaIds() as $value_7) {
                    $values_7[] = $value_7;
                }
                $data['layerSchemaIds'] = $values_7;
            }
            if ($object->isInitialized('referencedInContentSchemaIds') && null !== $object->getReferencedInContentSchemaIds()) {
                $values_8 = [];
                foreach ($object->getReferencedInContentSchemaIds() as $value_8) {
                    $values_8[] = $value_8;
                }
                $data['referencedInContentSchemaIds'] = $values_8;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\SchemaCreateRequest' => false];
        }
    }
}