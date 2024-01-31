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
    class OrganizationSimpleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\OrganizationSimple';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\OrganizationSimple';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\OrganizationSimple();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\OrganizationSimpleConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('login', $data)) {
                $object->setLogin($data['login']);
                unset($data['login']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('repos_url', $data)) {
                $object->setReposUrl($data['repos_url']);
                unset($data['repos_url']);
            }
            if (\array_key_exists('events_url', $data)) {
                $object->setEventsUrl($data['events_url']);
                unset($data['events_url']);
            }
            if (\array_key_exists('hooks_url', $data)) {
                $object->setHooksUrl($data['hooks_url']);
                unset($data['hooks_url']);
            }
            if (\array_key_exists('issues_url', $data)) {
                $object->setIssuesUrl($data['issues_url']);
                unset($data['issues_url']);
            }
            if (\array_key_exists('members_url', $data)) {
                $object->setMembersUrl($data['members_url']);
                unset($data['members_url']);
            }
            if (\array_key_exists('public_members_url', $data)) {
                $object->setPublicMembersUrl($data['public_members_url']);
                unset($data['public_members_url']);
            }
            if (\array_key_exists('avatar_url', $data)) {
                $object->setAvatarUrl($data['avatar_url']);
                unset($data['avatar_url']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
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
            $data['login'] = $object->getLogin();
            $data['id'] = $object->getId();
            $data['node_id'] = $object->getNodeId();
            $data['url'] = $object->getUrl();
            $data['repos_url'] = $object->getReposUrl();
            $data['events_url'] = $object->getEventsUrl();
            $data['hooks_url'] = $object->getHooksUrl();
            $data['issues_url'] = $object->getIssuesUrl();
            $data['members_url'] = $object->getMembersUrl();
            $data['public_members_url'] = $object->getPublicMembersUrl();
            $data['avatar_url'] = $object->getAvatarUrl();
            $data['description'] = $object->getDescription();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\OrganizationSimpleConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\OrganizationSimple' => false];
        }
    }
} else {
    class OrganizationSimpleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\OrganizationSimple';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\OrganizationSimple';
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
            $object = new \Github\Model\OrganizationSimple();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\OrganizationSimpleConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('login', $data)) {
                $object->setLogin($data['login']);
                unset($data['login']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('repos_url', $data)) {
                $object->setReposUrl($data['repos_url']);
                unset($data['repos_url']);
            }
            if (\array_key_exists('events_url', $data)) {
                $object->setEventsUrl($data['events_url']);
                unset($data['events_url']);
            }
            if (\array_key_exists('hooks_url', $data)) {
                $object->setHooksUrl($data['hooks_url']);
                unset($data['hooks_url']);
            }
            if (\array_key_exists('issues_url', $data)) {
                $object->setIssuesUrl($data['issues_url']);
                unset($data['issues_url']);
            }
            if (\array_key_exists('members_url', $data)) {
                $object->setMembersUrl($data['members_url']);
                unset($data['members_url']);
            }
            if (\array_key_exists('public_members_url', $data)) {
                $object->setPublicMembersUrl($data['public_members_url']);
                unset($data['public_members_url']);
            }
            if (\array_key_exists('avatar_url', $data)) {
                $object->setAvatarUrl($data['avatar_url']);
                unset($data['avatar_url']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
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
            $data['login'] = $object->getLogin();
            $data['id'] = $object->getId();
            $data['node_id'] = $object->getNodeId();
            $data['url'] = $object->getUrl();
            $data['repos_url'] = $object->getReposUrl();
            $data['events_url'] = $object->getEventsUrl();
            $data['hooks_url'] = $object->getHooksUrl();
            $data['issues_url'] = $object->getIssuesUrl();
            $data['members_url'] = $object->getMembersUrl();
            $data['public_members_url'] = $object->getPublicMembersUrl();
            $data['avatar_url'] = $object->getAvatarUrl();
            $data['description'] = $object->getDescription();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\OrganizationSimpleConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\OrganizationSimple' => false];
        }
    }
}