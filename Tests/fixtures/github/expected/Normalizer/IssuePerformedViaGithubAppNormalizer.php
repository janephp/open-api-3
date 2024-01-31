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
    class IssuePerformedViaGithubAppNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\IssuePerformedViaGithubApp';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\IssuePerformedViaGithubApp';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\IssuePerformedViaGithubApp();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\IssuePerformedViaGithubAppConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('slug', $data)) {
                $object->setSlug($data['slug']);
                unset($data['slug']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
                $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Github\\Model\\IntegrationOwner', 'json', $context));
                unset($data['owner']);
            }
            elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
                $object->setOwner(null);
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
            if (\array_key_exists('external_url', $data)) {
                $object->setExternalUrl($data['external_url']);
                unset($data['external_url']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('permissions', $data)) {
                $object->setPermissions($this->denormalizer->denormalize($data['permissions'], 'Github\\Model\\IntegrationPermissions', 'json', $context));
                unset($data['permissions']);
            }
            if (\array_key_exists('events', $data)) {
                $values = [];
                foreach ($data['events'] as $value) {
                    $values[] = $value;
                }
                $object->setEvents($values);
                unset($data['events']);
            }
            if (\array_key_exists('installations_count', $data)) {
                $object->setInstallationsCount($data['installations_count']);
                unset($data['installations_count']);
            }
            if (\array_key_exists('client_id', $data)) {
                $object->setClientId($data['client_id']);
                unset($data['client_id']);
            }
            if (\array_key_exists('client_secret', $data)) {
                $object->setClientSecret($data['client_secret']);
                unset($data['client_secret']);
            }
            if (\array_key_exists('webhook_secret', $data)) {
                $object->setWebhookSecret($data['webhook_secret']);
                unset($data['webhook_secret']);
            }
            if (\array_key_exists('pem', $data)) {
                $object->setPem($data['pem']);
                unset($data['pem']);
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
            $data['id'] = $object->getId();
            if ($object->isInitialized('slug') && null !== $object->getSlug()) {
                $data['slug'] = $object->getSlug();
            }
            $data['node_id'] = $object->getNodeId();
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
            $data['name'] = $object->getName();
            $data['description'] = $object->getDescription();
            $data['external_url'] = $object->getExternalUrl();
            $data['html_url'] = $object->getHtmlUrl();
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
            $data['permissions'] = $this->normalizer->normalize($object->getPermissions(), 'json', $context);
            $values = [];
            foreach ($object->getEvents() as $value) {
                $values[] = $value;
            }
            $data['events'] = $values;
            if ($object->isInitialized('installationsCount') && null !== $object->getInstallationsCount()) {
                $data['installations_count'] = $object->getInstallationsCount();
            }
            if ($object->isInitialized('clientId') && null !== $object->getClientId()) {
                $data['client_id'] = $object->getClientId();
            }
            if ($object->isInitialized('clientSecret') && null !== $object->getClientSecret()) {
                $data['client_secret'] = $object->getClientSecret();
            }
            if ($object->isInitialized('webhookSecret') && null !== $object->getWebhookSecret()) {
                $data['webhook_secret'] = $object->getWebhookSecret();
            }
            if ($object->isInitialized('pem') && null !== $object->getPem()) {
                $data['pem'] = $object->getPem();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\IssuePerformedViaGithubAppConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\IssuePerformedViaGithubApp' => false];
        }
    }
} else {
    class IssuePerformedViaGithubAppNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\IssuePerformedViaGithubApp';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\IssuePerformedViaGithubApp';
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
            $object = new \Github\Model\IssuePerformedViaGithubApp();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\IssuePerformedViaGithubAppConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('slug', $data)) {
                $object->setSlug($data['slug']);
                unset($data['slug']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
                $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Github\\Model\\IntegrationOwner', 'json', $context));
                unset($data['owner']);
            }
            elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
                $object->setOwner(null);
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
            if (\array_key_exists('external_url', $data)) {
                $object->setExternalUrl($data['external_url']);
                unset($data['external_url']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('permissions', $data)) {
                $object->setPermissions($this->denormalizer->denormalize($data['permissions'], 'Github\\Model\\IntegrationPermissions', 'json', $context));
                unset($data['permissions']);
            }
            if (\array_key_exists('events', $data)) {
                $values = [];
                foreach ($data['events'] as $value) {
                    $values[] = $value;
                }
                $object->setEvents($values);
                unset($data['events']);
            }
            if (\array_key_exists('installations_count', $data)) {
                $object->setInstallationsCount($data['installations_count']);
                unset($data['installations_count']);
            }
            if (\array_key_exists('client_id', $data)) {
                $object->setClientId($data['client_id']);
                unset($data['client_id']);
            }
            if (\array_key_exists('client_secret', $data)) {
                $object->setClientSecret($data['client_secret']);
                unset($data['client_secret']);
            }
            if (\array_key_exists('webhook_secret', $data)) {
                $object->setWebhookSecret($data['webhook_secret']);
                unset($data['webhook_secret']);
            }
            if (\array_key_exists('pem', $data)) {
                $object->setPem($data['pem']);
                unset($data['pem']);
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
            $data['id'] = $object->getId();
            if ($object->isInitialized('slug') && null !== $object->getSlug()) {
                $data['slug'] = $object->getSlug();
            }
            $data['node_id'] = $object->getNodeId();
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
            $data['name'] = $object->getName();
            $data['description'] = $object->getDescription();
            $data['external_url'] = $object->getExternalUrl();
            $data['html_url'] = $object->getHtmlUrl();
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
            $data['permissions'] = $this->normalizer->normalize($object->getPermissions(), 'json', $context);
            $values = [];
            foreach ($object->getEvents() as $value) {
                $values[] = $value;
            }
            $data['events'] = $values;
            if ($object->isInitialized('installationsCount') && null !== $object->getInstallationsCount()) {
                $data['installations_count'] = $object->getInstallationsCount();
            }
            if ($object->isInitialized('clientId') && null !== $object->getClientId()) {
                $data['client_id'] = $object->getClientId();
            }
            if ($object->isInitialized('clientSecret') && null !== $object->getClientSecret()) {
                $data['client_secret'] = $object->getClientSecret();
            }
            if ($object->isInitialized('webhookSecret') && null !== $object->getWebhookSecret()) {
                $data['webhook_secret'] = $object->getWebhookSecret();
            }
            if ($object->isInitialized('pem') && null !== $object->getPem()) {
                $data['pem'] = $object->getPem();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\IssuePerformedViaGithubAppConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\IssuePerformedViaGithubApp' => false];
        }
    }
}