<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class CombinedBillingUsageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\CombinedBillingUsage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\CombinedBillingUsage';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\CombinedBillingUsage();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CombinedBillingUsageConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('days_left_in_billing_cycle', $data)) {
                $object->setDaysLeftInBillingCycle($data['days_left_in_billing_cycle']);
                unset($data['days_left_in_billing_cycle']);
            }
            if (\array_key_exists('estimated_paid_storage_for_month', $data)) {
                $object->setEstimatedPaidStorageForMonth($data['estimated_paid_storage_for_month']);
                unset($data['estimated_paid_storage_for_month']);
            }
            if (\array_key_exists('estimated_storage_for_month', $data)) {
                $object->setEstimatedStorageForMonth($data['estimated_storage_for_month']);
                unset($data['estimated_storage_for_month']);
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
            if ($object->isInitialized('daysLeftInBillingCycle') && null !== $object->getDaysLeftInBillingCycle()) {
                $data['days_left_in_billing_cycle'] = $object->getDaysLeftInBillingCycle();
            }
            if ($object->isInitialized('estimatedPaidStorageForMonth') && null !== $object->getEstimatedPaidStorageForMonth()) {
                $data['estimated_paid_storage_for_month'] = $object->getEstimatedPaidStorageForMonth();
            }
            if ($object->isInitialized('estimatedStorageForMonth') && null !== $object->getEstimatedStorageForMonth()) {
                $data['estimated_storage_for_month'] = $object->getEstimatedStorageForMonth();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CombinedBillingUsageConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\CombinedBillingUsage' => false];
        }
    }
} else {
    class CombinedBillingUsageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\CombinedBillingUsage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\CombinedBillingUsage';
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
            $object = new \Github\Model\CombinedBillingUsage();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CombinedBillingUsageConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('days_left_in_billing_cycle', $data)) {
                $object->setDaysLeftInBillingCycle($data['days_left_in_billing_cycle']);
                unset($data['days_left_in_billing_cycle']);
            }
            if (\array_key_exists('estimated_paid_storage_for_month', $data)) {
                $object->setEstimatedPaidStorageForMonth($data['estimated_paid_storage_for_month']);
                unset($data['estimated_paid_storage_for_month']);
            }
            if (\array_key_exists('estimated_storage_for_month', $data)) {
                $object->setEstimatedStorageForMonth($data['estimated_storage_for_month']);
                unset($data['estimated_storage_for_month']);
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
            if ($object->isInitialized('daysLeftInBillingCycle') && null !== $object->getDaysLeftInBillingCycle()) {
                $data['days_left_in_billing_cycle'] = $object->getDaysLeftInBillingCycle();
            }
            if ($object->isInitialized('estimatedPaidStorageForMonth') && null !== $object->getEstimatedPaidStorageForMonth()) {
                $data['estimated_paid_storage_for_month'] = $object->getEstimatedPaidStorageForMonth();
            }
            if ($object->isInitialized('estimatedStorageForMonth') && null !== $object->getEstimatedStorageForMonth()) {
                $data['estimated_storage_for_month'] = $object->getEstimatedStorageForMonth();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CombinedBillingUsageConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\CombinedBillingUsage' => false];
        }
    }
}