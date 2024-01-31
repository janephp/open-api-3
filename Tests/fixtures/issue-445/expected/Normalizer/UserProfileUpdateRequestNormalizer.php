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
    class UserProfileUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\UserProfileUpdateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\UserProfileUpdateRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\UserProfileUpdateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('emailAddress', $data) && $data['emailAddress'] !== null) {
                $object->setEmailAddress($data['emailAddress']);
            }
            elseif (\array_key_exists('emailAddress', $data) && $data['emailAddress'] === null) {
                $object->setEmailAddress(null);
            }
            if (\array_key_exists('firstName', $data) && $data['firstName'] !== null) {
                $object->setFirstName($data['firstName']);
            }
            elseif (\array_key_exists('firstName', $data) && $data['firstName'] === null) {
                $object->setFirstName(null);
            }
            if (\array_key_exists('lastName', $data) && $data['lastName'] !== null) {
                $object->setLastName($data['lastName']);
            }
            elseif (\array_key_exists('lastName', $data) && $data['lastName'] === null) {
                $object->setLastName(null);
            }
            if (\array_key_exists('languageCode', $data) && $data['languageCode'] !== null) {
                $object->setLanguageCode($data['languageCode']);
            }
            elseif (\array_key_exists('languageCode', $data) && $data['languageCode'] === null) {
                $object->setLanguageCode(null);
            }
            if (\array_key_exists('address', $data) && $data['address'] !== null) {
                $object->setAddress($data['address']);
            }
            elseif (\array_key_exists('address', $data) && $data['address'] === null) {
                $object->setAddress(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('emailAddress') && null !== $object->getEmailAddress()) {
                $data['emailAddress'] = $object->getEmailAddress();
            }
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['firstName'] = $object->getFirstName();
            }
            if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
                $data['lastName'] = $object->getLastName();
            }
            if ($object->isInitialized('languageCode') && null !== $object->getLanguageCode()) {
                $data['languageCode'] = $object->getLanguageCode();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $object->getAddress();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\UserProfileUpdateRequest' => false];
        }
    }
} else {
    class UserProfileUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\UserProfileUpdateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\UserProfileUpdateRequest';
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
            $object = new \PicturePark\API\Model\UserProfileUpdateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('emailAddress', $data) && $data['emailAddress'] !== null) {
                $object->setEmailAddress($data['emailAddress']);
            }
            elseif (\array_key_exists('emailAddress', $data) && $data['emailAddress'] === null) {
                $object->setEmailAddress(null);
            }
            if (\array_key_exists('firstName', $data) && $data['firstName'] !== null) {
                $object->setFirstName($data['firstName']);
            }
            elseif (\array_key_exists('firstName', $data) && $data['firstName'] === null) {
                $object->setFirstName(null);
            }
            if (\array_key_exists('lastName', $data) && $data['lastName'] !== null) {
                $object->setLastName($data['lastName']);
            }
            elseif (\array_key_exists('lastName', $data) && $data['lastName'] === null) {
                $object->setLastName(null);
            }
            if (\array_key_exists('languageCode', $data) && $data['languageCode'] !== null) {
                $object->setLanguageCode($data['languageCode']);
            }
            elseif (\array_key_exists('languageCode', $data) && $data['languageCode'] === null) {
                $object->setLanguageCode(null);
            }
            if (\array_key_exists('address', $data) && $data['address'] !== null) {
                $object->setAddress($data['address']);
            }
            elseif (\array_key_exists('address', $data) && $data['address'] === null) {
                $object->setAddress(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('emailAddress') && null !== $object->getEmailAddress()) {
                $data['emailAddress'] = $object->getEmailAddress();
            }
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['firstName'] = $object->getFirstName();
            }
            if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
                $data['lastName'] = $object->getLastName();
            }
            if ($object->isInitialized('languageCode') && null !== $object->getLanguageCode()) {
                $data['languageCode'] = $object->getLanguageCode();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $object->getAddress();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\UserProfileUpdateRequest' => false];
        }
    }
}