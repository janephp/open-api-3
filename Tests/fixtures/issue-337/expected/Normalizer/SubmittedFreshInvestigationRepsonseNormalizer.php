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
    class SubmittedFreshInvestigationRepsonseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\SubmittedFreshInvestigationRepsonse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\SubmittedFreshInvestigationRepsonse';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\SubmittedFreshInvestigationRepsonse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('correlationId', $data)) {
                $object->setCorrelationId($data['correlationId']);
                unset($data['correlationId']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            if (\array_key_exists('orderID', $data)) {
                $object->setOrderID($data['orderID']);
                unset($data['orderID']);
            }
            if (\array_key_exists('transactionID', $data)) {
                $object->setTransactionID($data['transactionID']);
                unset($data['transactionID']);
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
            if ($object->isInitialized('correlationId') && null !== $object->getCorrelationId()) {
                $data['correlationId'] = $object->getCorrelationId();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['message'] = $object->getMessage();
            }
            if ($object->isInitialized('orderID') && null !== $object->getOrderID()) {
                $data['orderID'] = $object->getOrderID();
            }
            if ($object->isInitialized('transactionID') && null !== $object->getTransactionID()) {
                $data['transactionID'] = $object->getTransactionID();
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
            return ['CreditSafe\\API\\Model\\SubmittedFreshInvestigationRepsonse' => false];
        }
    }
} else {
    class SubmittedFreshInvestigationRepsonseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\SubmittedFreshInvestigationRepsonse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\SubmittedFreshInvestigationRepsonse';
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
            $object = new \CreditSafe\API\Model\SubmittedFreshInvestigationRepsonse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('correlationId', $data)) {
                $object->setCorrelationId($data['correlationId']);
                unset($data['correlationId']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            if (\array_key_exists('orderID', $data)) {
                $object->setOrderID($data['orderID']);
                unset($data['orderID']);
            }
            if (\array_key_exists('transactionID', $data)) {
                $object->setTransactionID($data['transactionID']);
                unset($data['transactionID']);
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
            if ($object->isInitialized('correlationId') && null !== $object->getCorrelationId()) {
                $data['correlationId'] = $object->getCorrelationId();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['message'] = $object->getMessage();
            }
            if ($object->isInitialized('orderID') && null !== $object->getOrderID()) {
                $data['orderID'] = $object->getOrderID();
            }
            if ($object->isInitialized('transactionID') && null !== $object->getTransactionID()) {
                $data['transactionID'] = $object->getTransactionID();
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
            return ['CreditSafe\\API\\Model\\SubmittedFreshInvestigationRepsonse' => false];
        }
    }
}