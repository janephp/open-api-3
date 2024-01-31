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
    class MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('portfolios', $data)) {
                $values = [];
                foreach ($data['portfolios'] as $value) {
                    $values[] = $value;
                }
                $object->setPortfolios($values);
                unset($data['portfolios']);
            }
            if (\array_key_exists('companies', $data)) {
                $values_1 = [];
                foreach ($data['companies'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyCompaniesItem', 'json', $context);
                }
                $object->setCompanies($values_1);
                unset($data['companies']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('portfolios') && null !== $object->getPortfolios()) {
                $values = [];
                foreach ($object->getPortfolios() as $value) {
                    $values[] = $value;
                }
                $data['portfolios'] = $values;
            }
            if ($object->isInitialized('companies') && null !== $object->getCompanies()) {
                $values_1 = [];
                foreach ($object->getCompanies() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['companies'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody' => false];
        }
    }
} else {
    class MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody';
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
            $object = new \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('portfolios', $data)) {
                $values = [];
                foreach ($data['portfolios'] as $value) {
                    $values[] = $value;
                }
                $object->setPortfolios($values);
                unset($data['portfolios']);
            }
            if (\array_key_exists('companies', $data)) {
                $values_1 = [];
                foreach ($data['companies'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyCompaniesItem', 'json', $context);
                }
                $object->setCompanies($values_1);
                unset($data['companies']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('portfolios') && null !== $object->getPortfolios()) {
                $values = [];
                foreach ($object->getPortfolios() as $value) {
                    $values[] = $value;
                }
                $data['portfolios'] = $values;
            }
            if ($object->isInitialized('companies') && null !== $object->getCompanies()) {
                $values_1 = [];
                foreach ($object->getCompanies() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['companies'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody' => false];
        }
    }
}