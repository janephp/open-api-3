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
    class Mp4VideoFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\Mp4VideoFormat';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Mp4VideoFormat';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\Mp4VideoFormat();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('resizeAction', $data) && $data['resizeAction'] !== null) {
                $object->setResizeAction($data['resizeAction']);
                unset($data['resizeAction']);
            }
            elseif (\array_key_exists('resizeAction', $data) && $data['resizeAction'] === null) {
                $object->setResizeAction(null);
            }
            if (\array_key_exists('audioCodec', $data) && $data['audioCodec'] !== null) {
                $object->setAudioCodec($data['audioCodec']);
                unset($data['audioCodec']);
            }
            elseif (\array_key_exists('audioCodec', $data) && $data['audioCodec'] === null) {
                $object->setAudioCodec(null);
            }
            if (\array_key_exists('preset', $data)) {
                $object->setPreset($data['preset']);
                unset($data['preset']);
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
            if ($object->isInitialized('resizeAction') && null !== $object->getResizeAction()) {
                $data['resizeAction'] = $object->getResizeAction();
            }
            if ($object->isInitialized('audioCodec') && null !== $object->getAudioCodec()) {
                $data['audioCodec'] = $object->getAudioCodec();
            }
            if ($object->isInitialized('preset') && null !== $object->getPreset()) {
                $data['preset'] = $object->getPreset();
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
            return ['PicturePark\\API\\Model\\Mp4VideoFormat' => false];
        }
    }
} else {
    class Mp4VideoFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\Mp4VideoFormat';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Mp4VideoFormat';
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
            $object = new \PicturePark\API\Model\Mp4VideoFormat();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('resizeAction', $data) && $data['resizeAction'] !== null) {
                $object->setResizeAction($data['resizeAction']);
                unset($data['resizeAction']);
            }
            elseif (\array_key_exists('resizeAction', $data) && $data['resizeAction'] === null) {
                $object->setResizeAction(null);
            }
            if (\array_key_exists('audioCodec', $data) && $data['audioCodec'] !== null) {
                $object->setAudioCodec($data['audioCodec']);
                unset($data['audioCodec']);
            }
            elseif (\array_key_exists('audioCodec', $data) && $data['audioCodec'] === null) {
                $object->setAudioCodec(null);
            }
            if (\array_key_exists('preset', $data)) {
                $object->setPreset($data['preset']);
                unset($data['preset']);
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
            if ($object->isInitialized('resizeAction') && null !== $object->getResizeAction()) {
                $data['resizeAction'] = $object->getResizeAction();
            }
            if ($object->isInitialized('audioCodec') && null !== $object->getAudioCodec()) {
                $data['audioCodec'] = $object->getAudioCodec();
            }
            if ($object->isInitialized('preset') && null !== $object->getPreset()) {
                $data['preset'] = $object->getPreset();
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
            return ['PicturePark\\API\\Model\\Mp4VideoFormat' => false];
        }
    }
}