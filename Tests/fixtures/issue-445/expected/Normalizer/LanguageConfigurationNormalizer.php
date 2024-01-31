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
    class LanguageConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\LanguageConfiguration';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\LanguageConfiguration';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\LanguageConfiguration();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('systemLanguages', $data) && $data['systemLanguages'] !== null) {
                $values = [];
                foreach ($data['systemLanguages'] as $value) {
                    $values[] = $value;
                }
                $object->setSystemLanguages($values);
            }
            elseif (\array_key_exists('systemLanguages', $data) && $data['systemLanguages'] === null) {
                $object->setSystemLanguages(null);
            }
            if (\array_key_exists('metadataLanguages', $data) && $data['metadataLanguages'] !== null) {
                $values_1 = [];
                foreach ($data['metadataLanguages'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setMetadataLanguages($values_1);
            }
            elseif (\array_key_exists('metadataLanguages', $data) && $data['metadataLanguages'] === null) {
                $object->setMetadataLanguages(null);
            }
            if (\array_key_exists('defaultLanguage', $data) && $data['defaultLanguage'] !== null) {
                $object->setDefaultLanguage($data['defaultLanguage']);
            }
            elseif (\array_key_exists('defaultLanguage', $data) && $data['defaultLanguage'] === null) {
                $object->setDefaultLanguage(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('systemLanguages') && null !== $object->getSystemLanguages()) {
                $values = [];
                foreach ($object->getSystemLanguages() as $value) {
                    $values[] = $value;
                }
                $data['systemLanguages'] = $values;
            }
            if ($object->isInitialized('metadataLanguages') && null !== $object->getMetadataLanguages()) {
                $values_1 = [];
                foreach ($object->getMetadataLanguages() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['metadataLanguages'] = $values_1;
            }
            if ($object->isInitialized('defaultLanguage') && null !== $object->getDefaultLanguage()) {
                $data['defaultLanguage'] = $object->getDefaultLanguage();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\LanguageConfiguration' => false];
        }
    }
} else {
    class LanguageConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\LanguageConfiguration';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\LanguageConfiguration';
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
            $object = new \PicturePark\API\Model\LanguageConfiguration();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('systemLanguages', $data) && $data['systemLanguages'] !== null) {
                $values = [];
                foreach ($data['systemLanguages'] as $value) {
                    $values[] = $value;
                }
                $object->setSystemLanguages($values);
            }
            elseif (\array_key_exists('systemLanguages', $data) && $data['systemLanguages'] === null) {
                $object->setSystemLanguages(null);
            }
            if (\array_key_exists('metadataLanguages', $data) && $data['metadataLanguages'] !== null) {
                $values_1 = [];
                foreach ($data['metadataLanguages'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setMetadataLanguages($values_1);
            }
            elseif (\array_key_exists('metadataLanguages', $data) && $data['metadataLanguages'] === null) {
                $object->setMetadataLanguages(null);
            }
            if (\array_key_exists('defaultLanguage', $data) && $data['defaultLanguage'] !== null) {
                $object->setDefaultLanguage($data['defaultLanguage']);
            }
            elseif (\array_key_exists('defaultLanguage', $data) && $data['defaultLanguage'] === null) {
                $object->setDefaultLanguage(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('systemLanguages') && null !== $object->getSystemLanguages()) {
                $values = [];
                foreach ($object->getSystemLanguages() as $value) {
                    $values[] = $value;
                }
                $data['systemLanguages'] = $values;
            }
            if ($object->isInitialized('metadataLanguages') && null !== $object->getMetadataLanguages()) {
                $values_1 = [];
                foreach ($object->getMetadataLanguages() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['metadataLanguages'] = $values_1;
            }
            if ($object->isInitialized('defaultLanguage') && null !== $object->getDefaultLanguage()) {
                $data['defaultLanguage'] = $object->getDefaultLanguage();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\LanguageConfiguration' => false];
        }
    }
}