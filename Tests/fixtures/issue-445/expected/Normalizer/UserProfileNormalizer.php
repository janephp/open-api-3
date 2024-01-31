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
    class UserProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\UserProfile';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\UserProfile';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\UserProfile();
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
            if (\array_key_exists('authorizationState', $data)) {
                $object->setAuthorizationState($data['authorizationState']);
            }
            if (\array_key_exists('isLocked', $data)) {
                $object->setIsLocked($data['isLocked']);
            }
            if (\array_key_exists('userRights', $data) && $data['userRights'] !== null) {
                $values = [];
                foreach ($data['userRights'] as $value) {
                    $values[] = $value;
                }
                $object->setUserRights($values);
            }
            elseif (\array_key_exists('userRights', $data) && $data['userRights'] === null) {
                $object->setUserRights(null);
            }
            if (\array_key_exists('userRoleIds', $data) && $data['userRoleIds'] !== null) {
                $values_1 = [];
                foreach ($data['userRoleIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setUserRoleIds($values_1);
            }
            elseif (\array_key_exists('userRoleIds', $data) && $data['userRoleIds'] === null) {
                $object->setUserRoleIds(null);
            }
            if (\array_key_exists('termsConsentExpired', $data)) {
                $object->setTermsConsentExpired($data['termsConsentExpired']);
            }
            if (\array_key_exists('systemUserRoles', $data) && $data['systemUserRoles'] !== null) {
                $values_2 = [];
                foreach ($data['systemUserRoles'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setSystemUserRoles($values_2);
            }
            elseif (\array_key_exists('systemUserRoles', $data) && $data['systemUserRoles'] === null) {
                $object->setSystemUserRoles(null);
            }
            if (\array_key_exists('isDeveloper', $data)) {
                $object->setIsDeveloper($data['isDeveloper']);
            }
            if (\array_key_exists('isFederated', $data)) {
                $object->setIsFederated($data['isFederated']);
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
            $data['authorizationState'] = $object->getAuthorizationState();
            $data['isLocked'] = $object->getIsLocked();
            if ($object->isInitialized('userRights') && null !== $object->getUserRights()) {
                $values = [];
                foreach ($object->getUserRights() as $value) {
                    $values[] = $value;
                }
                $data['userRights'] = $values;
            }
            if ($object->isInitialized('userRoleIds') && null !== $object->getUserRoleIds()) {
                $values_1 = [];
                foreach ($object->getUserRoleIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['userRoleIds'] = $values_1;
            }
            $data['termsConsentExpired'] = $object->getTermsConsentExpired();
            if ($object->isInitialized('systemUserRoles') && null !== $object->getSystemUserRoles()) {
                $values_2 = [];
                foreach ($object->getSystemUserRoles() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['systemUserRoles'] = $values_2;
            }
            $data['isDeveloper'] = $object->getIsDeveloper();
            $data['isFederated'] = $object->getIsFederated();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\UserProfile' => false];
        }
    }
} else {
    class UserProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\UserProfile';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\UserProfile';
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
            $object = new \PicturePark\API\Model\UserProfile();
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
            if (\array_key_exists('authorizationState', $data)) {
                $object->setAuthorizationState($data['authorizationState']);
            }
            if (\array_key_exists('isLocked', $data)) {
                $object->setIsLocked($data['isLocked']);
            }
            if (\array_key_exists('userRights', $data) && $data['userRights'] !== null) {
                $values = [];
                foreach ($data['userRights'] as $value) {
                    $values[] = $value;
                }
                $object->setUserRights($values);
            }
            elseif (\array_key_exists('userRights', $data) && $data['userRights'] === null) {
                $object->setUserRights(null);
            }
            if (\array_key_exists('userRoleIds', $data) && $data['userRoleIds'] !== null) {
                $values_1 = [];
                foreach ($data['userRoleIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setUserRoleIds($values_1);
            }
            elseif (\array_key_exists('userRoleIds', $data) && $data['userRoleIds'] === null) {
                $object->setUserRoleIds(null);
            }
            if (\array_key_exists('termsConsentExpired', $data)) {
                $object->setTermsConsentExpired($data['termsConsentExpired']);
            }
            if (\array_key_exists('systemUserRoles', $data) && $data['systemUserRoles'] !== null) {
                $values_2 = [];
                foreach ($data['systemUserRoles'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setSystemUserRoles($values_2);
            }
            elseif (\array_key_exists('systemUserRoles', $data) && $data['systemUserRoles'] === null) {
                $object->setSystemUserRoles(null);
            }
            if (\array_key_exists('isDeveloper', $data)) {
                $object->setIsDeveloper($data['isDeveloper']);
            }
            if (\array_key_exists('isFederated', $data)) {
                $object->setIsFederated($data['isFederated']);
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
            $data['authorizationState'] = $object->getAuthorizationState();
            $data['isLocked'] = $object->getIsLocked();
            if ($object->isInitialized('userRights') && null !== $object->getUserRights()) {
                $values = [];
                foreach ($object->getUserRights() as $value) {
                    $values[] = $value;
                }
                $data['userRights'] = $values;
            }
            if ($object->isInitialized('userRoleIds') && null !== $object->getUserRoleIds()) {
                $values_1 = [];
                foreach ($object->getUserRoleIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['userRoleIds'] = $values_1;
            }
            $data['termsConsentExpired'] = $object->getTermsConsentExpired();
            if ($object->isInitialized('systemUserRoles') && null !== $object->getSystemUserRoles()) {
                $values_2 = [];
                foreach ($object->getSystemUserRoles() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['systemUserRoles'] = $values_2;
            }
            $data['isDeveloper'] = $object->getIsDeveloper();
            $data['isFederated'] = $object->getIsFederated();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\UserProfile' => false];
        }
    }
}