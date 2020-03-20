<?php

namespace Jane\OpenApi3\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class VideoMetricsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\VideoMetrics';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\VideoMetrics';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\OpenApi3\Tests\Expected\Model\VideoMetrics();
        if (\array_key_exists('media_key', $data)) {
            $object->setMediaKey($data['media_key']);
        }
        if (\array_key_exists('view_count', $data)) {
            $object->setViewCount($data['view_count']);
        }
        if (\array_key_exists('playback_0_count', $data)) {
            $object->setPlayback0Count($data['playback_0_count']);
        }
        if (\array_key_exists('playback_25_count', $data)) {
            $object->setPlayback25Count($data['playback_25_count']);
        }
        if (\array_key_exists('playback_50_count', $data)) {
            $object->setPlayback50Count($data['playback_50_count']);
        }
        if (\array_key_exists('playback_75_count', $data)) {
            $object->setPlayback75Count($data['playback_75_count']);
        }
        if (\array_key_exists('playback_100_count', $data)) {
            $object->setPlayback100Count($data['playback_100_count']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMediaKey()) {
            $data['media_key'] = $object->getMediaKey();
        }
        if (null !== $object->getViewCount()) {
            $data['view_count'] = $object->getViewCount();
        }
        if (null !== $object->getPlayback0Count()) {
            $data['playback_0_count'] = $object->getPlayback0Count();
        }
        if (null !== $object->getPlayback25Count()) {
            $data['playback_25_count'] = $object->getPlayback25Count();
        }
        if (null !== $object->getPlayback50Count()) {
            $data['playback_50_count'] = $object->getPlayback50Count();
        }
        if (null !== $object->getPlayback75Count()) {
            $data['playback_75_count'] = $object->getPlayback75Count();
        }
        if (null !== $object->getPlayback100Count()) {
            $data['playback_100_count'] = $object->getPlayback100Count();
        }
        return $data;
    }
}