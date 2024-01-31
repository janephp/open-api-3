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
    class ListItemNamedCacheConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ListItemNamedCacheConfiguration';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ListItemNamedCacheConfiguration';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ListItemNamedCacheConfiguration();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('caseSensitive', $data)) {
                $object->setCaseSensitive($data['caseSensitive']);
                unset($data['caseSensitive']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('schemaId', $data) && $data['schemaId'] !== null) {
                $object->setSchemaId($data['schemaId']);
                unset($data['schemaId']);
            }
            elseif (\array_key_exists('schemaId', $data) && $data['schemaId'] === null) {
                $object->setSchemaId(null);
            }
            if (\array_key_exists('keyFields', $data) && $data['keyFields'] !== null) {
                $values = [];
                foreach ($data['keyFields'] as $value) {
                    $values[] = $value;
                }
                $object->setKeyFields($values);
                unset($data['keyFields']);
            }
            elseif (\array_key_exists('keyFields', $data) && $data['keyFields'] === null) {
                $object->setKeyFields(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
                unset($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('includeAllSchemaChildren', $data)) {
                $object->setIncludeAllSchemaChildren($data['includeAllSchemaChildren']);
                unset($data['includeAllSchemaChildren']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            $data['caseSensitive'] = $object->getCaseSensitive();
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('schemaId') && null !== $object->getSchemaId()) {
                $data['schemaId'] = $object->getSchemaId();
            }
            if ($object->isInitialized('keyFields') && null !== $object->getKeyFields()) {
                $values = [];
                foreach ($object->getKeyFields() as $value) {
                    $values[] = $value;
                }
                $data['keyFields'] = $values;
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            if ($object->isInitialized('includeAllSchemaChildren') && null !== $object->getIncludeAllSchemaChildren()) {
                $data['includeAllSchemaChildren'] = $object->getIncludeAllSchemaChildren();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ListItemNamedCacheConfiguration' => false];
        }
    }
} else {
    class ListItemNamedCacheConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ListItemNamedCacheConfiguration';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ListItemNamedCacheConfiguration';
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
            $object = new \PicturePark\API\Model\ListItemNamedCacheConfiguration();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('caseSensitive', $data)) {
                $object->setCaseSensitive($data['caseSensitive']);
                unset($data['caseSensitive']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('schemaId', $data) && $data['schemaId'] !== null) {
                $object->setSchemaId($data['schemaId']);
                unset($data['schemaId']);
            }
            elseif (\array_key_exists('schemaId', $data) && $data['schemaId'] === null) {
                $object->setSchemaId(null);
            }
            if (\array_key_exists('keyFields', $data) && $data['keyFields'] !== null) {
                $values = [];
                foreach ($data['keyFields'] as $value) {
                    $values[] = $value;
                }
                $object->setKeyFields($values);
                unset($data['keyFields']);
            }
            elseif (\array_key_exists('keyFields', $data) && $data['keyFields'] === null) {
                $object->setKeyFields(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
                unset($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('includeAllSchemaChildren', $data)) {
                $object->setIncludeAllSchemaChildren($data['includeAllSchemaChildren']);
                unset($data['includeAllSchemaChildren']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            $data['caseSensitive'] = $object->getCaseSensitive();
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('schemaId') && null !== $object->getSchemaId()) {
                $data['schemaId'] = $object->getSchemaId();
            }
            if ($object->isInitialized('keyFields') && null !== $object->getKeyFields()) {
                $values = [];
                foreach ($object->getKeyFields() as $value) {
                    $values[] = $value;
                }
                $data['keyFields'] = $values;
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            if ($object->isInitialized('includeAllSchemaChildren') && null !== $object->getIncludeAllSchemaChildren()) {
                $data['includeAllSchemaChildren'] = $object->getIncludeAllSchemaChildren();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ListItemNamedCacheConfiguration' => false];
        }
    }
}