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
    class TermsAggregatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\TermsAggregator';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\TermsAggregator';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\TermsAggregator();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('names', $data) && $data['names'] !== null) {
                $object->setNames($data['names']);
                unset($data['names']);
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
                unset($data['aggregators']);
            }
            elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
                $object->setAggregators(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
                unset($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('field', $data)) {
                $object->setField($data['field']);
                unset($data['field']);
            }
            if (\array_key_exists('size', $data) && $data['size'] !== null) {
                $object->setSize($data['size']);
                unset($data['size']);
            }
            elseif (\array_key_exists('size', $data) && $data['size'] === null) {
                $object->setSize(null);
            }
            if (\array_key_exists('includes', $data) && $data['includes'] !== null) {
                $values_1 = [];
                foreach ($data['includes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setIncludes($values_1);
                unset($data['includes']);
            }
            elseif (\array_key_exists('includes', $data) && $data['includes'] === null) {
                $object->setIncludes(null);
            }
            if (\array_key_exists('excludes', $data) && $data['excludes'] !== null) {
                $values_2 = [];
                foreach ($data['excludes'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setExcludes($values_2);
                unset($data['excludes']);
            }
            elseif (\array_key_exists('excludes', $data) && $data['excludes'] === null) {
                $object->setExcludes(null);
            }
            if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
                $object->setSearchString($data['searchString']);
                unset($data['searchString']);
            }
            elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
                $object->setSearchString(null);
            }
            if (\array_key_exists('searchFields', $data) && $data['searchFields'] !== null) {
                $values_3 = [];
                foreach ($data['searchFields'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setSearchFields($values_3);
                unset($data['searchFields']);
            }
            elseif (\array_key_exists('searchFields', $data) && $data['searchFields'] === null) {
                $object->setSearchFields(null);
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
            $data['field'] = $object->getField();
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['size'] = $object->getSize();
            }
            if ($object->isInitialized('includes') && null !== $object->getIncludes()) {
                $values_1 = [];
                foreach ($object->getIncludes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['includes'] = $values_1;
            }
            if ($object->isInitialized('excludes') && null !== $object->getExcludes()) {
                $values_2 = [];
                foreach ($object->getExcludes() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['excludes'] = $values_2;
            }
            if ($object->isInitialized('searchString') && null !== $object->getSearchString()) {
                $data['searchString'] = $object->getSearchString();
            }
            if ($object->isInitialized('searchFields') && null !== $object->getSearchFields()) {
                $values_3 = [];
                foreach ($object->getSearchFields() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['searchFields'] = $values_3;
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
            return ['PicturePark\\API\\Model\\TermsAggregator' => false];
        }
    }
} else {
    class TermsAggregatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\TermsAggregator';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\TermsAggregator';
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
            $object = new \PicturePark\API\Model\TermsAggregator();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('names', $data) && $data['names'] !== null) {
                $object->setNames($data['names']);
                unset($data['names']);
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
                unset($data['aggregators']);
            }
            elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
                $object->setAggregators(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
                unset($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('field', $data)) {
                $object->setField($data['field']);
                unset($data['field']);
            }
            if (\array_key_exists('size', $data) && $data['size'] !== null) {
                $object->setSize($data['size']);
                unset($data['size']);
            }
            elseif (\array_key_exists('size', $data) && $data['size'] === null) {
                $object->setSize(null);
            }
            if (\array_key_exists('includes', $data) && $data['includes'] !== null) {
                $values_1 = [];
                foreach ($data['includes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setIncludes($values_1);
                unset($data['includes']);
            }
            elseif (\array_key_exists('includes', $data) && $data['includes'] === null) {
                $object->setIncludes(null);
            }
            if (\array_key_exists('excludes', $data) && $data['excludes'] !== null) {
                $values_2 = [];
                foreach ($data['excludes'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setExcludes($values_2);
                unset($data['excludes']);
            }
            elseif (\array_key_exists('excludes', $data) && $data['excludes'] === null) {
                $object->setExcludes(null);
            }
            if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
                $object->setSearchString($data['searchString']);
                unset($data['searchString']);
            }
            elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
                $object->setSearchString(null);
            }
            if (\array_key_exists('searchFields', $data) && $data['searchFields'] !== null) {
                $values_3 = [];
                foreach ($data['searchFields'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setSearchFields($values_3);
                unset($data['searchFields']);
            }
            elseif (\array_key_exists('searchFields', $data) && $data['searchFields'] === null) {
                $object->setSearchFields(null);
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
            $data['field'] = $object->getField();
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['size'] = $object->getSize();
            }
            if ($object->isInitialized('includes') && null !== $object->getIncludes()) {
                $values_1 = [];
                foreach ($object->getIncludes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['includes'] = $values_1;
            }
            if ($object->isInitialized('excludes') && null !== $object->getExcludes()) {
                $values_2 = [];
                foreach ($object->getExcludes() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['excludes'] = $values_2;
            }
            if ($object->isInitialized('searchString') && null !== $object->getSearchString()) {
                $data['searchString'] = $object->getSearchString();
            }
            if ($object->isInitialized('searchFields') && null !== $object->getSearchFields()) {
                $values_3 = [];
                foreach ($object->getSearchFields() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['searchFields'] = $values_3;
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
            return ['PicturePark\\API\\Model\\TermsAggregator' => false];
        }
    }
}