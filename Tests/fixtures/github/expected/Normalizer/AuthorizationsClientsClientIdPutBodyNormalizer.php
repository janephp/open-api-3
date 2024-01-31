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
    class AuthorizationsClientsClientIdPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\AuthorizationsClientsClientIdPutBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\AuthorizationsClientsClientIdPutBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\AuthorizationsClientsClientIdPutBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\AuthorizationsClientsClientIdPutBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('client_secret', $data)) {
                $object->setClientSecret($data['client_secret']);
                unset($data['client_secret']);
            }
            if (\array_key_exists('scopes', $data) && $data['scopes'] !== null) {
                $values = [];
                foreach ($data['scopes'] as $value) {
                    $values[] = $value;
                }
                $object->setScopes($values);
                unset($data['scopes']);
            }
            elseif (\array_key_exists('scopes', $data) && $data['scopes'] === null) {
                $object->setScopes(null);
            }
            if (\array_key_exists('note', $data)) {
                $object->setNote($data['note']);
                unset($data['note']);
            }
            if (\array_key_exists('note_url', $data)) {
                $object->setNoteUrl($data['note_url']);
                unset($data['note_url']);
            }
            if (\array_key_exists('fingerprint', $data)) {
                $object->setFingerprint($data['fingerprint']);
                unset($data['fingerprint']);
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
            $data['client_secret'] = $object->getClientSecret();
            if ($object->isInitialized('scopes') && null !== $object->getScopes()) {
                $values = [];
                foreach ($object->getScopes() as $value) {
                    $values[] = $value;
                }
                $data['scopes'] = $values;
            }
            if ($object->isInitialized('note') && null !== $object->getNote()) {
                $data['note'] = $object->getNote();
            }
            if ($object->isInitialized('noteUrl') && null !== $object->getNoteUrl()) {
                $data['note_url'] = $object->getNoteUrl();
            }
            if ($object->isInitialized('fingerprint') && null !== $object->getFingerprint()) {
                $data['fingerprint'] = $object->getFingerprint();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\AuthorizationsClientsClientIdPutBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\AuthorizationsClientsClientIdPutBody' => false];
        }
    }
} else {
    class AuthorizationsClientsClientIdPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\AuthorizationsClientsClientIdPutBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\AuthorizationsClientsClientIdPutBody';
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
            $object = new \Github\Model\AuthorizationsClientsClientIdPutBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\AuthorizationsClientsClientIdPutBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('client_secret', $data)) {
                $object->setClientSecret($data['client_secret']);
                unset($data['client_secret']);
            }
            if (\array_key_exists('scopes', $data) && $data['scopes'] !== null) {
                $values = [];
                foreach ($data['scopes'] as $value) {
                    $values[] = $value;
                }
                $object->setScopes($values);
                unset($data['scopes']);
            }
            elseif (\array_key_exists('scopes', $data) && $data['scopes'] === null) {
                $object->setScopes(null);
            }
            if (\array_key_exists('note', $data)) {
                $object->setNote($data['note']);
                unset($data['note']);
            }
            if (\array_key_exists('note_url', $data)) {
                $object->setNoteUrl($data['note_url']);
                unset($data['note_url']);
            }
            if (\array_key_exists('fingerprint', $data)) {
                $object->setFingerprint($data['fingerprint']);
                unset($data['fingerprint']);
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
            $data['client_secret'] = $object->getClientSecret();
            if ($object->isInitialized('scopes') && null !== $object->getScopes()) {
                $values = [];
                foreach ($object->getScopes() as $value) {
                    $values[] = $value;
                }
                $data['scopes'] = $values;
            }
            if ($object->isInitialized('note') && null !== $object->getNote()) {
                $data['note'] = $object->getNote();
            }
            if ($object->isInitialized('noteUrl') && null !== $object->getNoteUrl()) {
                $data['note_url'] = $object->getNoteUrl();
            }
            if ($object->isInitialized('fingerprint') && null !== $object->getFingerprint()) {
                $data['fingerprint'] = $object->getFingerprint();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\AuthorizationsClientsClientIdPutBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\AuthorizationsClientsClientIdPutBody' => false];
        }
    }
}