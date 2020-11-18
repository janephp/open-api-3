<?php

namespace PicturePark\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BusinessRuleConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\BusinessRuleConfiguration';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleConfiguration';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessRuleConfiguration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('disableRuleEngine', $data)) {
            $object->setDisableRuleEngine($data['disableRuleEngine']);
        }
        if (\array_key_exists('rules', $data) && $data['rules'] !== null) {
            $values = array();
            foreach ($data['rules'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\BusinessRule', 'json', $context);
            }
            $object->setRules($values);
        }
        elseif (\array_key_exists('rules', $data) && $data['rules'] === null) {
            $object->setRules(null);
        }
        if (\array_key_exists('caches', $data) && $data['caches'] !== null) {
            $values_1 = array();
            foreach ($data['caches'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\NamedCacheConfigurationBase', 'json', $context);
            }
            $object->setCaches($values_1);
        }
        elseif (\array_key_exists('caches', $data) && $data['caches'] === null) {
            $object->setCaches(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['disableRuleEngine'] = $object->getDisableRuleEngine();
        if (null !== $object->getRules()) {
            $values = array();
            foreach ($object->getRules() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['rules'] = $values;
        }
        if (null !== $object->getCaches()) {
            $values_1 = array();
            foreach ($object->getCaches() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['caches'] = $values_1;
        }
        return $data;
    }
}