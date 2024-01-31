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
    class ShareDataBasicNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ShareDataBasic';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ShareDataBasic';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
                unset($data['url']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('mailRecipients', $data)) {
                $values = [];
                foreach ($data['mailRecipients'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\MailRecipient', 'json', $context);
                }
                $object->setMailRecipients($values);
                unset($data['mailRecipients']);
            }
            if (\array_key_exists('internalRecipients', $data)) {
                $values_1 = [];
                foreach ($data['internalRecipients'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\InternalRecipient', 'json', $context);
                }
                $object->setInternalRecipients($values_1);
                unset($data['internalRecipients']);
            }
            if (\array_key_exists('languageCode', $data) && $data['languageCode'] !== null) {
                $object->setLanguageCode($data['languageCode']);
                unset($data['languageCode']);
            }
            elseif (\array_key_exists('languageCode', $data) && $data['languageCode'] === null) {
                $object->setLanguageCode(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['url'] = $object->getUrl();
            $data['kind'] = $object->getKind();
            $values = [];
            foreach ($object->getMailRecipients() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['mailRecipients'] = $values;
            $values_1 = [];
            foreach ($object->getInternalRecipients() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['internalRecipients'] = $values_1;
            if ($object->isInitialized('languageCode') && null !== $object->getLanguageCode()) {
                $data['languageCode'] = $object->getLanguageCode();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ShareDataBasic' => false];
        }
    }
} else {
    class ShareDataBasicNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ShareDataBasic';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ShareDataBasic';
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
            $object = new \PicturePark\API\Model\ShareDataBasic();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('mailRecipients', $data)) {
                $values = [];
                foreach ($data['mailRecipients'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\MailRecipient', 'json', $context);
                }
                $object->setMailRecipients($values);
                unset($data['mailRecipients']);
            }
            if (\array_key_exists('internalRecipients', $data)) {
                $values_1 = [];
                foreach ($data['internalRecipients'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\InternalRecipient', 'json', $context);
                }
                $object->setInternalRecipients($values_1);
                unset($data['internalRecipients']);
            }
            if (\array_key_exists('languageCode', $data) && $data['languageCode'] !== null) {
                $object->setLanguageCode($data['languageCode']);
                unset($data['languageCode']);
            }
            elseif (\array_key_exists('languageCode', $data) && $data['languageCode'] === null) {
                $object->setLanguageCode(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $data['url'] = $object->getUrl();
            $data['kind'] = $object->getKind();
            $values = [];
            foreach ($object->getMailRecipients() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['mailRecipients'] = $values;
            $values_1 = [];
            foreach ($object->getInternalRecipients() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['internalRecipients'] = $values_1;
            if ($object->isInitialized('languageCode') && null !== $object->getLanguageCode()) {
                $data['languageCode'] = $object->getLanguageCode();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ShareDataBasic' => false];
        }
    }
}