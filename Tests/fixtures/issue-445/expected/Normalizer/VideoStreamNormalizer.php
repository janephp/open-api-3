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
    class VideoStreamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\VideoStream';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\VideoStream';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\VideoStream();
            if (\array_key_exists('durationInSeconds', $data) && \is_int($data['durationInSeconds'])) {
                $data['durationInSeconds'] = (double) $data['durationInSeconds'];
            }
            if (\array_key_exists('frameRate', $data) && \is_int($data['frameRate'])) {
                $data['frameRate'] = (double) $data['frameRate'];
            }
            if (\array_key_exists('pixelAspectRatio', $data) && \is_int($data['pixelAspectRatio'])) {
                $data['pixelAspectRatio'] = (double) $data['pixelAspectRatio'];
            }
            if (\array_key_exists('rotation', $data) && \is_int($data['rotation'])) {
                $data['rotation'] = (double) $data['rotation'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('bitRate', $data) && $data['bitRate'] !== null) {
                $object->setBitRate($data['bitRate']);
            }
            elseif (\array_key_exists('bitRate', $data) && $data['bitRate'] === null) {
                $object->setBitRate(null);
            }
            if (\array_key_exists('codec', $data) && $data['codec'] !== null) {
                $object->setCodec($data['codec']);
            }
            elseif (\array_key_exists('codec', $data) && $data['codec'] === null) {
                $object->setCodec(null);
            }
            if (\array_key_exists('displayAspectRatio', $data) && $data['displayAspectRatio'] !== null) {
                $object->setDisplayAspectRatio($data['displayAspectRatio']);
            }
            elseif (\array_key_exists('displayAspectRatio', $data) && $data['displayAspectRatio'] === null) {
                $object->setDisplayAspectRatio(null);
            }
            if (\array_key_exists('durationInSeconds', $data)) {
                $object->setDurationInSeconds($data['durationInSeconds']);
            }
            if (\array_key_exists('format', $data) && $data['format'] !== null) {
                $object->setFormat($data['format']);
            }
            elseif (\array_key_exists('format', $data) && $data['format'] === null) {
                $object->setFormat(null);
            }
            if (\array_key_exists('frameCount', $data) && $data['frameCount'] !== null) {
                $object->setFrameCount($data['frameCount']);
            }
            elseif (\array_key_exists('frameCount', $data) && $data['frameCount'] === null) {
                $object->setFrameCount(null);
            }
            if (\array_key_exists('frameRate', $data) && $data['frameRate'] !== null) {
                $object->setFrameRate($data['frameRate']);
            }
            elseif (\array_key_exists('frameRate', $data) && $data['frameRate'] === null) {
                $object->setFrameRate(null);
            }
            if (\array_key_exists('height', $data) && $data['height'] !== null) {
                $object->setHeight($data['height']);
            }
            elseif (\array_key_exists('height', $data) && $data['height'] === null) {
                $object->setHeight(null);
            }
            if (\array_key_exists('language', $data) && $data['language'] !== null) {
                $object->setLanguage($data['language']);
            }
            elseif (\array_key_exists('language', $data) && $data['language'] === null) {
                $object->setLanguage(null);
            }
            if (\array_key_exists('pixelAspectRatio', $data) && $data['pixelAspectRatio'] !== null) {
                $object->setPixelAspectRatio($data['pixelAspectRatio']);
            }
            elseif (\array_key_exists('pixelAspectRatio', $data) && $data['pixelAspectRatio'] === null) {
                $object->setPixelAspectRatio(null);
            }
            if (\array_key_exists('resolution', $data) && $data['resolution'] !== null) {
                $object->setResolution($data['resolution']);
            }
            elseif (\array_key_exists('resolution', $data) && $data['resolution'] === null) {
                $object->setResolution(null);
            }
            if (\array_key_exists('streamSize', $data) && $data['streamSize'] !== null) {
                $object->setStreamSize($data['streamSize']);
            }
            elseif (\array_key_exists('streamSize', $data) && $data['streamSize'] === null) {
                $object->setStreamSize(null);
            }
            if (\array_key_exists('width', $data) && $data['width'] !== null) {
                $object->setWidth($data['width']);
            }
            elseif (\array_key_exists('width', $data) && $data['width'] === null) {
                $object->setWidth(null);
            }
            if (\array_key_exists('rotation', $data) && $data['rotation'] !== null) {
                $object->setRotation($data['rotation']);
            }
            elseif (\array_key_exists('rotation', $data) && $data['rotation'] === null) {
                $object->setRotation(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('bitRate') && null !== $object->getBitRate()) {
                $data['bitRate'] = $object->getBitRate();
            }
            if ($object->isInitialized('codec') && null !== $object->getCodec()) {
                $data['codec'] = $object->getCodec();
            }
            if ($object->isInitialized('displayAspectRatio') && null !== $object->getDisplayAspectRatio()) {
                $data['displayAspectRatio'] = $object->getDisplayAspectRatio();
            }
            $data['durationInSeconds'] = $object->getDurationInSeconds();
            if ($object->isInitialized('format') && null !== $object->getFormat()) {
                $data['format'] = $object->getFormat();
            }
            if ($object->isInitialized('frameCount') && null !== $object->getFrameCount()) {
                $data['frameCount'] = $object->getFrameCount();
            }
            if ($object->isInitialized('frameRate') && null !== $object->getFrameRate()) {
                $data['frameRate'] = $object->getFrameRate();
            }
            if ($object->isInitialized('height') && null !== $object->getHeight()) {
                $data['height'] = $object->getHeight();
            }
            if ($object->isInitialized('language') && null !== $object->getLanguage()) {
                $data['language'] = $object->getLanguage();
            }
            if ($object->isInitialized('pixelAspectRatio') && null !== $object->getPixelAspectRatio()) {
                $data['pixelAspectRatio'] = $object->getPixelAspectRatio();
            }
            if ($object->isInitialized('resolution') && null !== $object->getResolution()) {
                $data['resolution'] = $object->getResolution();
            }
            if ($object->isInitialized('streamSize') && null !== $object->getStreamSize()) {
                $data['streamSize'] = $object->getStreamSize();
            }
            if ($object->isInitialized('width') && null !== $object->getWidth()) {
                $data['width'] = $object->getWidth();
            }
            if ($object->isInitialized('rotation') && null !== $object->getRotation()) {
                $data['rotation'] = $object->getRotation();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\VideoStream' => false];
        }
    }
} else {
    class VideoStreamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\VideoStream';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\VideoStream';
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
            $object = new \PicturePark\API\Model\VideoStream();
            if (\array_key_exists('durationInSeconds', $data) && \is_int($data['durationInSeconds'])) {
                $data['durationInSeconds'] = (double) $data['durationInSeconds'];
            }
            if (\array_key_exists('frameRate', $data) && \is_int($data['frameRate'])) {
                $data['frameRate'] = (double) $data['frameRate'];
            }
            if (\array_key_exists('pixelAspectRatio', $data) && \is_int($data['pixelAspectRatio'])) {
                $data['pixelAspectRatio'] = (double) $data['pixelAspectRatio'];
            }
            if (\array_key_exists('rotation', $data) && \is_int($data['rotation'])) {
                $data['rotation'] = (double) $data['rotation'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('bitRate', $data) && $data['bitRate'] !== null) {
                $object->setBitRate($data['bitRate']);
            }
            elseif (\array_key_exists('bitRate', $data) && $data['bitRate'] === null) {
                $object->setBitRate(null);
            }
            if (\array_key_exists('codec', $data) && $data['codec'] !== null) {
                $object->setCodec($data['codec']);
            }
            elseif (\array_key_exists('codec', $data) && $data['codec'] === null) {
                $object->setCodec(null);
            }
            if (\array_key_exists('displayAspectRatio', $data) && $data['displayAspectRatio'] !== null) {
                $object->setDisplayAspectRatio($data['displayAspectRatio']);
            }
            elseif (\array_key_exists('displayAspectRatio', $data) && $data['displayAspectRatio'] === null) {
                $object->setDisplayAspectRatio(null);
            }
            if (\array_key_exists('durationInSeconds', $data)) {
                $object->setDurationInSeconds($data['durationInSeconds']);
            }
            if (\array_key_exists('format', $data) && $data['format'] !== null) {
                $object->setFormat($data['format']);
            }
            elseif (\array_key_exists('format', $data) && $data['format'] === null) {
                $object->setFormat(null);
            }
            if (\array_key_exists('frameCount', $data) && $data['frameCount'] !== null) {
                $object->setFrameCount($data['frameCount']);
            }
            elseif (\array_key_exists('frameCount', $data) && $data['frameCount'] === null) {
                $object->setFrameCount(null);
            }
            if (\array_key_exists('frameRate', $data) && $data['frameRate'] !== null) {
                $object->setFrameRate($data['frameRate']);
            }
            elseif (\array_key_exists('frameRate', $data) && $data['frameRate'] === null) {
                $object->setFrameRate(null);
            }
            if (\array_key_exists('height', $data) && $data['height'] !== null) {
                $object->setHeight($data['height']);
            }
            elseif (\array_key_exists('height', $data) && $data['height'] === null) {
                $object->setHeight(null);
            }
            if (\array_key_exists('language', $data) && $data['language'] !== null) {
                $object->setLanguage($data['language']);
            }
            elseif (\array_key_exists('language', $data) && $data['language'] === null) {
                $object->setLanguage(null);
            }
            if (\array_key_exists('pixelAspectRatio', $data) && $data['pixelAspectRatio'] !== null) {
                $object->setPixelAspectRatio($data['pixelAspectRatio']);
            }
            elseif (\array_key_exists('pixelAspectRatio', $data) && $data['pixelAspectRatio'] === null) {
                $object->setPixelAspectRatio(null);
            }
            if (\array_key_exists('resolution', $data) && $data['resolution'] !== null) {
                $object->setResolution($data['resolution']);
            }
            elseif (\array_key_exists('resolution', $data) && $data['resolution'] === null) {
                $object->setResolution(null);
            }
            if (\array_key_exists('streamSize', $data) && $data['streamSize'] !== null) {
                $object->setStreamSize($data['streamSize']);
            }
            elseif (\array_key_exists('streamSize', $data) && $data['streamSize'] === null) {
                $object->setStreamSize(null);
            }
            if (\array_key_exists('width', $data) && $data['width'] !== null) {
                $object->setWidth($data['width']);
            }
            elseif (\array_key_exists('width', $data) && $data['width'] === null) {
                $object->setWidth(null);
            }
            if (\array_key_exists('rotation', $data) && $data['rotation'] !== null) {
                $object->setRotation($data['rotation']);
            }
            elseif (\array_key_exists('rotation', $data) && $data['rotation'] === null) {
                $object->setRotation(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('bitRate') && null !== $object->getBitRate()) {
                $data['bitRate'] = $object->getBitRate();
            }
            if ($object->isInitialized('codec') && null !== $object->getCodec()) {
                $data['codec'] = $object->getCodec();
            }
            if ($object->isInitialized('displayAspectRatio') && null !== $object->getDisplayAspectRatio()) {
                $data['displayAspectRatio'] = $object->getDisplayAspectRatio();
            }
            $data['durationInSeconds'] = $object->getDurationInSeconds();
            if ($object->isInitialized('format') && null !== $object->getFormat()) {
                $data['format'] = $object->getFormat();
            }
            if ($object->isInitialized('frameCount') && null !== $object->getFrameCount()) {
                $data['frameCount'] = $object->getFrameCount();
            }
            if ($object->isInitialized('frameRate') && null !== $object->getFrameRate()) {
                $data['frameRate'] = $object->getFrameRate();
            }
            if ($object->isInitialized('height') && null !== $object->getHeight()) {
                $data['height'] = $object->getHeight();
            }
            if ($object->isInitialized('language') && null !== $object->getLanguage()) {
                $data['language'] = $object->getLanguage();
            }
            if ($object->isInitialized('pixelAspectRatio') && null !== $object->getPixelAspectRatio()) {
                $data['pixelAspectRatio'] = $object->getPixelAspectRatio();
            }
            if ($object->isInitialized('resolution') && null !== $object->getResolution()) {
                $data['resolution'] = $object->getResolution();
            }
            if ($object->isInitialized('streamSize') && null !== $object->getStreamSize()) {
                $data['streamSize'] = $object->getStreamSize();
            }
            if ($object->isInitialized('width') && null !== $object->getWidth()) {
                $data['width'] = $object->getWidth();
            }
            if ($object->isInitialized('rotation') && null !== $object->getRotation()) {
                $data['rotation'] = $object->getRotation();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\VideoStream' => false];
        }
    }
}