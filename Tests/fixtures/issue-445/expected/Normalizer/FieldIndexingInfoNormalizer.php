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
    class FieldIndexingInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\FieldIndexingInfo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\FieldIndexingInfo';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\FieldIndexingInfo();
            if (\array_key_exists('boost', $data) && \is_int($data['boost'])) {
                $data['boost'] = (double) $data['boost'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('index', $data)) {
                $object->setIndex($data['index']);
            }
            if (\array_key_exists('simpleSearch', $data)) {
                $object->setSimpleSearch($data['simpleSearch']);
            }
            if (\array_key_exists('sortable', $data)) {
                $object->setSortable($data['sortable']);
            }
            if (\array_key_exists('boost', $data)) {
                $object->setBoost($data['boost']);
            }
            if (\array_key_exists('relatedSchemaIndexing', $data) && $data['relatedSchemaIndexing'] !== null) {
                $object->setRelatedSchemaIndexing($data['relatedSchemaIndexing']);
            }
            elseif (\array_key_exists('relatedSchemaIndexing', $data) && $data['relatedSchemaIndexing'] === null) {
                $object->setRelatedSchemaIndexing(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['index'] = $object->getIndex();
            $data['simpleSearch'] = $object->getSimpleSearch();
            $data['sortable'] = $object->getSortable();
            $data['boost'] = $object->getBoost();
            if ($object->isInitialized('relatedSchemaIndexing') && null !== $object->getRelatedSchemaIndexing()) {
                $data['relatedSchemaIndexing'] = $object->getRelatedSchemaIndexing();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\FieldIndexingInfo' => false];
        }
    }
} else {
    class FieldIndexingInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\FieldIndexingInfo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\FieldIndexingInfo';
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
            $object = new \PicturePark\API\Model\FieldIndexingInfo();
            if (\array_key_exists('boost', $data) && \is_int($data['boost'])) {
                $data['boost'] = (double) $data['boost'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('index', $data)) {
                $object->setIndex($data['index']);
            }
            if (\array_key_exists('simpleSearch', $data)) {
                $object->setSimpleSearch($data['simpleSearch']);
            }
            if (\array_key_exists('sortable', $data)) {
                $object->setSortable($data['sortable']);
            }
            if (\array_key_exists('boost', $data)) {
                $object->setBoost($data['boost']);
            }
            if (\array_key_exists('relatedSchemaIndexing', $data) && $data['relatedSchemaIndexing'] !== null) {
                $object->setRelatedSchemaIndexing($data['relatedSchemaIndexing']);
            }
            elseif (\array_key_exists('relatedSchemaIndexing', $data) && $data['relatedSchemaIndexing'] === null) {
                $object->setRelatedSchemaIndexing(null);
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
            $data['index'] = $object->getIndex();
            $data['simpleSearch'] = $object->getSimpleSearch();
            $data['sortable'] = $object->getSortable();
            $data['boost'] = $object->getBoost();
            if ($object->isInitialized('relatedSchemaIndexing') && null !== $object->getRelatedSchemaIndexing()) {
                $data['relatedSchemaIndexing'] = $object->getRelatedSchemaIndexing();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\FieldIndexingInfo' => false];
        }
    }
}