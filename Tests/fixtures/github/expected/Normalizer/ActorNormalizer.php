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
    class ActorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\Actor';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\Actor';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\Actor();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ActorConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('login', $data)) {
                $object->setLogin($data['login']);
                unset($data['login']);
            }
            if (\array_key_exists('display_login', $data)) {
                $object->setDisplayLogin($data['display_login']);
                unset($data['display_login']);
            }
            if (\array_key_exists('gravatar_id', $data) && $data['gravatar_id'] !== null) {
                $object->setGravatarId($data['gravatar_id']);
                unset($data['gravatar_id']);
            }
            elseif (\array_key_exists('gravatar_id', $data) && $data['gravatar_id'] === null) {
                $object->setGravatarId(null);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('avatar_url', $data)) {
                $object->setAvatarUrl($data['avatar_url']);
                unset($data['avatar_url']);
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
            $data['id'] = $object->getId();
            $data['login'] = $object->getLogin();
            if ($object->isInitialized('displayLogin') && null !== $object->getDisplayLogin()) {
                $data['display_login'] = $object->getDisplayLogin();
            }
            $data['gravatar_id'] = $object->getGravatarId();
            $data['url'] = $object->getUrl();
            $data['avatar_url'] = $object->getAvatarUrl();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ActorConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\Actor' => false];
        }
    }
} else {
    class ActorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\Actor';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\Actor';
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
            $object = new \Github\Model\Actor();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ActorConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('login', $data)) {
                $object->setLogin($data['login']);
                unset($data['login']);
            }
            if (\array_key_exists('display_login', $data)) {
                $object->setDisplayLogin($data['display_login']);
                unset($data['display_login']);
            }
            if (\array_key_exists('gravatar_id', $data) && $data['gravatar_id'] !== null) {
                $object->setGravatarId($data['gravatar_id']);
                unset($data['gravatar_id']);
            }
            elseif (\array_key_exists('gravatar_id', $data) && $data['gravatar_id'] === null) {
                $object->setGravatarId(null);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('avatar_url', $data)) {
                $object->setAvatarUrl($data['avatar_url']);
                unset($data['avatar_url']);
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
            $data['id'] = $object->getId();
            $data['login'] = $object->getLogin();
            if ($object->isInitialized('displayLogin') && null !== $object->getDisplayLogin()) {
                $data['display_login'] = $object->getDisplayLogin();
            }
            $data['gravatar_id'] = $object->getGravatarId();
            $data['url'] = $object->getUrl();
            $data['avatar_url'] = $object->getAvatarUrl();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ActorConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\Actor' => false];
        }
    }
}