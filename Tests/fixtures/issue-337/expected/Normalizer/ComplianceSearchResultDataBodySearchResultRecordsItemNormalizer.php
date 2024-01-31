<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ComplianceSearchResultDataBodySearchResultRecordsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('record', $data)) {
                $object->setRecord($data['record']);
                unset($data['record']);
            }
            if (\array_key_exists('recordDetails', $data)) {
                $object->setRecordDetails($this->denormalizer->denormalize($data['recordDetails'], 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails', 'json', $context));
                unset($data['recordDetails']);
            }
            if (\array_key_exists('resultID', $data)) {
                $object->setResultID($data['resultID']);
                unset($data['resultID']);
            }
            if (\array_key_exists('runID', $data)) {
                $object->setRunID($data['runID']);
                unset($data['runID']);
            }
            if (\array_key_exists('watchlist', $data)) {
                $object->setWatchlist($this->denormalizer->denormalize($data['watchlist'], 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlist', 'json', $context));
                unset($data['watchlist']);
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
            if ($object->isInitialized('record') && null !== $object->getRecord()) {
                $data['record'] = $object->getRecord();
            }
            if ($object->isInitialized('recordDetails') && null !== $object->getRecordDetails()) {
                $data['recordDetails'] = $this->normalizer->normalize($object->getRecordDetails(), 'json', $context);
            }
            if ($object->isInitialized('resultID') && null !== $object->getResultID()) {
                $data['resultID'] = $object->getResultID();
            }
            if ($object->isInitialized('runID') && null !== $object->getRunID()) {
                $data['runID'] = $object->getRunID();
            }
            if ($object->isInitialized('watchlist') && null !== $object->getWatchlist()) {
                $data['watchlist'] = $this->normalizer->normalize($object->getWatchlist(), 'json', $context);
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
            return ['CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItem' => false];
        }
    }
} else {
    class ComplianceSearchResultDataBodySearchResultRecordsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItem';
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
            $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('record', $data)) {
                $object->setRecord($data['record']);
                unset($data['record']);
            }
            if (\array_key_exists('recordDetails', $data)) {
                $object->setRecordDetails($this->denormalizer->denormalize($data['recordDetails'], 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails', 'json', $context));
                unset($data['recordDetails']);
            }
            if (\array_key_exists('resultID', $data)) {
                $object->setResultID($data['resultID']);
                unset($data['resultID']);
            }
            if (\array_key_exists('runID', $data)) {
                $object->setRunID($data['runID']);
                unset($data['runID']);
            }
            if (\array_key_exists('watchlist', $data)) {
                $object->setWatchlist($this->denormalizer->denormalize($data['watchlist'], 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlist', 'json', $context));
                unset($data['watchlist']);
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
            if ($object->isInitialized('record') && null !== $object->getRecord()) {
                $data['record'] = $object->getRecord();
            }
            if ($object->isInitialized('recordDetails') && null !== $object->getRecordDetails()) {
                $data['recordDetails'] = $this->normalizer->normalize($object->getRecordDetails(), 'json', $context);
            }
            if ($object->isInitialized('resultID') && null !== $object->getResultID()) {
                $data['resultID'] = $object->getResultID();
            }
            if ($object->isInitialized('runID') && null !== $object->getRunID()) {
                $data['runID'] = $object->getRunID();
            }
            if ($object->isInitialized('watchlist') && null !== $object->getWatchlist()) {
                $data['watchlist'] = $this->normalizer->normalize($object->getWatchlist(), 'json', $context);
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
            return ['CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItem' => false];
        }
    }
}