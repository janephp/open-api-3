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
    class SimpleCommitStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\SimpleCommitStatus';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\SimpleCommitStatus';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\SimpleCommitStatus();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\SimpleCommitStatusConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('context', $data)) {
                $object->setContext($data['context']);
                unset($data['context']);
            }
            if (\array_key_exists('target_url', $data)) {
                $object->setTargetUrl($data['target_url']);
                unset($data['target_url']);
            }
            if (\array_key_exists('required', $data) && $data['required'] !== null) {
                $object->setRequired($data['required']);
                unset($data['required']);
            }
            elseif (\array_key_exists('required', $data) && $data['required'] === null) {
                $object->setRequired(null);
            }
            if (\array_key_exists('avatar_url', $data) && $data['avatar_url'] !== null) {
                $object->setAvatarUrl($data['avatar_url']);
                unset($data['avatar_url']);
            }
            elseif (\array_key_exists('avatar_url', $data) && $data['avatar_url'] === null) {
                $object->setAvatarUrl(null);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
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
            $data['description'] = $object->getDescription();
            $data['id'] = $object->getId();
            $data['node_id'] = $object->getNodeId();
            $data['state'] = $object->getState();
            $data['context'] = $object->getContext();
            $data['target_url'] = $object->getTargetUrl();
            if ($object->isInitialized('required') && null !== $object->getRequired()) {
                $data['required'] = $object->getRequired();
            }
            $data['avatar_url'] = $object->getAvatarUrl();
            $data['url'] = $object->getUrl();
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\SimpleCommitStatusConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\SimpleCommitStatus' => false];
        }
    }
} else {
    class SimpleCommitStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\SimpleCommitStatus';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\SimpleCommitStatus';
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
            $object = new \Github\Model\SimpleCommitStatus();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\SimpleCommitStatusConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('context', $data)) {
                $object->setContext($data['context']);
                unset($data['context']);
            }
            if (\array_key_exists('target_url', $data)) {
                $object->setTargetUrl($data['target_url']);
                unset($data['target_url']);
            }
            if (\array_key_exists('required', $data) && $data['required'] !== null) {
                $object->setRequired($data['required']);
                unset($data['required']);
            }
            elseif (\array_key_exists('required', $data) && $data['required'] === null) {
                $object->setRequired(null);
            }
            if (\array_key_exists('avatar_url', $data) && $data['avatar_url'] !== null) {
                $object->setAvatarUrl($data['avatar_url']);
                unset($data['avatar_url']);
            }
            elseif (\array_key_exists('avatar_url', $data) && $data['avatar_url'] === null) {
                $object->setAvatarUrl(null);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
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
            $data['description'] = $object->getDescription();
            $data['id'] = $object->getId();
            $data['node_id'] = $object->getNodeId();
            $data['state'] = $object->getState();
            $data['context'] = $object->getContext();
            $data['target_url'] = $object->getTargetUrl();
            if ($object->isInitialized('required') && null !== $object->getRequired()) {
                $data['required'] = $object->getRequired();
            }
            $data['avatar_url'] = $object->getAvatarUrl();
            $data['url'] = $object->getUrl();
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\SimpleCommitStatusConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\SimpleCommitStatus' => false];
        }
    }
}