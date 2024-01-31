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
    class GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary();
            if (\array_key_exists('outstanding', $data) && \is_int($data['outstanding'])) {
                $data['outstanding'] = (double) $data['outstanding'];
            }
            if (\array_key_exists('satisfied', $data) && \is_int($data['satisfied'])) {
                $data['satisfied'] = (double) $data['satisfied'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('outstanding', $data)) {
                $object->setOutstanding($data['outstanding']);
                unset($data['outstanding']);
            }
            if (\array_key_exists('satisfied', $data)) {
                $object->setSatisfied($data['satisfied']);
                unset($data['satisfied']);
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
            if ($object->isInitialized('outstanding') && null !== $object->getOutstanding()) {
                $data['outstanding'] = $object->getOutstanding();
            }
            if ($object->isInitialized('satisfied') && null !== $object->getSatisfied()) {
                $data['satisfied'] = $object->getSatisfied();
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
            return ['CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary' => false];
        }
    }
} else {
    class GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary';
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
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary();
            if (\array_key_exists('outstanding', $data) && \is_int($data['outstanding'])) {
                $data['outstanding'] = (double) $data['outstanding'];
            }
            if (\array_key_exists('satisfied', $data) && \is_int($data['satisfied'])) {
                $data['satisfied'] = (double) $data['satisfied'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('outstanding', $data)) {
                $object->setOutstanding($data['outstanding']);
                unset($data['outstanding']);
            }
            if (\array_key_exists('satisfied', $data)) {
                $object->setSatisfied($data['satisfied']);
                unset($data['satisfied']);
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
            if ($object->isInitialized('outstanding') && null !== $object->getOutstanding()) {
                $data['outstanding'] = $object->getOutstanding();
            }
            if ($object->isInitialized('satisfied') && null !== $object->getSatisfied()) {
                $data['satisfied'] = $object->getSatisfied();
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
            return ['CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary' => false];
        }
    }
}