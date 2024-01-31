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
    class MarketplacePurchaseMarketplacePendingChangeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\MarketplacePurchaseMarketplacePendingChange';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\MarketplacePurchaseMarketplacePendingChange';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\MarketplacePurchaseMarketplacePendingChange();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\MarketplacePurchaseMarketplacePendingChangeConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('is_installed', $data)) {
                $object->setIsInstalled($data['is_installed']);
                unset($data['is_installed']);
            }
            if (\array_key_exists('effective_date', $data)) {
                $object->setEffectiveDate($data['effective_date']);
                unset($data['effective_date']);
            }
            if (\array_key_exists('unit_count', $data) && $data['unit_count'] !== null) {
                $object->setUnitCount($data['unit_count']);
                unset($data['unit_count']);
            }
            elseif (\array_key_exists('unit_count', $data) && $data['unit_count'] === null) {
                $object->setUnitCount(null);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('plan', $data)) {
                $object->setPlan($this->denormalizer->denormalize($data['plan'], 'Github\\Model\\MarketplaceListingPlan', 'json', $context));
                unset($data['plan']);
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
            if ($object->isInitialized('isInstalled') && null !== $object->getIsInstalled()) {
                $data['is_installed'] = $object->getIsInstalled();
            }
            if ($object->isInitialized('effectiveDate') && null !== $object->getEffectiveDate()) {
                $data['effective_date'] = $object->getEffectiveDate();
            }
            if ($object->isInitialized('unitCount') && null !== $object->getUnitCount()) {
                $data['unit_count'] = $object->getUnitCount();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('plan') && null !== $object->getPlan()) {
                $data['plan'] = $this->normalizer->normalize($object->getPlan(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\MarketplacePurchaseMarketplacePendingChangeConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\MarketplacePurchaseMarketplacePendingChange' => false];
        }
    }
} else {
    class MarketplacePurchaseMarketplacePendingChangeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\MarketplacePurchaseMarketplacePendingChange';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\MarketplacePurchaseMarketplacePendingChange';
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
            $object = new \Github\Model\MarketplacePurchaseMarketplacePendingChange();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\MarketplacePurchaseMarketplacePendingChangeConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('is_installed', $data)) {
                $object->setIsInstalled($data['is_installed']);
                unset($data['is_installed']);
            }
            if (\array_key_exists('effective_date', $data)) {
                $object->setEffectiveDate($data['effective_date']);
                unset($data['effective_date']);
            }
            if (\array_key_exists('unit_count', $data) && $data['unit_count'] !== null) {
                $object->setUnitCount($data['unit_count']);
                unset($data['unit_count']);
            }
            elseif (\array_key_exists('unit_count', $data) && $data['unit_count'] === null) {
                $object->setUnitCount(null);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('plan', $data)) {
                $object->setPlan($this->denormalizer->denormalize($data['plan'], 'Github\\Model\\MarketplaceListingPlan', 'json', $context));
                unset($data['plan']);
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
            if ($object->isInitialized('isInstalled') && null !== $object->getIsInstalled()) {
                $data['is_installed'] = $object->getIsInstalled();
            }
            if ($object->isInitialized('effectiveDate') && null !== $object->getEffectiveDate()) {
                $data['effective_date'] = $object->getEffectiveDate();
            }
            if ($object->isInitialized('unitCount') && null !== $object->getUnitCount()) {
                $data['unit_count'] = $object->getUnitCount();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('plan') && null !== $object->getPlan()) {
                $data['plan'] = $this->normalizer->normalize($object->getPlan(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\MarketplacePurchaseMarketplacePendingChangeConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\MarketplacePurchaseMarketplacePendingChange' => false];
        }
    }
}