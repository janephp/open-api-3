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
    class GbCompanyReportExampleResponseReportNegativeInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformation';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ccjSummary', $data)) {
                $object->setCcjSummary($this->denormalizer->denormalize($data['ccjSummary'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCcjSummary', 'json', $context));
                unset($data['ccjSummary']);
            }
            if (\array_key_exists('countyCourtJudgements', $data)) {
                $object->setCountyCourtJudgements($this->denormalizer->denormalize($data['countyCourtJudgements'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgements', 'json', $context));
                unset($data['countyCourtJudgements']);
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
            if ($object->isInitialized('ccjSummary') && null !== $object->getCcjSummary()) {
                $data['ccjSummary'] = $this->normalizer->normalize($object->getCcjSummary(), 'json', $context);
            }
            if ($object->isInitialized('countyCourtJudgements') && null !== $object->getCountyCourtJudgements()) {
                $data['countyCourtJudgements'] = $this->normalizer->normalize($object->getCountyCourtJudgements(), 'json', $context);
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
            return ['CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformation' => false];
        }
    }
} else {
    class GbCompanyReportExampleResponseReportNegativeInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformation';
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
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ccjSummary', $data)) {
                $object->setCcjSummary($this->denormalizer->denormalize($data['ccjSummary'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCcjSummary', 'json', $context));
                unset($data['ccjSummary']);
            }
            if (\array_key_exists('countyCourtJudgements', $data)) {
                $object->setCountyCourtJudgements($this->denormalizer->denormalize($data['countyCourtJudgements'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgements', 'json', $context));
                unset($data['countyCourtJudgements']);
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
            if ($object->isInitialized('ccjSummary') && null !== $object->getCcjSummary()) {
                $data['ccjSummary'] = $this->normalizer->normalize($object->getCcjSummary(), 'json', $context);
            }
            if ($object->isInitialized('countyCourtJudgements') && null !== $object->getCountyCourtJudgements()) {
                $data['countyCourtJudgements'] = $this->normalizer->normalize($object->getCountyCourtJudgements(), 'json', $context);
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
            return ['CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformation' => false];
        }
    }
}