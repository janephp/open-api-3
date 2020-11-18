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
class ShareDataBasicNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\ShareDataBasic';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ShareDataBasic';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\ShareDataBasic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('mailRecipients', $data)) {
            $values = array();
            foreach ($data['mailRecipients'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\MailRecipient', 'json', $context);
            }
            $object->setMailRecipients($values);
        }
        if (\array_key_exists('internalRecipients', $data)) {
            $values_1 = array();
            foreach ($data['internalRecipients'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\InternalRecipient', 'json', $context);
            }
            $object->setInternalRecipients($values_1);
        }
        if (\array_key_exists('languageCode', $data) && $data['languageCode'] !== null) {
            $object->setLanguageCode($data['languageCode']);
        }
        elseif (\array_key_exists('languageCode', $data) && $data['languageCode'] === null) {
            $object->setLanguageCode(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['url'] = $object->getUrl();
        $data['kind'] = $object->getKind();
        $values = array();
        foreach ($object->getMailRecipients() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['mailRecipients'] = $values;
        $values_1 = array();
        foreach ($object->getInternalRecipients() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['internalRecipients'] = $values_1;
        if (null !== $object->getLanguageCode()) {
            $data['languageCode'] = $object->getLanguageCode();
        }
        return $data;
    }
}