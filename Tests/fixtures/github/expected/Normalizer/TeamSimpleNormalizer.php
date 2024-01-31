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
    class TeamSimpleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\TeamSimple';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\TeamSimple';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\TeamSimple();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\TeamSimpleConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
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
            if (\array_key_exists('members_url', $data)) {
                $object->setMembersUrl($data['members_url']);
                unset($data['members_url']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('permission', $data)) {
                $object->setPermission($data['permission']);
                unset($data['permission']);
            }
            if (\array_key_exists('privacy', $data)) {
                $object->setPrivacy($data['privacy']);
                unset($data['privacy']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            if (\array_key_exists('repositories_url', $data)) {
                $object->setRepositoriesUrl($data['repositories_url']);
                unset($data['repositories_url']);
            }
            if (\array_key_exists('slug', $data)) {
                $object->setSlug($data['slug']);
                unset($data['slug']);
            }
            if (\array_key_exists('ldap_dn', $data)) {
                $object->setLdapDn($data['ldap_dn']);
                unset($data['ldap_dn']);
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
            $data['node_id'] = $object->getNodeId();
            $data['url'] = $object->getUrl();
            $data['members_url'] = $object->getMembersUrl();
            $data['name'] = $object->getName();
            $data['description'] = $object->getDescription();
            $data['permission'] = $object->getPermission();
            if ($object->isInitialized('privacy') && null !== $object->getPrivacy()) {
                $data['privacy'] = $object->getPrivacy();
            }
            $data['html_url'] = $object->getHtmlUrl();
            $data['repositories_url'] = $object->getRepositoriesUrl();
            $data['slug'] = $object->getSlug();
            if ($object->isInitialized('ldapDn') && null !== $object->getLdapDn()) {
                $data['ldap_dn'] = $object->getLdapDn();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\TeamSimpleConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\TeamSimple' => false];
        }
    }
} else {
    class TeamSimpleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\TeamSimple';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\TeamSimple';
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
            $object = new \Github\Model\TeamSimple();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\TeamSimpleConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
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
            if (\array_key_exists('members_url', $data)) {
                $object->setMembersUrl($data['members_url']);
                unset($data['members_url']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('permission', $data)) {
                $object->setPermission($data['permission']);
                unset($data['permission']);
            }
            if (\array_key_exists('privacy', $data)) {
                $object->setPrivacy($data['privacy']);
                unset($data['privacy']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            if (\array_key_exists('repositories_url', $data)) {
                $object->setRepositoriesUrl($data['repositories_url']);
                unset($data['repositories_url']);
            }
            if (\array_key_exists('slug', $data)) {
                $object->setSlug($data['slug']);
                unset($data['slug']);
            }
            if (\array_key_exists('ldap_dn', $data)) {
                $object->setLdapDn($data['ldap_dn']);
                unset($data['ldap_dn']);
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
            $data['node_id'] = $object->getNodeId();
            $data['url'] = $object->getUrl();
            $data['members_url'] = $object->getMembersUrl();
            $data['name'] = $object->getName();
            $data['description'] = $object->getDescription();
            $data['permission'] = $object->getPermission();
            if ($object->isInitialized('privacy') && null !== $object->getPrivacy()) {
                $data['privacy'] = $object->getPrivacy();
            }
            $data['html_url'] = $object->getHtmlUrl();
            $data['repositories_url'] = $object->getRepositoriesUrl();
            $data['slug'] = $object->getSlug();
            if ($object->isInitialized('ldapDn') && null !== $object->getLdapDn()) {
                $data['ldap_dn'] = $object->getLdapDn();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\TeamSimpleConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\TeamSimple' => false];
        }
    }
}