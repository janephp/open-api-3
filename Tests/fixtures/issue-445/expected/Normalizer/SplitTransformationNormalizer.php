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
    class SplitTransformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\SplitTransformation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SplitTransformation';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\SplitTransformation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('traceRefId', $data) && $data['traceRefId'] !== null) {
                $object->setTraceRefId($data['traceRefId']);
                unset($data['traceRefId']);
            }
            elseif (\array_key_exists('traceRefId', $data) && $data['traceRefId'] === null) {
                $object->setTraceRefId(null);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('separators', $data) && $data['separators'] !== null) {
                $object->setSeparators($data['separators']);
                unset($data['separators']);
            }
            elseif (\array_key_exists('separators', $data) && $data['separators'] === null) {
                $object->setSeparators(null);
            }
            if (\array_key_exists('keepEmpty', $data)) {
                $object->setKeepEmpty($data['keepEmpty']);
                unset($data['keepEmpty']);
            }
            if (\array_key_exists('trim', $data)) {
                $object->setTrim($data['trim']);
                unset($data['trim']);
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
            if ($object->isInitialized('traceRefId') && null !== $object->getTraceRefId()) {
                $data['traceRefId'] = $object->getTraceRefId();
            }
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('separators') && null !== $object->getSeparators()) {
                $data['separators'] = $object->getSeparators();
            }
            if ($object->isInitialized('keepEmpty') && null !== $object->getKeepEmpty()) {
                $data['keepEmpty'] = $object->getKeepEmpty();
            }
            if ($object->isInitialized('trim') && null !== $object->getTrim()) {
                $data['trim'] = $object->getTrim();
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
            return ['PicturePark\\API\\Model\\SplitTransformation' => false];
        }
    }
} else {
    class SplitTransformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\SplitTransformation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SplitTransformation';
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
            $object = new \PicturePark\API\Model\SplitTransformation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('traceRefId', $data) && $data['traceRefId'] !== null) {
                $object->setTraceRefId($data['traceRefId']);
                unset($data['traceRefId']);
            }
            elseif (\array_key_exists('traceRefId', $data) && $data['traceRefId'] === null) {
                $object->setTraceRefId(null);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('separators', $data) && $data['separators'] !== null) {
                $object->setSeparators($data['separators']);
                unset($data['separators']);
            }
            elseif (\array_key_exists('separators', $data) && $data['separators'] === null) {
                $object->setSeparators(null);
            }
            if (\array_key_exists('keepEmpty', $data)) {
                $object->setKeepEmpty($data['keepEmpty']);
                unset($data['keepEmpty']);
            }
            if (\array_key_exists('trim', $data)) {
                $object->setTrim($data['trim']);
                unset($data['trim']);
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
            if ($object->isInitialized('traceRefId') && null !== $object->getTraceRefId()) {
                $data['traceRefId'] = $object->getTraceRefId();
            }
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('separators') && null !== $object->getSeparators()) {
                $data['separators'] = $object->getSeparators();
            }
            if ($object->isInitialized('keepEmpty') && null !== $object->getKeepEmpty()) {
                $data['keepEmpty'] = $object->getKeepEmpty();
            }
            if ($object->isInitialized('trim') && null !== $object->getTrim()) {
                $data['trim'] = $object->getTrim();
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
            return ['PicturePark\\API\\Model\\SplitTransformation' => false];
        }
    }
}