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
    class AuthenticationTokenNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\AuthenticationToken';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\AuthenticationToken';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\AuthenticationToken();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\AuthenticationTokenConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('token', $data)) {
                $object->setToken($data['token']);
                unset($data['token']);
            }
            if (\array_key_exists('expires_at', $data)) {
                $object->setExpiresAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['expires_at']));
                unset($data['expires_at']);
            }
            if (\array_key_exists('permissions', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['permissions'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setPermissions($values);
                unset($data['permissions']);
            }
            if (\array_key_exists('repositories', $data)) {
                $values_1 = [];
                foreach ($data['repositories'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\Repository', 'json', $context);
                }
                $object->setRepositories($values_1);
                unset($data['repositories']);
            }
            if (\array_key_exists('single_file', $data) && $data['single_file'] !== null) {
                $object->setSingleFile($data['single_file']);
                unset($data['single_file']);
            }
            elseif (\array_key_exists('single_file', $data) && $data['single_file'] === null) {
                $object->setSingleFile(null);
            }
            if (\array_key_exists('repository_selection', $data)) {
                $object->setRepositorySelection($data['repository_selection']);
                unset($data['repository_selection']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['token'] = $object->getToken();
            $data['expires_at'] = $object->getExpiresAt()->format('Y-m-d\\TH:i:sP');
            if ($object->isInitialized('permissions') && null !== $object->getPermissions()) {
                $values = [];
                foreach ($object->getPermissions() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['permissions'] = $values;
            }
            if ($object->isInitialized('repositories') && null !== $object->getRepositories()) {
                $values_1 = [];
                foreach ($object->getRepositories() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['repositories'] = $values_1;
            }
            if ($object->isInitialized('singleFile') && null !== $object->getSingleFile()) {
                $data['single_file'] = $object->getSingleFile();
            }
            if ($object->isInitialized('repositorySelection') && null !== $object->getRepositorySelection()) {
                $data['repository_selection'] = $object->getRepositorySelection();
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\AuthenticationTokenConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\AuthenticationToken' => false];
        }
    }
} else {
    class AuthenticationTokenNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\AuthenticationToken';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\AuthenticationToken';
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
            $object = new \Github\Model\AuthenticationToken();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\AuthenticationTokenConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('token', $data)) {
                $object->setToken($data['token']);
                unset($data['token']);
            }
            if (\array_key_exists('expires_at', $data)) {
                $object->setExpiresAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['expires_at']));
                unset($data['expires_at']);
            }
            if (\array_key_exists('permissions', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['permissions'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setPermissions($values);
                unset($data['permissions']);
            }
            if (\array_key_exists('repositories', $data)) {
                $values_1 = [];
                foreach ($data['repositories'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\Repository', 'json', $context);
                }
                $object->setRepositories($values_1);
                unset($data['repositories']);
            }
            if (\array_key_exists('single_file', $data) && $data['single_file'] !== null) {
                $object->setSingleFile($data['single_file']);
                unset($data['single_file']);
            }
            elseif (\array_key_exists('single_file', $data) && $data['single_file'] === null) {
                $object->setSingleFile(null);
            }
            if (\array_key_exists('repository_selection', $data)) {
                $object->setRepositorySelection($data['repository_selection']);
                unset($data['repository_selection']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
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
            $data['token'] = $object->getToken();
            $data['expires_at'] = $object->getExpiresAt()->format('Y-m-d\\TH:i:sP');
            if ($object->isInitialized('permissions') && null !== $object->getPermissions()) {
                $values = [];
                foreach ($object->getPermissions() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['permissions'] = $values;
            }
            if ($object->isInitialized('repositories') && null !== $object->getRepositories()) {
                $values_1 = [];
                foreach ($object->getRepositories() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['repositories'] = $values_1;
            }
            if ($object->isInitialized('singleFile') && null !== $object->getSingleFile()) {
                $data['single_file'] = $object->getSingleFile();
            }
            if ($object->isInitialized('repositorySelection') && null !== $object->getRepositorySelection()) {
                $data['repository_selection'] = $object->getRepositorySelection();
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\AuthenticationTokenConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\AuthenticationToken' => false];
        }
    }
}