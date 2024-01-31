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
    class AlphaHandlingActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\AlphaHandlingAction';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\AlphaHandlingAction';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\AlphaHandlingAction();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('alphaHandling', $data)) {
                $object->setAlphaHandling($data['alphaHandling']);
                unset($data['alphaHandling']);
            }
            if (\array_key_exists('replacementRgbColorHexCode', $data) && $data['replacementRgbColorHexCode'] !== null) {
                $object->setReplacementRgbColorHexCode($data['replacementRgbColorHexCode']);
                unset($data['replacementRgbColorHexCode']);
            }
            elseif (\array_key_exists('replacementRgbColorHexCode', $data) && $data['replacementRgbColorHexCode'] === null) {
                $object->setReplacementRgbColorHexCode(null);
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
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('alphaHandling') && null !== $object->getAlphaHandling()) {
                $data['alphaHandling'] = $object->getAlphaHandling();
            }
            if ($object->isInitialized('replacementRgbColorHexCode') && null !== $object->getReplacementRgbColorHexCode()) {
                $data['replacementRgbColorHexCode'] = $object->getReplacementRgbColorHexCode();
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
            return ['PicturePark\\API\\Model\\AlphaHandlingAction' => false];
        }
    }
} else {
    class AlphaHandlingActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\AlphaHandlingAction';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\AlphaHandlingAction';
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
            $object = new \PicturePark\API\Model\AlphaHandlingAction();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('alphaHandling', $data)) {
                $object->setAlphaHandling($data['alphaHandling']);
                unset($data['alphaHandling']);
            }
            if (\array_key_exists('replacementRgbColorHexCode', $data) && $data['replacementRgbColorHexCode'] !== null) {
                $object->setReplacementRgbColorHexCode($data['replacementRgbColorHexCode']);
                unset($data['replacementRgbColorHexCode']);
            }
            elseif (\array_key_exists('replacementRgbColorHexCode', $data) && $data['replacementRgbColorHexCode'] === null) {
                $object->setReplacementRgbColorHexCode(null);
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
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('alphaHandling') && null !== $object->getAlphaHandling()) {
                $data['alphaHandling'] = $object->getAlphaHandling();
            }
            if ($object->isInitialized('replacementRgbColorHexCode') && null !== $object->getReplacementRgbColorHexCode()) {
                $data['replacementRgbColorHexCode'] = $object->getReplacementRgbColorHexCode();
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
            return ['PicturePark\\API\\Model\\AlphaHandlingAction' => false];
        }
    }
}