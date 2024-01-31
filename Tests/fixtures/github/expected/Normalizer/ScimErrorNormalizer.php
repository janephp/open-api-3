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
    class ScimErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ScimError';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ScimError';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ScimError();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimErrorConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('message', $data) && $data['message'] !== null) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            elseif (\array_key_exists('message', $data) && $data['message'] === null) {
                $object->setMessage(null);
            }
            if (\array_key_exists('documentation_url', $data) && $data['documentation_url'] !== null) {
                $object->setDocumentationUrl($data['documentation_url']);
                unset($data['documentation_url']);
            }
            elseif (\array_key_exists('documentation_url', $data) && $data['documentation_url'] === null) {
                $object->setDocumentationUrl(null);
            }
            if (\array_key_exists('detail', $data) && $data['detail'] !== null) {
                $object->setDetail($data['detail']);
                unset($data['detail']);
            }
            elseif (\array_key_exists('detail', $data) && $data['detail'] === null) {
                $object->setDetail(null);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('scimType', $data) && $data['scimType'] !== null) {
                $object->setScimType($data['scimType']);
                unset($data['scimType']);
            }
            elseif (\array_key_exists('scimType', $data) && $data['scimType'] === null) {
                $object->setScimType(null);
            }
            if (\array_key_exists('schemas', $data)) {
                $values = [];
                foreach ($data['schemas'] as $value) {
                    $values[] = $value;
                }
                $object->setSchemas($values);
                unset($data['schemas']);
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
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['message'] = $object->getMessage();
            }
            if ($object->isInitialized('documentationUrl') && null !== $object->getDocumentationUrl()) {
                $data['documentation_url'] = $object->getDocumentationUrl();
            }
            if ($object->isInitialized('detail') && null !== $object->getDetail()) {
                $data['detail'] = $object->getDetail();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('scimType') && null !== $object->getScimType()) {
                $data['scimType'] = $object->getScimType();
            }
            if ($object->isInitialized('schemas') && null !== $object->getSchemas()) {
                $values = [];
                foreach ($object->getSchemas() as $value) {
                    $values[] = $value;
                }
                $data['schemas'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimErrorConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ScimError' => false];
        }
    }
} else {
    class ScimErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ScimError';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ScimError';
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
            $object = new \Github\Model\ScimError();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimErrorConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('message', $data) && $data['message'] !== null) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            elseif (\array_key_exists('message', $data) && $data['message'] === null) {
                $object->setMessage(null);
            }
            if (\array_key_exists('documentation_url', $data) && $data['documentation_url'] !== null) {
                $object->setDocumentationUrl($data['documentation_url']);
                unset($data['documentation_url']);
            }
            elseif (\array_key_exists('documentation_url', $data) && $data['documentation_url'] === null) {
                $object->setDocumentationUrl(null);
            }
            if (\array_key_exists('detail', $data) && $data['detail'] !== null) {
                $object->setDetail($data['detail']);
                unset($data['detail']);
            }
            elseif (\array_key_exists('detail', $data) && $data['detail'] === null) {
                $object->setDetail(null);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('scimType', $data) && $data['scimType'] !== null) {
                $object->setScimType($data['scimType']);
                unset($data['scimType']);
            }
            elseif (\array_key_exists('scimType', $data) && $data['scimType'] === null) {
                $object->setScimType(null);
            }
            if (\array_key_exists('schemas', $data)) {
                $values = [];
                foreach ($data['schemas'] as $value) {
                    $values[] = $value;
                }
                $object->setSchemas($values);
                unset($data['schemas']);
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
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['message'] = $object->getMessage();
            }
            if ($object->isInitialized('documentationUrl') && null !== $object->getDocumentationUrl()) {
                $data['documentation_url'] = $object->getDocumentationUrl();
            }
            if ($object->isInitialized('detail') && null !== $object->getDetail()) {
                $data['detail'] = $object->getDetail();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('scimType') && null !== $object->getScimType()) {
                $data['scimType'] = $object->getScimType();
            }
            if ($object->isInitialized('schemas') && null !== $object->getSchemas()) {
                $values = [];
                foreach ($object->getSchemas() as $value) {
                    $values[] = $value;
                }
                $data['schemas'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimErrorConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ScimError' => false];
        }
    }
}