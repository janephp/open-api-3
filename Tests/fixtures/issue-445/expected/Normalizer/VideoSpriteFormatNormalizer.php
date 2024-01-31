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
    class VideoSpriteFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\VideoSpriteFormat';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\VideoSpriteFormat';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\VideoSpriteFormat();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('spriteResizeAction', $data) && $data['spriteResizeAction'] !== null) {
                $object->setSpriteResizeAction($data['spriteResizeAction']);
                unset($data['spriteResizeAction']);
            }
            elseif (\array_key_exists('spriteResizeAction', $data) && $data['spriteResizeAction'] === null) {
                $object->setSpriteResizeAction(null);
            }
            if (\array_key_exists('maxNumberOfSprites', $data)) {
                $object->setMaxNumberOfSprites($data['maxNumberOfSprites']);
                unset($data['maxNumberOfSprites']);
            }
            if (\array_key_exists('quality', $data)) {
                $object->setQuality($data['quality']);
                unset($data['quality']);
            }
            if (\array_key_exists('extension', $data) && $data['extension'] !== null) {
                $object->setExtension($data['extension']);
                unset($data['extension']);
            }
            elseif (\array_key_exists('extension', $data) && $data['extension'] === null) {
                $object->setExtension(null);
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
            if ($object->isInitialized('spriteResizeAction') && null !== $object->getSpriteResizeAction()) {
                $data['spriteResizeAction'] = $object->getSpriteResizeAction();
            }
            if ($object->isInitialized('maxNumberOfSprites') && null !== $object->getMaxNumberOfSprites()) {
                $data['maxNumberOfSprites'] = $object->getMaxNumberOfSprites();
            }
            if ($object->isInitialized('quality') && null !== $object->getQuality()) {
                $data['quality'] = $object->getQuality();
            }
            if ($object->isInitialized('extension') && null !== $object->getExtension()) {
                $data['extension'] = $object->getExtension();
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
            return ['PicturePark\\API\\Model\\VideoSpriteFormat' => false];
        }
    }
} else {
    class VideoSpriteFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\VideoSpriteFormat';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\VideoSpriteFormat';
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
            $object = new \PicturePark\API\Model\VideoSpriteFormat();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('spriteResizeAction', $data) && $data['spriteResizeAction'] !== null) {
                $object->setSpriteResizeAction($data['spriteResizeAction']);
                unset($data['spriteResizeAction']);
            }
            elseif (\array_key_exists('spriteResizeAction', $data) && $data['spriteResizeAction'] === null) {
                $object->setSpriteResizeAction(null);
            }
            if (\array_key_exists('maxNumberOfSprites', $data)) {
                $object->setMaxNumberOfSprites($data['maxNumberOfSprites']);
                unset($data['maxNumberOfSprites']);
            }
            if (\array_key_exists('quality', $data)) {
                $object->setQuality($data['quality']);
                unset($data['quality']);
            }
            if (\array_key_exists('extension', $data) && $data['extension'] !== null) {
                $object->setExtension($data['extension']);
                unset($data['extension']);
            }
            elseif (\array_key_exists('extension', $data) && $data['extension'] === null) {
                $object->setExtension(null);
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
            if ($object->isInitialized('spriteResizeAction') && null !== $object->getSpriteResizeAction()) {
                $data['spriteResizeAction'] = $object->getSpriteResizeAction();
            }
            if ($object->isInitialized('maxNumberOfSprites') && null !== $object->getMaxNumberOfSprites()) {
                $data['maxNumberOfSprites'] = $object->getMaxNumberOfSprites();
            }
            if ($object->isInitialized('quality') && null !== $object->getQuality()) {
                $data['quality'] = $object->getQuality();
            }
            if ($object->isInitialized('extension') && null !== $object->getExtension()) {
                $data['extension'] = $object->getExtension();
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
            return ['PicturePark\\API\\Model\\VideoSpriteFormat' => false];
        }
    }
}