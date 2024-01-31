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
    class GbCompanyReportExampleResponseReportCreditScoreNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScore';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScore';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScore();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('currentCreditRating', $data)) {
                $object->setCurrentCreditRating($this->denormalizer->denormalize($data['currentCreditRating'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating', 'json', $context));
                unset($data['currentCreditRating']);
            }
            if (\array_key_exists('currentContractLimit', $data)) {
                $object->setCurrentContractLimit($this->denormalizer->denormalize($data['currentContractLimit'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScoreCurrentContractLimit', 'json', $context));
                unset($data['currentContractLimit']);
            }
            if (\array_key_exists('previousCreditRating', $data)) {
                $object->setPreviousCreditRating($this->denormalizer->denormalize($data['previousCreditRating'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating', 'json', $context));
                unset($data['previousCreditRating']);
            }
            if (\array_key_exists('latestRatingChangeDate', $data)) {
                $object->setLatestRatingChangeDate($data['latestRatingChangeDate']);
                unset($data['latestRatingChangeDate']);
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
            if ($object->isInitialized('currentCreditRating') && null !== $object->getCurrentCreditRating()) {
                $data['currentCreditRating'] = $this->normalizer->normalize($object->getCurrentCreditRating(), 'json', $context);
            }
            if ($object->isInitialized('currentContractLimit') && null !== $object->getCurrentContractLimit()) {
                $data['currentContractLimit'] = $this->normalizer->normalize($object->getCurrentContractLimit(), 'json', $context);
            }
            if ($object->isInitialized('previousCreditRating') && null !== $object->getPreviousCreditRating()) {
                $data['previousCreditRating'] = $this->normalizer->normalize($object->getPreviousCreditRating(), 'json', $context);
            }
            if ($object->isInitialized('latestRatingChangeDate') && null !== $object->getLatestRatingChangeDate()) {
                $data['latestRatingChangeDate'] = $object->getLatestRatingChangeDate();
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
            return ['CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScore' => false];
        }
    }
} else {
    class GbCompanyReportExampleResponseReportCreditScoreNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScore';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScore';
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
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScore();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('currentCreditRating', $data)) {
                $object->setCurrentCreditRating($this->denormalizer->denormalize($data['currentCreditRating'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating', 'json', $context));
                unset($data['currentCreditRating']);
            }
            if (\array_key_exists('currentContractLimit', $data)) {
                $object->setCurrentContractLimit($this->denormalizer->denormalize($data['currentContractLimit'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScoreCurrentContractLimit', 'json', $context));
                unset($data['currentContractLimit']);
            }
            if (\array_key_exists('previousCreditRating', $data)) {
                $object->setPreviousCreditRating($this->denormalizer->denormalize($data['previousCreditRating'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating', 'json', $context));
                unset($data['previousCreditRating']);
            }
            if (\array_key_exists('latestRatingChangeDate', $data)) {
                $object->setLatestRatingChangeDate($data['latestRatingChangeDate']);
                unset($data['latestRatingChangeDate']);
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
            if ($object->isInitialized('currentCreditRating') && null !== $object->getCurrentCreditRating()) {
                $data['currentCreditRating'] = $this->normalizer->normalize($object->getCurrentCreditRating(), 'json', $context);
            }
            if ($object->isInitialized('currentContractLimit') && null !== $object->getCurrentContractLimit()) {
                $data['currentContractLimit'] = $this->normalizer->normalize($object->getCurrentContractLimit(), 'json', $context);
            }
            if ($object->isInitialized('previousCreditRating') && null !== $object->getPreviousCreditRating()) {
                $data['previousCreditRating'] = $this->normalizer->normalize($object->getPreviousCreditRating(), 'json', $context);
            }
            if ($object->isInitialized('latestRatingChangeDate') && null !== $object->getLatestRatingChangeDate()) {
                $data['latestRatingChangeDate'] = $object->getLatestRatingChangeDate();
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
            return ['CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScore' => false];
        }
    }
}