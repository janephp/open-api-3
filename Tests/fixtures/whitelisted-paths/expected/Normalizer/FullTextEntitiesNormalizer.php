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
class FullTextEntitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntities';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntities';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\OpenApi3\Tests\Expected\Model\FullTextEntities();
        if (\array_key_exists('urls', $data)) {
            $values = array();
            foreach ($data['urls'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jane\\OpenApi3\\Tests\\Expected\\Model\\UrlEntity', 'json', $context);
            }
            $object->setUrls($values);
        }
        if (\array_key_exists('hashtags', $data)) {
            $values_1 = array();
            foreach ($data['hashtags'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Jane\\OpenApi3\\Tests\\Expected\\Model\\HashtagEntity', 'json', $context);
            }
            $object->setHashtags($values_1);
        }
        if (\array_key_exists('mentions', $data)) {
            $values_2 = array();
            foreach ($data['mentions'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Jane\\OpenApi3\\Tests\\Expected\\Model\\MentionEntity', 'json', $context);
            }
            $object->setMentions($values_2);
        }
        if (\array_key_exists('cashtags', $data)) {
            $values_3 = array();
            foreach ($data['cashtags'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Jane\\OpenApi3\\Tests\\Expected\\Model\\CashtagEntity', 'json', $context);
            }
            $object->setCashtags($values_3);
        }
        if (\array_key_exists('annotations', $data)) {
            $values_4 = array();
            foreach ($data['annotations'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Jane\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntitiesAnnotationsItem', 'json', $context);
            }
            $object->setAnnotations($values_4);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUrls()) {
            $values = array();
            foreach ($object->getUrls() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['urls'] = $values;
        }
        if (null !== $object->getHashtags()) {
            $values_1 = array();
            foreach ($object->getHashtags() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['hashtags'] = $values_1;
        }
        if (null !== $object->getMentions()) {
            $values_2 = array();
            foreach ($object->getMentions() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['mentions'] = $values_2;
        }
        if (null !== $object->getCashtags()) {
            $values_3 = array();
            foreach ($object->getCashtags() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['cashtags'] = $values_3;
        }
        if (null !== $object->getAnnotations()) {
            $values_4 = array();
            foreach ($object->getAnnotations() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['annotations'] = $values_4;
        }
        return $data;
    }
}