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
    class FieldBooleanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\FieldBoolean';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\FieldBoolean';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\FieldBoolean();
            if (\array_key_exists('boost', $data) && \is_int($data['boost'])) {
                $data['boost'] = (double) $data['boost'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('indexId', $data) && $data['indexId'] !== null) {
                $object->setIndexId($data['indexId']);
                unset($data['indexId']);
            }
            elseif (\array_key_exists('indexId', $data) && $data['indexId'] === null) {
                $object->setIndexId(null);
            }
            if (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] !== null) {
                $object->setFieldNamespace($data['fieldNamespace']);
                unset($data['fieldNamespace']);
            }
            elseif (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] === null) {
                $object->setFieldNamespace(null);
            }
            if (\array_key_exists('names', $data) && $data['names'] !== null) {
                $object->setNames($data['names']);
                unset($data['names']);
            }
            elseif (\array_key_exists('names', $data) && $data['names'] === null) {
                $object->setNames(null);
            }
            if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
                $object->setDescriptions($data['descriptions']);
                unset($data['descriptions']);
            }
            elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
                $object->setDescriptions(null);
            }
            if (\array_key_exists('required', $data)) {
                $object->setRequired($data['required']);
                unset($data['required']);
            }
            if (\array_key_exists('fixed', $data)) {
                $object->setFixed($data['fixed']);
                unset($data['fixed']);
            }
            if (\array_key_exists('index', $data)) {
                $object->setIndex($data['index']);
                unset($data['index']);
            }
            if (\array_key_exists('simpleSearch', $data)) {
                $object->setSimpleSearch($data['simpleSearch']);
                unset($data['simpleSearch']);
            }
            if (\array_key_exists('sortable', $data)) {
                $object->setSortable($data['sortable']);
                unset($data['sortable']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('boost', $data)) {
                $object->setBoost($data['boost']);
                unset($data['boost']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            if ($object->isInitialized('indexId') && null !== $object->getIndexId()) {
                $data['indexId'] = $object->getIndexId();
            }
            if ($object->isInitialized('fieldNamespace') && null !== $object->getFieldNamespace()) {
                $data['fieldNamespace'] = $object->getFieldNamespace();
            }
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('descriptions') && null !== $object->getDescriptions()) {
                $data['descriptions'] = $object->getDescriptions();
            }
            $data['required'] = $object->getRequired();
            $data['fixed'] = $object->getFixed();
            $data['index'] = $object->getIndex();
            $data['simpleSearch'] = $object->getSimpleSearch();
            $data['sortable'] = $object->getSortable();
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('boost') && null !== $object->getBoost()) {
                $data['boost'] = $object->getBoost();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\FieldBoolean' => false];
        }
    }
} else {
    class FieldBooleanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\FieldBoolean';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\FieldBoolean';
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
            $object = new \PicturePark\API\Model\FieldBoolean();
            if (\array_key_exists('boost', $data) && \is_int($data['boost'])) {
                $data['boost'] = (double) $data['boost'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('indexId', $data) && $data['indexId'] !== null) {
                $object->setIndexId($data['indexId']);
                unset($data['indexId']);
            }
            elseif (\array_key_exists('indexId', $data) && $data['indexId'] === null) {
                $object->setIndexId(null);
            }
            if (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] !== null) {
                $object->setFieldNamespace($data['fieldNamespace']);
                unset($data['fieldNamespace']);
            }
            elseif (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] === null) {
                $object->setFieldNamespace(null);
            }
            if (\array_key_exists('names', $data) && $data['names'] !== null) {
                $object->setNames($data['names']);
                unset($data['names']);
            }
            elseif (\array_key_exists('names', $data) && $data['names'] === null) {
                $object->setNames(null);
            }
            if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
                $object->setDescriptions($data['descriptions']);
                unset($data['descriptions']);
            }
            elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
                $object->setDescriptions(null);
            }
            if (\array_key_exists('required', $data)) {
                $object->setRequired($data['required']);
                unset($data['required']);
            }
            if (\array_key_exists('fixed', $data)) {
                $object->setFixed($data['fixed']);
                unset($data['fixed']);
            }
            if (\array_key_exists('index', $data)) {
                $object->setIndex($data['index']);
                unset($data['index']);
            }
            if (\array_key_exists('simpleSearch', $data)) {
                $object->setSimpleSearch($data['simpleSearch']);
                unset($data['simpleSearch']);
            }
            if (\array_key_exists('sortable', $data)) {
                $object->setSortable($data['sortable']);
                unset($data['sortable']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('boost', $data)) {
                $object->setBoost($data['boost']);
                unset($data['boost']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            $data['id'] = $object->getId();
            if ($object->isInitialized('indexId') && null !== $object->getIndexId()) {
                $data['indexId'] = $object->getIndexId();
            }
            if ($object->isInitialized('fieldNamespace') && null !== $object->getFieldNamespace()) {
                $data['fieldNamespace'] = $object->getFieldNamespace();
            }
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('descriptions') && null !== $object->getDescriptions()) {
                $data['descriptions'] = $object->getDescriptions();
            }
            $data['required'] = $object->getRequired();
            $data['fixed'] = $object->getFixed();
            $data['index'] = $object->getIndex();
            $data['simpleSearch'] = $object->getSimpleSearch();
            $data['sortable'] = $object->getSortable();
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('boost') && null !== $object->getBoost()) {
                $data['boost'] = $object->getBoost();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\FieldBoolean' => false];
        }
    }
}