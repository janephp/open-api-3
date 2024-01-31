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
    class PagingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\Paging';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\Paging';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\Paging();
            if (\array_key_exists('size', $data) && \is_int($data['size'])) {
                $data['size'] = (double) $data['size'];
            }
            if (\array_key_exists('prev', $data) && \is_int($data['prev'])) {
                $data['prev'] = (double) $data['prev'];
            }
            if (\array_key_exists('next', $data) && \is_int($data['next'])) {
                $data['next'] = (double) $data['next'];
            }
            if (\array_key_exists('last', $data) && \is_int($data['last'])) {
                $data['last'] = (double) $data['last'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('size', $data)) {
                $object->setSize($data['size']);
                unset($data['size']);
            }
            if (\array_key_exists('prev', $data)) {
                $object->setPrev($data['prev']);
                unset($data['prev']);
            }
            if (\array_key_exists('next', $data)) {
                $object->setNext($data['next']);
                unset($data['next']);
            }
            if (\array_key_exists('last', $data)) {
                $object->setLast($data['last']);
                unset($data['last']);
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
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['size'] = $object->getSize();
            }
            if ($object->isInitialized('prev') && null !== $object->getPrev()) {
                $data['prev'] = $object->getPrev();
            }
            if ($object->isInitialized('next') && null !== $object->getNext()) {
                $data['next'] = $object->getNext();
            }
            if ($object->isInitialized('last') && null !== $object->getLast()) {
                $data['last'] = $object->getLast();
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
            return ['CreditSafe\\API\\Model\\Paging' => false];
        }
    }
} else {
    class PagingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\Paging';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\Paging';
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
            $object = new \CreditSafe\API\Model\Paging();
            if (\array_key_exists('size', $data) && \is_int($data['size'])) {
                $data['size'] = (double) $data['size'];
            }
            if (\array_key_exists('prev', $data) && \is_int($data['prev'])) {
                $data['prev'] = (double) $data['prev'];
            }
            if (\array_key_exists('next', $data) && \is_int($data['next'])) {
                $data['next'] = (double) $data['next'];
            }
            if (\array_key_exists('last', $data) && \is_int($data['last'])) {
                $data['last'] = (double) $data['last'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('size', $data)) {
                $object->setSize($data['size']);
                unset($data['size']);
            }
            if (\array_key_exists('prev', $data)) {
                $object->setPrev($data['prev']);
                unset($data['prev']);
            }
            if (\array_key_exists('next', $data)) {
                $object->setNext($data['next']);
                unset($data['next']);
            }
            if (\array_key_exists('last', $data)) {
                $object->setLast($data['last']);
                unset($data['last']);
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
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['size'] = $object->getSize();
            }
            if ($object->isInitialized('prev') && null !== $object->getPrev()) {
                $data['prev'] = $object->getPrev();
            }
            if ($object->isInitialized('next') && null !== $object->getNext()) {
                $data['next'] = $object->getNext();
            }
            if ($object->isInitialized('last') && null !== $object->getLast()) {
                $data['last'] = $object->getLast();
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
            return ['CreditSafe\\API\\Model\\Paging' => false];
        }
    }
}