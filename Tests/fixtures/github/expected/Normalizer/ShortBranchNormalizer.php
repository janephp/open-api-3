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
    class ShortBranchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ShortBranch';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ShortBranch';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ShortBranch();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ShortBranchConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('commit', $data)) {
                $object->setCommit($this->denormalizer->denormalize($data['commit'], 'Github\\Model\\ShortBranchCommit', 'json', $context));
                unset($data['commit']);
            }
            if (\array_key_exists('protected', $data)) {
                $object->setProtected($data['protected']);
                unset($data['protected']);
            }
            if (\array_key_exists('protection', $data)) {
                $object->setProtection($this->denormalizer->denormalize($data['protection'], 'Github\\Model\\BranchProtection', 'json', $context));
                unset($data['protection']);
            }
            if (\array_key_exists('protection_url', $data)) {
                $object->setProtectionUrl($data['protection_url']);
                unset($data['protection_url']);
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
            $data['name'] = $object->getName();
            $data['commit'] = $this->normalizer->normalize($object->getCommit(), 'json', $context);
            $data['protected'] = $object->getProtected();
            if ($object->isInitialized('protection') && null !== $object->getProtection()) {
                $data['protection'] = $this->normalizer->normalize($object->getProtection(), 'json', $context);
            }
            if ($object->isInitialized('protectionUrl') && null !== $object->getProtectionUrl()) {
                $data['protection_url'] = $object->getProtectionUrl();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ShortBranchConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ShortBranch' => false];
        }
    }
} else {
    class ShortBranchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ShortBranch';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ShortBranch';
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
            $object = new \Github\Model\ShortBranch();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ShortBranchConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('commit', $data)) {
                $object->setCommit($this->denormalizer->denormalize($data['commit'], 'Github\\Model\\ShortBranchCommit', 'json', $context));
                unset($data['commit']);
            }
            if (\array_key_exists('protected', $data)) {
                $object->setProtected($data['protected']);
                unset($data['protected']);
            }
            if (\array_key_exists('protection', $data)) {
                $object->setProtection($this->denormalizer->denormalize($data['protection'], 'Github\\Model\\BranchProtection', 'json', $context));
                unset($data['protection']);
            }
            if (\array_key_exists('protection_url', $data)) {
                $object->setProtectionUrl($data['protection_url']);
                unset($data['protection_url']);
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
            $data['name'] = $object->getName();
            $data['commit'] = $this->normalizer->normalize($object->getCommit(), 'json', $context);
            $data['protected'] = $object->getProtected();
            if ($object->isInitialized('protection') && null !== $object->getProtection()) {
                $data['protection'] = $this->normalizer->normalize($object->getProtection(), 'json', $context);
            }
            if ($object->isInitialized('protectionUrl') && null !== $object->getProtectionUrl()) {
                $data['protection_url'] = $object->getProtectionUrl();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ShortBranchConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ShortBranch' => false];
        }
    }
}