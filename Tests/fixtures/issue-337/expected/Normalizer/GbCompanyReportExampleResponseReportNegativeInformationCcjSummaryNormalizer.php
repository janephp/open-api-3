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
    class GbCompanyReportExampleResponseReportNegativeInformationCcjSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCcjSummary';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCcjSummary';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCcjSummary();
            if (\array_key_exists('exactRegistered', $data) && \is_int($data['exactRegistered'])) {
                $data['exactRegistered'] = (double) $data['exactRegistered'];
            }
            if (\array_key_exists('possibleRegistered', $data) && \is_int($data['possibleRegistered'])) {
                $data['possibleRegistered'] = (double) $data['possibleRegistered'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('exactRegistered', $data)) {
                $object->setExactRegistered($data['exactRegistered']);
                unset($data['exactRegistered']);
            }
            if (\array_key_exists('possibleRegistered', $data)) {
                $object->setPossibleRegistered($data['possibleRegistered']);
                unset($data['possibleRegistered']);
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
            if ($object->isInitialized('exactRegistered') && null !== $object->getExactRegistered()) {
                $data['exactRegistered'] = $object->getExactRegistered();
            }
            if ($object->isInitialized('possibleRegistered') && null !== $object->getPossibleRegistered()) {
                $data['possibleRegistered'] = $object->getPossibleRegistered();
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
            return ['CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCcjSummary' => false];
        }
    }
} else {
    class GbCompanyReportExampleResponseReportNegativeInformationCcjSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCcjSummary';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCcjSummary';
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
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCcjSummary();
            if (\array_key_exists('exactRegistered', $data) && \is_int($data['exactRegistered'])) {
                $data['exactRegistered'] = (double) $data['exactRegistered'];
            }
            if (\array_key_exists('possibleRegistered', $data) && \is_int($data['possibleRegistered'])) {
                $data['possibleRegistered'] = (double) $data['possibleRegistered'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('exactRegistered', $data)) {
                $object->setExactRegistered($data['exactRegistered']);
                unset($data['exactRegistered']);
            }
            if (\array_key_exists('possibleRegistered', $data)) {
                $object->setPossibleRegistered($data['possibleRegistered']);
                unset($data['possibleRegistered']);
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
            if ($object->isInitialized('exactRegistered') && null !== $object->getExactRegistered()) {
                $data['exactRegistered'] = $object->getExactRegistered();
            }
            if ($object->isInitialized('possibleRegistered') && null !== $object->getPossibleRegistered()) {
                $data['possibleRegistered'] = $object->getPossibleRegistered();
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
            return ['CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCcjSummary' => false];
        }
    }
}