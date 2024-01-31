<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class DateRangeForAggregatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\DateRangeForAggregator';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DateRangeForAggregator';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\DateRangeForAggregator();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('names', $data) && $data['names'] !== null) {
                $object->setNames($data['names']);
            }
            elseif (\array_key_exists('names', $data) && $data['names'] === null) {
                $object->setNames(null);
            }
            if (\array_key_exists('from', $data) && $data['from'] !== null) {
                $object->setFrom($data['from']);
            }
            elseif (\array_key_exists('from', $data) && $data['from'] === null) {
                $object->setFrom(null);
            }
            if (\array_key_exists('to', $data) && $data['to'] !== null) {
                $object->setTo($data['to']);
            }
            elseif (\array_key_exists('to', $data) && $data['to'] === null) {
                $object->setTo(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('from') && null !== $object->getFrom()) {
                $data['from'] = $object->getFrom();
            }
            if ($object->isInitialized('to') && null !== $object->getTo()) {
                $data['to'] = $object->getTo();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\DateRangeForAggregator' => false];
        }
    }
} else {
    class DateRangeForAggregatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\DateRangeForAggregator';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DateRangeForAggregator';
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
            $object = new \PicturePark\API\Model\DateRangeForAggregator();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('names', $data) && $data['names'] !== null) {
                $object->setNames($data['names']);
            }
            elseif (\array_key_exists('names', $data) && $data['names'] === null) {
                $object->setNames(null);
            }
            if (\array_key_exists('from', $data) && $data['from'] !== null) {
                $object->setFrom($data['from']);
            }
            elseif (\array_key_exists('from', $data) && $data['from'] === null) {
                $object->setFrom(null);
            }
            if (\array_key_exists('to', $data) && $data['to'] !== null) {
                $object->setTo($data['to']);
            }
            elseif (\array_key_exists('to', $data) && $data['to'] === null) {
                $object->setTo(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('from') && null !== $object->getFrom()) {
                $data['from'] = $object->getFrom();
            }
            if ($object->isInitialized('to') && null !== $object->getTo()) {
                $data['to'] = $object->getTo();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\DateRangeForAggregator' => false];
        }
    }
}