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
    class ShareSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ShareSearchRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ShareSearchRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ShareSearchRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
                $object->setSearchString($data['searchString']);
                unset($data['searchString']);
            }
            elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
                $object->setSearchString(null);
            }
            if (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] !== null) {
                $values = [];
                foreach ($data['searchBehaviors'] as $value) {
                    $values[] = $value;
                }
                $object->setSearchBehaviors($values);
                unset($data['searchBehaviors']);
            }
            elseif (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] === null) {
                $object->setSearchBehaviors(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
                unset($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] !== null) {
                $values_1 = [];
                foreach ($data['aggregationFilters'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\AggregationFilter', 'json', $context);
                }
                $object->setAggregationFilters($values_1);
                unset($data['aggregationFilters']);
            }
            elseif (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] === null) {
                $object->setAggregationFilters(null);
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($data['limit']);
                unset($data['limit']);
            }
            if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
                $values_2 = [];
                foreach ($data['sort'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'PicturePark\\API\\Model\\SortInfo', 'json', $context);
                }
                $object->setSort($values_2);
                unset($data['sort']);
            }
            elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
                $object->setSort(null);
            }
            if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
                $object->setPageToken($data['pageToken']);
                unset($data['pageToken']);
            }
            elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
                $object->setPageToken(null);
            }
            if (\array_key_exists('debugMode', $data)) {
                $object->setDebugMode($data['debugMode']);
                unset($data['debugMode']);
            }
            if (\array_key_exists('aggregators', $data) && $data['aggregators'] !== null) {
                $values_3 = [];
                foreach ($data['aggregators'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
                }
                $object->setAggregators($values_3);
                unset($data['aggregators']);
            }
            elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
                $object->setAggregators(null);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('searchString') && null !== $object->getSearchString()) {
                $data['searchString'] = $object->getSearchString();
            }
            if ($object->isInitialized('searchBehaviors') && null !== $object->getSearchBehaviors()) {
                $values = [];
                foreach ($object->getSearchBehaviors() as $value) {
                    $values[] = $value;
                }
                $data['searchBehaviors'] = $values;
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            if ($object->isInitialized('aggregationFilters') && null !== $object->getAggregationFilters()) {
                $values_1 = [];
                foreach ($object->getAggregationFilters() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['aggregationFilters'] = $values_1;
            }
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $object->getLimit();
            }
            if ($object->isInitialized('sort') && null !== $object->getSort()) {
                $values_2 = [];
                foreach ($object->getSort() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['sort'] = $values_2;
            }
            if ($object->isInitialized('pageToken') && null !== $object->getPageToken()) {
                $data['pageToken'] = $object->getPageToken();
            }
            if ($object->isInitialized('debugMode') && null !== $object->getDebugMode()) {
                $data['debugMode'] = $object->getDebugMode();
            }
            if ($object->isInitialized('aggregators') && null !== $object->getAggregators()) {
                $values_3 = [];
                foreach ($object->getAggregators() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['aggregators'] = $values_3;
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ShareSearchRequest' => false];
        }
    }
} else {
    class ShareSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ShareSearchRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ShareSearchRequest';
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
            $object = new \PicturePark\API\Model\ShareSearchRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
                $object->setSearchString($data['searchString']);
                unset($data['searchString']);
            }
            elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
                $object->setSearchString(null);
            }
            if (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] !== null) {
                $values = [];
                foreach ($data['searchBehaviors'] as $value) {
                    $values[] = $value;
                }
                $object->setSearchBehaviors($values);
                unset($data['searchBehaviors']);
            }
            elseif (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] === null) {
                $object->setSearchBehaviors(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
                unset($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] !== null) {
                $values_1 = [];
                foreach ($data['aggregationFilters'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\AggregationFilter', 'json', $context);
                }
                $object->setAggregationFilters($values_1);
                unset($data['aggregationFilters']);
            }
            elseif (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] === null) {
                $object->setAggregationFilters(null);
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($data['limit']);
                unset($data['limit']);
            }
            if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
                $values_2 = [];
                foreach ($data['sort'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'PicturePark\\API\\Model\\SortInfo', 'json', $context);
                }
                $object->setSort($values_2);
                unset($data['sort']);
            }
            elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
                $object->setSort(null);
            }
            if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
                $object->setPageToken($data['pageToken']);
                unset($data['pageToken']);
            }
            elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
                $object->setPageToken(null);
            }
            if (\array_key_exists('debugMode', $data)) {
                $object->setDebugMode($data['debugMode']);
                unset($data['debugMode']);
            }
            if (\array_key_exists('aggregators', $data) && $data['aggregators'] !== null) {
                $values_3 = [];
                foreach ($data['aggregators'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
                }
                $object->setAggregators($values_3);
                unset($data['aggregators']);
            }
            elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
                $object->setAggregators(null);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
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
            if ($object->isInitialized('searchString') && null !== $object->getSearchString()) {
                $data['searchString'] = $object->getSearchString();
            }
            if ($object->isInitialized('searchBehaviors') && null !== $object->getSearchBehaviors()) {
                $values = [];
                foreach ($object->getSearchBehaviors() as $value) {
                    $values[] = $value;
                }
                $data['searchBehaviors'] = $values;
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            if ($object->isInitialized('aggregationFilters') && null !== $object->getAggregationFilters()) {
                $values_1 = [];
                foreach ($object->getAggregationFilters() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['aggregationFilters'] = $values_1;
            }
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $object->getLimit();
            }
            if ($object->isInitialized('sort') && null !== $object->getSort()) {
                $values_2 = [];
                foreach ($object->getSort() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['sort'] = $values_2;
            }
            if ($object->isInitialized('pageToken') && null !== $object->getPageToken()) {
                $data['pageToken'] = $object->getPageToken();
            }
            if ($object->isInitialized('debugMode') && null !== $object->getDebugMode()) {
                $data['debugMode'] = $object->getDebugMode();
            }
            if ($object->isInitialized('aggregators') && null !== $object->getAggregators()) {
                $values_3 = [];
                foreach ($object->getAggregators() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['aggregators'] = $values_3;
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ShareSearchRequest' => false];
        }
    }
}