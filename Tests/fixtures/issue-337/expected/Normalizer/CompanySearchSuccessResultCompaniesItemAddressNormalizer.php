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
    class CompanySearchSuccessResultCompaniesItemAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItemAddress';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItemAddress';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('simpleValue', $data)) {
                $object->setSimpleValue($data['simpleValue']);
                unset($data['simpleValue']);
            }
            if (\array_key_exists('street', $data)) {
                $object->setStreet($data['street']);
                unset($data['street']);
            }
            if (\array_key_exists('city', $data)) {
                $object->setCity($data['city']);
                unset($data['city']);
            }
            if (\array_key_exists('postCode', $data)) {
                $object->setPostCode($data['postCode']);
                unset($data['postCode']);
            }
            if (\array_key_exists('province', $data)) {
                $object->setProvince($data['province']);
                unset($data['province']);
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
            if ($object->isInitialized('simpleValue') && null !== $object->getSimpleValue()) {
                $data['simpleValue'] = $object->getSimpleValue();
            }
            if ($object->isInitialized('street') && null !== $object->getStreet()) {
                $data['street'] = $object->getStreet();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('postCode') && null !== $object->getPostCode()) {
                $data['postCode'] = $object->getPostCode();
            }
            if ($object->isInitialized('province') && null !== $object->getProvince()) {
                $data['province'] = $object->getProvince();
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
            return ['CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItemAddress' => false];
        }
    }
} else {
    class CompanySearchSuccessResultCompaniesItemAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItemAddress';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItemAddress';
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
            $object = new \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('simpleValue', $data)) {
                $object->setSimpleValue($data['simpleValue']);
                unset($data['simpleValue']);
            }
            if (\array_key_exists('street', $data)) {
                $object->setStreet($data['street']);
                unset($data['street']);
            }
            if (\array_key_exists('city', $data)) {
                $object->setCity($data['city']);
                unset($data['city']);
            }
            if (\array_key_exists('postCode', $data)) {
                $object->setPostCode($data['postCode']);
                unset($data['postCode']);
            }
            if (\array_key_exists('province', $data)) {
                $object->setProvince($data['province']);
                unset($data['province']);
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
            if ($object->isInitialized('simpleValue') && null !== $object->getSimpleValue()) {
                $data['simpleValue'] = $object->getSimpleValue();
            }
            if ($object->isInitialized('street') && null !== $object->getStreet()) {
                $data['street'] = $object->getStreet();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('postCode') && null !== $object->getPostCode()) {
                $data['postCode'] = $object->getPostCode();
            }
            if ($object->isInitialized('province') && null !== $object->getProvince()) {
                $data['province'] = $object->getProvince();
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
            return ['CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItemAddress' => false];
        }
    }
}