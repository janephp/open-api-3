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
    class InstallationTokenNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\InstallationToken';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\InstallationToken';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\InstallationToken();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\InstallationTokenConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('token', $data)) {
                $object->setToken($data['token']);
                unset($data['token']);
            }
            if (\array_key_exists('expires_at', $data)) {
                $object->setExpiresAt($data['expires_at']);
                unset($data['expires_at']);
            }
            if (\array_key_exists('permissions', $data)) {
                $object->setPermissions($this->denormalizer->denormalize($data['permissions'], 'Github\\Model\\InstallationTokenPermissions', 'json', $context));
                unset($data['permissions']);
            }
            if (\array_key_exists('repository_selection', $data)) {
                $object->setRepositorySelection($data['repository_selection']);
                unset($data['repository_selection']);
            }
            if (\array_key_exists('repositories', $data)) {
                $values = [];
                foreach ($data['repositories'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\Repository', 'json', $context);
                }
                $object->setRepositories($values);
                unset($data['repositories']);
            }
            if (\array_key_exists('single_file', $data)) {
                $object->setSingleFile($data['single_file']);
                unset($data['single_file']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('token') && null !== $object->getToken()) {
                $data['token'] = $object->getToken();
            }
            if ($object->isInitialized('expiresAt') && null !== $object->getExpiresAt()) {
                $data['expires_at'] = $object->getExpiresAt();
            }
            if ($object->isInitialized('permissions') && null !== $object->getPermissions()) {
                $data['permissions'] = $this->normalizer->normalize($object->getPermissions(), 'json', $context);
            }
            if ($object->isInitialized('repositorySelection') && null !== $object->getRepositorySelection()) {
                $data['repository_selection'] = $object->getRepositorySelection();
            }
            if ($object->isInitialized('repositories') && null !== $object->getRepositories()) {
                $values = [];
                foreach ($object->getRepositories() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['repositories'] = $values;
            }
            if ($object->isInitialized('singleFile') && null !== $object->getSingleFile()) {
                $data['single_file'] = $object->getSingleFile();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\InstallationTokenConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\InstallationToken' => false];
        }
    }
} else {
    class InstallationTokenNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\InstallationToken';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\InstallationToken';
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
            $object = new \Github\Model\InstallationToken();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\InstallationTokenConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('token', $data)) {
                $object->setToken($data['token']);
                unset($data['token']);
            }
            if (\array_key_exists('expires_at', $data)) {
                $object->setExpiresAt($data['expires_at']);
                unset($data['expires_at']);
            }
            if (\array_key_exists('permissions', $data)) {
                $object->setPermissions($this->denormalizer->denormalize($data['permissions'], 'Github\\Model\\InstallationTokenPermissions', 'json', $context));
                unset($data['permissions']);
            }
            if (\array_key_exists('repository_selection', $data)) {
                $object->setRepositorySelection($data['repository_selection']);
                unset($data['repository_selection']);
            }
            if (\array_key_exists('repositories', $data)) {
                $values = [];
                foreach ($data['repositories'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\Repository', 'json', $context);
                }
                $object->setRepositories($values);
                unset($data['repositories']);
            }
            if (\array_key_exists('single_file', $data)) {
                $object->setSingleFile($data['single_file']);
                unset($data['single_file']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('token') && null !== $object->getToken()) {
                $data['token'] = $object->getToken();
            }
            if ($object->isInitialized('expiresAt') && null !== $object->getExpiresAt()) {
                $data['expires_at'] = $object->getExpiresAt();
            }
            if ($object->isInitialized('permissions') && null !== $object->getPermissions()) {
                $data['permissions'] = $this->normalizer->normalize($object->getPermissions(), 'json', $context);
            }
            if ($object->isInitialized('repositorySelection') && null !== $object->getRepositorySelection()) {
                $data['repository_selection'] = $object->getRepositorySelection();
            }
            if ($object->isInitialized('repositories') && null !== $object->getRepositories()) {
                $values = [];
                foreach ($object->getRepositories() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['repositories'] = $values;
            }
            if ($object->isInitialized('singleFile') && null !== $object->getSingleFile()) {
                $data['single_file'] = $object->getSingleFile();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\InstallationTokenConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\InstallationToken' => false];
        }
    }
}