<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class TeamsTeamIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\TeamsTeamIdPatchBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\TeamsTeamIdPatchBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\TeamsTeamIdPatchBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\TeamsTeamIdPatchBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('privacy', $data)) {
                $object->setPrivacy($data['privacy']);
                unset($data['privacy']);
            }
            if (\array_key_exists('permission', $data)) {
                $object->setPermission($data['permission']);
                unset($data['permission']);
            }
            if (\array_key_exists('parent_team_id', $data) && $data['parent_team_id'] !== null) {
                $object->setParentTeamId($data['parent_team_id']);
                unset($data['parent_team_id']);
            }
            elseif (\array_key_exists('parent_team_id', $data) && $data['parent_team_id'] === null) {
                $object->setParentTeamId(null);
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
            $data['name'] = $object->getName();
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('privacy') && null !== $object->getPrivacy()) {
                $data['privacy'] = $object->getPrivacy();
            }
            if ($object->isInitialized('permission') && null !== $object->getPermission()) {
                $data['permission'] = $object->getPermission();
            }
            if ($object->isInitialized('parentTeamId') && null !== $object->getParentTeamId()) {
                $data['parent_team_id'] = $object->getParentTeamId();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\TeamsTeamIdPatchBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\TeamsTeamIdPatchBody' => false];
        }
    }
} else {
    class TeamsTeamIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\TeamsTeamIdPatchBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\TeamsTeamIdPatchBody';
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
            $object = new \Github\Model\TeamsTeamIdPatchBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\TeamsTeamIdPatchBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('privacy', $data)) {
                $object->setPrivacy($data['privacy']);
                unset($data['privacy']);
            }
            if (\array_key_exists('permission', $data)) {
                $object->setPermission($data['permission']);
                unset($data['permission']);
            }
            if (\array_key_exists('parent_team_id', $data) && $data['parent_team_id'] !== null) {
                $object->setParentTeamId($data['parent_team_id']);
                unset($data['parent_team_id']);
            }
            elseif (\array_key_exists('parent_team_id', $data) && $data['parent_team_id'] === null) {
                $object->setParentTeamId(null);
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
            $data['name'] = $object->getName();
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('privacy') && null !== $object->getPrivacy()) {
                $data['privacy'] = $object->getPrivacy();
            }
            if ($object->isInitialized('permission') && null !== $object->getPermission()) {
                $data['permission'] = $object->getPermission();
            }
            if ($object->isInitialized('parentTeamId') && null !== $object->getParentTeamId()) {
                $data['parent_team_id'] = $object->getParentTeamId();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\TeamsTeamIdPatchBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\TeamsTeamIdPatchBody' => false];
        }
    }
}