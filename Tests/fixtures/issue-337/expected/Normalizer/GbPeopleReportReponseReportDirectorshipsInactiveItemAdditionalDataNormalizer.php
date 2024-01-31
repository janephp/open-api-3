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
    class GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData();
            if (\array_key_exists('gearing', $data) && \is_int($data['gearing'])) {
                $data['gearing'] = (double) $data['gearing'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('occupation', $data)) {
                $object->setOccupation($data['occupation']);
                unset($data['occupation']);
            }
            if (\array_key_exists('statusDescription', $data)) {
                $object->setStatusDescription($data['statusDescription']);
                unset($data['statusDescription']);
            }
            if (\array_key_exists('gearing', $data)) {
                $object->setGearing($data['gearing']);
                unset($data['gearing']);
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
            if ($object->isInitialized('occupation') && null !== $object->getOccupation()) {
                $data['occupation'] = $object->getOccupation();
            }
            if ($object->isInitialized('statusDescription') && null !== $object->getStatusDescription()) {
                $data['statusDescription'] = $object->getStatusDescription();
            }
            if ($object->isInitialized('gearing') && null !== $object->getGearing()) {
                $data['gearing'] = $object->getGearing();
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
            return ['CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData' => false];
        }
    }
} else {
    class GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData';
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
            $object = new \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData();
            if (\array_key_exists('gearing', $data) && \is_int($data['gearing'])) {
                $data['gearing'] = (double) $data['gearing'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('occupation', $data)) {
                $object->setOccupation($data['occupation']);
                unset($data['occupation']);
            }
            if (\array_key_exists('statusDescription', $data)) {
                $object->setStatusDescription($data['statusDescription']);
                unset($data['statusDescription']);
            }
            if (\array_key_exists('gearing', $data)) {
                $object->setGearing($data['gearing']);
                unset($data['gearing']);
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
            if ($object->isInitialized('occupation') && null !== $object->getOccupation()) {
                $data['occupation'] = $object->getOccupation();
            }
            if ($object->isInitialized('statusDescription') && null !== $object->getStatusDescription()) {
                $data['statusDescription'] = $object->getStatusDescription();
            }
            if ($object->isInitialized('gearing') && null !== $object->getGearing()) {
                $data['gearing'] = $object->getGearing();
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
            return ['CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData' => false];
        }
    }
}