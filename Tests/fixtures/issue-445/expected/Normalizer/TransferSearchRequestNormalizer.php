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
    class TransferSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\TransferSearchRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\TransferSearchRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\TransferSearchRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
                $object->setSearchString($data['searchString']);
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
            }
            elseif (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] === null) {
                $object->setSearchBehaviors(null);
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($data['limit']);
            }
            if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
                $object->setPageToken($data['pageToken']);
            }
            elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
                $object->setPageToken(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('debugMode', $data)) {
                $object->setDebugMode($data['debugMode']);
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
            $data['limit'] = $object->getLimit();
            if ($object->isInitialized('pageToken') && null !== $object->getPageToken()) {
                $data['pageToken'] = $object->getPageToken();
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            $data['debugMode'] = $object->getDebugMode();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\TransferSearchRequest' => false];
        }
    }
} else {
    class TransferSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\TransferSearchRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\TransferSearchRequest';
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
            $object = new \PicturePark\API\Model\TransferSearchRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
                $object->setSearchString($data['searchString']);
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
            }
            elseif (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] === null) {
                $object->setSearchBehaviors(null);
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($data['limit']);
            }
            if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
                $object->setPageToken($data['pageToken']);
            }
            elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
                $object->setPageToken(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('debugMode', $data)) {
                $object->setDebugMode($data['debugMode']);
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
            $data['limit'] = $object->getLimit();
            if ($object->isInitialized('pageToken') && null !== $object->getPageToken()) {
                $data['pageToken'] = $object->getPageToken();
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            $data['debugMode'] = $object->getDebugMode();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\TransferSearchRequest' => false];
        }
    }
}