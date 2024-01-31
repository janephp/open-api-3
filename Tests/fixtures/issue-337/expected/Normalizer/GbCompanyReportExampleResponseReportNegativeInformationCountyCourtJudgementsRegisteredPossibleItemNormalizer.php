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
    class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem();
            if (\array_key_exists('ccjAmount', $data) && \is_int($data['ccjAmount'])) {
                $data['ccjAmount'] = (double) $data['ccjAmount'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ccjDate', $data)) {
                $object->setCcjDate($data['ccjDate']);
                unset($data['ccjDate']);
            }
            if (\array_key_exists('court', $data)) {
                $object->setCourt($data['court']);
                unset($data['court']);
            }
            if (\array_key_exists('ccjAmount', $data)) {
                $object->setCcjAmount($data['ccjAmount']);
                unset($data['ccjAmount']);
            }
            if (\array_key_exists('caseNumber', $data)) {
                $object->setCaseNumber($data['caseNumber']);
                unset($data['caseNumber']);
            }
            if (\array_key_exists('ccjStatus', $data)) {
                $object->setCcjStatus($data['ccjStatus']);
                unset($data['ccjStatus']);
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
            if ($object->isInitialized('ccjDate') && null !== $object->getCcjDate()) {
                $data['ccjDate'] = $object->getCcjDate();
            }
            if ($object->isInitialized('court') && null !== $object->getCourt()) {
                $data['court'] = $object->getCourt();
            }
            if ($object->isInitialized('ccjAmount') && null !== $object->getCcjAmount()) {
                $data['ccjAmount'] = $object->getCcjAmount();
            }
            if ($object->isInitialized('caseNumber') && null !== $object->getCaseNumber()) {
                $data['caseNumber'] = $object->getCaseNumber();
            }
            if ($object->isInitialized('ccjStatus') && null !== $object->getCcjStatus()) {
                $data['ccjStatus'] = $object->getCcjStatus();
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
            return ['CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem' => false];
        }
    }
} else {
    class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem';
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
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem();
            if (\array_key_exists('ccjAmount', $data) && \is_int($data['ccjAmount'])) {
                $data['ccjAmount'] = (double) $data['ccjAmount'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ccjDate', $data)) {
                $object->setCcjDate($data['ccjDate']);
                unset($data['ccjDate']);
            }
            if (\array_key_exists('court', $data)) {
                $object->setCourt($data['court']);
                unset($data['court']);
            }
            if (\array_key_exists('ccjAmount', $data)) {
                $object->setCcjAmount($data['ccjAmount']);
                unset($data['ccjAmount']);
            }
            if (\array_key_exists('caseNumber', $data)) {
                $object->setCaseNumber($data['caseNumber']);
                unset($data['caseNumber']);
            }
            if (\array_key_exists('ccjStatus', $data)) {
                $object->setCcjStatus($data['ccjStatus']);
                unset($data['ccjStatus']);
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
            if ($object->isInitialized('ccjDate') && null !== $object->getCcjDate()) {
                $data['ccjDate'] = $object->getCcjDate();
            }
            if ($object->isInitialized('court') && null !== $object->getCourt()) {
                $data['court'] = $object->getCourt();
            }
            if ($object->isInitialized('ccjAmount') && null !== $object->getCcjAmount()) {
                $data['ccjAmount'] = $object->getCcjAmount();
            }
            if ($object->isInitialized('caseNumber') && null !== $object->getCaseNumber()) {
                $data['caseNumber'] = $object->getCaseNumber();
            }
            if ($object->isInitialized('ccjStatus') && null !== $object->getCcjStatus()) {
                $data['ccjStatus'] = $object->getCcjStatus();
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
            return ['CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem' => false];
        }
    }
}