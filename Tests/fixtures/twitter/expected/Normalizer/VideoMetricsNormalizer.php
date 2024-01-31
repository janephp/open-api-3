<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class VideoMetricsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\VideoMetrics';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\VideoMetrics';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\VideoMetrics();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('media_key', $data)) {
                $object->setMediaKey($data['media_key']);
                unset($data['media_key']);
            }
            if (\array_key_exists('view_count', $data)) {
                $object->setViewCount($data['view_count']);
                unset($data['view_count']);
            }
            if (\array_key_exists('playback_0_count', $data)) {
                $object->setPlayback0Count($data['playback_0_count']);
                unset($data['playback_0_count']);
            }
            if (\array_key_exists('playback_25_count', $data)) {
                $object->setPlayback25Count($data['playback_25_count']);
                unset($data['playback_25_count']);
            }
            if (\array_key_exists('playback_50_count', $data)) {
                $object->setPlayback50Count($data['playback_50_count']);
                unset($data['playback_50_count']);
            }
            if (\array_key_exists('playback_75_count', $data)) {
                $object->setPlayback75Count($data['playback_75_count']);
                unset($data['playback_75_count']);
            }
            if (\array_key_exists('playback_100_count', $data)) {
                $object->setPlayback100Count($data['playback_100_count']);
                unset($data['playback_100_count']);
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
            $data['media_key'] = $object->getMediaKey();
            $data['view_count'] = $object->getViewCount();
            if ($object->isInitialized('playback0Count') && null !== $object->getPlayback0Count()) {
                $data['playback_0_count'] = $object->getPlayback0Count();
            }
            if ($object->isInitialized('playback25Count') && null !== $object->getPlayback25Count()) {
                $data['playback_25_count'] = $object->getPlayback25Count();
            }
            if ($object->isInitialized('playback50Count') && null !== $object->getPlayback50Count()) {
                $data['playback_50_count'] = $object->getPlayback50Count();
            }
            if ($object->isInitialized('playback75Count') && null !== $object->getPlayback75Count()) {
                $data['playback_75_count'] = $object->getPlayback75Count();
            }
            if ($object->isInitialized('playback100Count') && null !== $object->getPlayback100Count()) {
                $data['playback_100_count'] = $object->getPlayback100Count();
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
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\VideoMetrics' => false];
        }
    }
} else {
    class VideoMetricsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\VideoMetrics';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\VideoMetrics';
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
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\VideoMetrics();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('media_key', $data)) {
                $object->setMediaKey($data['media_key']);
                unset($data['media_key']);
            }
            if (\array_key_exists('view_count', $data)) {
                $object->setViewCount($data['view_count']);
                unset($data['view_count']);
            }
            if (\array_key_exists('playback_0_count', $data)) {
                $object->setPlayback0Count($data['playback_0_count']);
                unset($data['playback_0_count']);
            }
            if (\array_key_exists('playback_25_count', $data)) {
                $object->setPlayback25Count($data['playback_25_count']);
                unset($data['playback_25_count']);
            }
            if (\array_key_exists('playback_50_count', $data)) {
                $object->setPlayback50Count($data['playback_50_count']);
                unset($data['playback_50_count']);
            }
            if (\array_key_exists('playback_75_count', $data)) {
                $object->setPlayback75Count($data['playback_75_count']);
                unset($data['playback_75_count']);
            }
            if (\array_key_exists('playback_100_count', $data)) {
                $object->setPlayback100Count($data['playback_100_count']);
                unset($data['playback_100_count']);
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
            $data['media_key'] = $object->getMediaKey();
            $data['view_count'] = $object->getViewCount();
            if ($object->isInitialized('playback0Count') && null !== $object->getPlayback0Count()) {
                $data['playback_0_count'] = $object->getPlayback0Count();
            }
            if ($object->isInitialized('playback25Count') && null !== $object->getPlayback25Count()) {
                $data['playback_25_count'] = $object->getPlayback25Count();
            }
            if ($object->isInitialized('playback50Count') && null !== $object->getPlayback50Count()) {
                $data['playback_50_count'] = $object->getPlayback50Count();
            }
            if ($object->isInitialized('playback75Count') && null !== $object->getPlayback75Count()) {
                $data['playback_75_count'] = $object->getPlayback75Count();
            }
            if ($object->isInitialized('playback100Count') && null !== $object->getPlayback100Count()) {
                $data['playback_100_count'] = $object->getPlayback100Count();
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
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\VideoMetrics' => false];
        }
    }
}