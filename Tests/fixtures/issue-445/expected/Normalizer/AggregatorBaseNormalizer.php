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
    class AggregatorBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\AggregatorBase';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\AggregatorBase';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (array_key_exists('kind', $data) and 'DateRangeAggregator' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\DateRangeAggregator', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'GeoDistanceAggregator' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\GeoDistanceAggregator', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'NestedAggregator' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\NestedAggregator', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'NumericRangeAggregator' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\NumericRangeAggregator', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'TermsAggregator' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\TermsAggregator', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'TermsRelationAggregator' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\TermsRelationAggregator', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'TermsEnumAggregator' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\TermsEnumAggregator', $format, $context);
            }
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\AggregatorBase();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('names', $data) && $data['names'] !== null) {
                $object->setNames($data['names']);
            }
            elseif (\array_key_exists('names', $data) && $data['names'] === null) {
                $object->setNames(null);
            }
            if (\array_key_exists('aggregators', $data) && $data['aggregators'] !== null) {
                $values = [];
                foreach ($data['aggregators'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
                }
                $object->setAggregators($values);
            }
            elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
                $object->setAggregators(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if (null !== $object->getKind() and 'DateRangeAggregator' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'GeoDistanceAggregator' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'NestedAggregator' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'NumericRangeAggregator' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'TermsAggregator' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'TermsRelationAggregator' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'TermsEnumAggregator' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            $data['name'] = $object->getName();
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('aggregators') && null !== $object->getAggregators()) {
                $values = [];
                foreach ($object->getAggregators() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['aggregators'] = $values;
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            $data['kind'] = $object->getKind();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\AggregatorBase' => false];
        }
    }
} else {
    class AggregatorBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\AggregatorBase';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\AggregatorBase';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (array_key_exists('kind', $data) and 'DateRangeAggregator' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\DateRangeAggregator', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'GeoDistanceAggregator' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\GeoDistanceAggregator', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'NestedAggregator' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\NestedAggregator', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'NumericRangeAggregator' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\NumericRangeAggregator', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'TermsAggregator' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\TermsAggregator', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'TermsRelationAggregator' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\TermsRelationAggregator', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'TermsEnumAggregator' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\TermsEnumAggregator', $format, $context);
            }
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\AggregatorBase();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('names', $data) && $data['names'] !== null) {
                $object->setNames($data['names']);
            }
            elseif (\array_key_exists('names', $data) && $data['names'] === null) {
                $object->setNames(null);
            }
            if (\array_key_exists('aggregators', $data) && $data['aggregators'] !== null) {
                $values = [];
                foreach ($data['aggregators'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
                }
                $object->setAggregators($values);
            }
            elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
                $object->setAggregators(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if (null !== $object->getKind() and 'DateRangeAggregator' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'GeoDistanceAggregator' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'NestedAggregator' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'NumericRangeAggregator' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'TermsAggregator' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'TermsRelationAggregator' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'TermsEnumAggregator' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            $data['name'] = $object->getName();
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('aggregators') && null !== $object->getAggregators()) {
                $values = [];
                foreach ($object->getAggregators() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['aggregators'] = $values;
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            $data['kind'] = $object->getKind();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\AggregatorBase' => false];
        }
    }
}