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
    class BusinessRuleTransformationGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\BusinessRuleTransformationGroup';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleTransformationGroup';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\BusinessRuleTransformationGroup();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('inputs', $data) && $data['inputs'] !== null) {
                $values = [];
                foreach ($data['inputs'] as $value) {
                    $values[] = $value;
                }
                $object->setInputs($values);
            }
            elseif (\array_key_exists('inputs', $data) && $data['inputs'] === null) {
                $object->setInputs(null);
            }
            if (\array_key_exists('transformations', $data) && $data['transformations'] !== null) {
                $values_1 = [];
                foreach ($data['transformations'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\BusinessRuleTransformation', 'json', $context);
                }
                $object->setTransformations($values_1);
            }
            elseif (\array_key_exists('transformations', $data) && $data['transformations'] === null) {
                $object->setTransformations(null);
            }
            if (\array_key_exists('storeIn', $data) && $data['storeIn'] !== null) {
                $object->setStoreIn($data['storeIn']);
            }
            elseif (\array_key_exists('storeIn', $data) && $data['storeIn'] === null) {
                $object->setStoreIn(null);
            }
            if (\array_key_exists('traceRefId', $data) && $data['traceRefId'] !== null) {
                $object->setTraceRefId($data['traceRefId']);
            }
            elseif (\array_key_exists('traceRefId', $data) && $data['traceRefId'] === null) {
                $object->setTraceRefId(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('inputs') && null !== $object->getInputs()) {
                $values = [];
                foreach ($object->getInputs() as $value) {
                    $values[] = $value;
                }
                $data['inputs'] = $values;
            }
            if ($object->isInitialized('transformations') && null !== $object->getTransformations()) {
                $values_1 = [];
                foreach ($object->getTransformations() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['transformations'] = $values_1;
            }
            if ($object->isInitialized('storeIn') && null !== $object->getStoreIn()) {
                $data['storeIn'] = $object->getStoreIn();
            }
            if ($object->isInitialized('traceRefId') && null !== $object->getTraceRefId()) {
                $data['traceRefId'] = $object->getTraceRefId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\BusinessRuleTransformationGroup' => false];
        }
    }
} else {
    class BusinessRuleTransformationGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\BusinessRuleTransformationGroup';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleTransformationGroup';
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
            $object = new \PicturePark\API\Model\BusinessRuleTransformationGroup();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('inputs', $data) && $data['inputs'] !== null) {
                $values = [];
                foreach ($data['inputs'] as $value) {
                    $values[] = $value;
                }
                $object->setInputs($values);
            }
            elseif (\array_key_exists('inputs', $data) && $data['inputs'] === null) {
                $object->setInputs(null);
            }
            if (\array_key_exists('transformations', $data) && $data['transformations'] !== null) {
                $values_1 = [];
                foreach ($data['transformations'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\BusinessRuleTransformation', 'json', $context);
                }
                $object->setTransformations($values_1);
            }
            elseif (\array_key_exists('transformations', $data) && $data['transformations'] === null) {
                $object->setTransformations(null);
            }
            if (\array_key_exists('storeIn', $data) && $data['storeIn'] !== null) {
                $object->setStoreIn($data['storeIn']);
            }
            elseif (\array_key_exists('storeIn', $data) && $data['storeIn'] === null) {
                $object->setStoreIn(null);
            }
            if (\array_key_exists('traceRefId', $data) && $data['traceRefId'] !== null) {
                $object->setTraceRefId($data['traceRefId']);
            }
            elseif (\array_key_exists('traceRefId', $data) && $data['traceRefId'] === null) {
                $object->setTraceRefId(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('inputs') && null !== $object->getInputs()) {
                $values = [];
                foreach ($object->getInputs() as $value) {
                    $values[] = $value;
                }
                $data['inputs'] = $values;
            }
            if ($object->isInitialized('transformations') && null !== $object->getTransformations()) {
                $values_1 = [];
                foreach ($object->getTransformations() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['transformations'] = $values_1;
            }
            if ($object->isInitialized('storeIn') && null !== $object->getStoreIn()) {
                $data['storeIn'] = $object->getStoreIn();
            }
            if ($object->isInitialized('traceRefId') && null !== $object->getTraceRefId()) {
                $data['traceRefId'] = $object->getTraceRefId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\BusinessRuleTransformationGroup' => false];
        }
    }
}