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
class TestGetBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TestGetBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TestGetBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\OpenApi3\Tests\Expected\Model\TestGetBody();
        if (\array_key_exists('foo', $data)) {
            $object->setFoo($data['foo']);
        }
        if (\array_key_exists('Bar', $data)) {
            $object->setBar($this->denormalizer->denormalize($data['Bar'], 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Bar', 'json', $context));
        }
        if (\array_key_exists('Baz', $data)) {
            $object->setBaz($this->denormalizer->denormalize($data['Baz'], 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TestGetBodyBaz', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFoo()) {
            $data['foo'] = $object->getFoo();
        }
        if (null !== $object->getBar()) {
            $data['Bar'] = $this->normalizer->normalize($object->getBar(), 'json', $context);
        }
        if (null !== $object->getBaz()) {
            $data['Baz'] = $this->normalizer->normalize($object->getBaz(), 'json', $context);
        }
        return $data;
    }
}