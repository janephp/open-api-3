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
    class BranchProtectionRequiredStatusChecksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\BranchProtectionRequiredStatusChecks';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\BranchProtectionRequiredStatusChecks';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\BranchProtectionRequiredStatusChecks();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\BranchProtectionRequiredStatusChecksConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('enforcement_level', $data)) {
                $object->setEnforcementLevel($data['enforcement_level']);
                unset($data['enforcement_level']);
            }
            if (\array_key_exists('contexts', $data)) {
                $values = [];
                foreach ($data['contexts'] as $value) {
                    $values[] = $value;
                }
                $object->setContexts($values);
                unset($data['contexts']);
            }
            if (\array_key_exists('contexts_url', $data)) {
                $object->setContextsUrl($data['contexts_url']);
                unset($data['contexts_url']);
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
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            $data['enforcement_level'] = $object->getEnforcementLevel();
            $values = [];
            foreach ($object->getContexts() as $value) {
                $values[] = $value;
            }
            $data['contexts'] = $values;
            if ($object->isInitialized('contextsUrl') && null !== $object->getContextsUrl()) {
                $data['contexts_url'] = $object->getContextsUrl();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\BranchProtectionRequiredStatusChecksConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\BranchProtectionRequiredStatusChecks' => false];
        }
    }
} else {
    class BranchProtectionRequiredStatusChecksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\BranchProtectionRequiredStatusChecks';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\BranchProtectionRequiredStatusChecks';
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
            $object = new \Github\Model\BranchProtectionRequiredStatusChecks();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\BranchProtectionRequiredStatusChecksConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('enforcement_level', $data)) {
                $object->setEnforcementLevel($data['enforcement_level']);
                unset($data['enforcement_level']);
            }
            if (\array_key_exists('contexts', $data)) {
                $values = [];
                foreach ($data['contexts'] as $value) {
                    $values[] = $value;
                }
                $object->setContexts($values);
                unset($data['contexts']);
            }
            if (\array_key_exists('contexts_url', $data)) {
                $object->setContextsUrl($data['contexts_url']);
                unset($data['contexts_url']);
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
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            $data['enforcement_level'] = $object->getEnforcementLevel();
            $values = [];
            foreach ($object->getContexts() as $value) {
                $values[] = $value;
            }
            $data['contexts'] = $values;
            if ($object->isInitialized('contextsUrl') && null !== $object->getContextsUrl()) {
                $data['contexts_url'] = $object->getContextsUrl();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\BranchProtectionRequiredStatusChecksConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\BranchProtectionRequiredStatusChecks' => false];
        }
    }
}