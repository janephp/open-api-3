<?php

namespace ApiPlatform\Demo\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ApiPlatform\Demo\Runtime\Normalizer\CheckArray;
use ApiPlatform\Demo\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ApiPlatform\Demo\Model\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('@type', $data)) {
                $object->setType($data['@type']);
                unset($data['@type']);
            }
            if (\array_key_exists('variable', $data)) {
                $object->setVariable($data['variable']);
                unset($data['variable']);
            }
            if (\array_key_exists('property', $data) && $data['property'] !== null) {
                $object->setProperty($data['property']);
                unset($data['property']);
            }
            elseif (\array_key_exists('property', $data) && $data['property'] === null) {
                $object->setProperty(null);
            }
            if (\array_key_exists('required', $data)) {
                $object->setRequired($data['required']);
                unset($data['required']);
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
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['@type'] = $object->getType();
            }
            if ($object->isInitialized('variable') && null !== $object->getVariable()) {
                $data['variable'] = $object->getVariable();
            }
            if ($object->isInitialized('property') && null !== $object->getProperty()) {
                $data['property'] = $object->getProperty();
            }
            if ($object->isInitialized('required') && null !== $object->getRequired()) {
                $data['required'] = $object->getRequired();
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
            return ['ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem' => false];
        }
    }
} else {
    class ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem';
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
            $object = new \ApiPlatform\Demo\Model\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('@type', $data)) {
                $object->setType($data['@type']);
                unset($data['@type']);
            }
            if (\array_key_exists('variable', $data)) {
                $object->setVariable($data['variable']);
                unset($data['variable']);
            }
            if (\array_key_exists('property', $data) && $data['property'] !== null) {
                $object->setProperty($data['property']);
                unset($data['property']);
            }
            elseif (\array_key_exists('property', $data) && $data['property'] === null) {
                $object->setProperty(null);
            }
            if (\array_key_exists('required', $data)) {
                $object->setRequired($data['required']);
                unset($data['required']);
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
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['@type'] = $object->getType();
            }
            if ($object->isInitialized('variable') && null !== $object->getVariable()) {
                $data['variable'] = $object->getVariable();
            }
            if ($object->isInitialized('property') && null !== $object->getProperty()) {
                $data['property'] = $object->getProperty();
            }
            if ($object->isInitialized('required') && null !== $object->getRequired()) {
                $data['required'] = $object->getRequired();
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
            return ['ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem' => false];
        }
    }
}