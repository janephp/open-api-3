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
    class ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('addedToAcceptList', $data)) {
                $object->setAddedToAcceptList($data['addedToAcceptList']);
                unset($data['addedToAcceptList']);
            }
            if (\array_key_exists('alertState', $data)) {
                $object->setAlertState($data['alertState']);
                unset($data['alertState']);
            }
            if (\array_key_exists('assignedTo', $data)) {
                $values = [];
                foreach ($data['assignedTo'] as $value) {
                    $values[] = $value;
                }
                $object->setAssignedTo($values);
                unset($data['assignedTo']);
            }
            if (\array_key_exists('assignmentType', $data)) {
                $object->setAssignmentType($data['assignmentType']);
                unset($data['assignmentType']);
            }
            if (\array_key_exists('division', $data)) {
                $object->setDivision($data['division']);
                unset($data['division']);
            }
            if (\array_key_exists('history', $data)) {
                $values_1 = [];
                foreach ($data['history'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItem', 'json', $context);
                }
                $object->setHistory($values_1);
                unset($data['history']);
            }
            if (\array_key_exists('matchStates', $data)) {
                $values_2 = [];
                foreach ($data['matchStates'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItem', 'json', $context);
                }
                $object->setMatchStates($values_2);
                unset($data['matchStates']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('addedToAcceptList') && null !== $object->getAddedToAcceptList()) {
                $data['addedToAcceptList'] = $object->getAddedToAcceptList();
            }
            if ($object->isInitialized('alertState') && null !== $object->getAlertState()) {
                $data['alertState'] = $object->getAlertState();
            }
            if ($object->isInitialized('assignedTo') && null !== $object->getAssignedTo()) {
                $values = [];
                foreach ($object->getAssignedTo() as $value) {
                    $values[] = $value;
                }
                $data['assignedTo'] = $values;
            }
            if ($object->isInitialized('assignmentType') && null !== $object->getAssignmentType()) {
                $data['assignmentType'] = $object->getAssignmentType();
            }
            if ($object->isInitialized('division') && null !== $object->getDivision()) {
                $data['division'] = $object->getDivision();
            }
            if ($object->isInitialized('history') && null !== $object->getHistory()) {
                $values_1 = [];
                foreach ($object->getHistory() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['history'] = $values_1;
            }
            if ($object->isInitialized('matchStates') && null !== $object->getMatchStates()) {
                $values_2 = [];
                foreach ($object->getMatchStates() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['matchStates'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState' => false];
        }
    }
} else {
    class ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState';
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
            $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('addedToAcceptList', $data)) {
                $object->setAddedToAcceptList($data['addedToAcceptList']);
                unset($data['addedToAcceptList']);
            }
            if (\array_key_exists('alertState', $data)) {
                $object->setAlertState($data['alertState']);
                unset($data['alertState']);
            }
            if (\array_key_exists('assignedTo', $data)) {
                $values = [];
                foreach ($data['assignedTo'] as $value) {
                    $values[] = $value;
                }
                $object->setAssignedTo($values);
                unset($data['assignedTo']);
            }
            if (\array_key_exists('assignmentType', $data)) {
                $object->setAssignmentType($data['assignmentType']);
                unset($data['assignmentType']);
            }
            if (\array_key_exists('division', $data)) {
                $object->setDivision($data['division']);
                unset($data['division']);
            }
            if (\array_key_exists('history', $data)) {
                $values_1 = [];
                foreach ($data['history'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItem', 'json', $context);
                }
                $object->setHistory($values_1);
                unset($data['history']);
            }
            if (\array_key_exists('matchStates', $data)) {
                $values_2 = [];
                foreach ($data['matchStates'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItem', 'json', $context);
                }
                $object->setMatchStates($values_2);
                unset($data['matchStates']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('addedToAcceptList') && null !== $object->getAddedToAcceptList()) {
                $data['addedToAcceptList'] = $object->getAddedToAcceptList();
            }
            if ($object->isInitialized('alertState') && null !== $object->getAlertState()) {
                $data['alertState'] = $object->getAlertState();
            }
            if ($object->isInitialized('assignedTo') && null !== $object->getAssignedTo()) {
                $values = [];
                foreach ($object->getAssignedTo() as $value) {
                    $values[] = $value;
                }
                $data['assignedTo'] = $values;
            }
            if ($object->isInitialized('assignmentType') && null !== $object->getAssignmentType()) {
                $data['assignmentType'] = $object->getAssignmentType();
            }
            if ($object->isInitialized('division') && null !== $object->getDivision()) {
                $data['division'] = $object->getDivision();
            }
            if ($object->isInitialized('history') && null !== $object->getHistory()) {
                $values_1 = [];
                foreach ($object->getHistory() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['history'] = $values_1;
            }
            if ($object->isInitialized('matchStates') && null !== $object->getMatchStates()) {
                $values_2 = [];
                foreach ($object->getMatchStates() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['matchStates'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState' => false];
        }
    }
}