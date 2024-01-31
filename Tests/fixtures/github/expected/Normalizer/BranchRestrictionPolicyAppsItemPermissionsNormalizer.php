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
    class BranchRestrictionPolicyAppsItemPermissionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\BranchRestrictionPolicyAppsItemPermissions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\BranchRestrictionPolicyAppsItemPermissions';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\BranchRestrictionPolicyAppsItemPermissions();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\BranchRestrictionPolicyAppsItemPermissionsConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('metadata', $data)) {
                $object->setMetadata($data['metadata']);
                unset($data['metadata']);
            }
            if (\array_key_exists('contents', $data)) {
                $object->setContents($data['contents']);
                unset($data['contents']);
            }
            if (\array_key_exists('issues', $data)) {
                $object->setIssues($data['issues']);
                unset($data['issues']);
            }
            if (\array_key_exists('single_file', $data)) {
                $object->setSingleFile($data['single_file']);
                unset($data['single_file']);
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
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $data['metadata'] = $object->getMetadata();
            }
            if ($object->isInitialized('contents') && null !== $object->getContents()) {
                $data['contents'] = $object->getContents();
            }
            if ($object->isInitialized('issues') && null !== $object->getIssues()) {
                $data['issues'] = $object->getIssues();
            }
            if ($object->isInitialized('singleFile') && null !== $object->getSingleFile()) {
                $data['single_file'] = $object->getSingleFile();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\BranchRestrictionPolicyAppsItemPermissionsConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\BranchRestrictionPolicyAppsItemPermissions' => false];
        }
    }
} else {
    class BranchRestrictionPolicyAppsItemPermissionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\BranchRestrictionPolicyAppsItemPermissions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\BranchRestrictionPolicyAppsItemPermissions';
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
            $object = new \Github\Model\BranchRestrictionPolicyAppsItemPermissions();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\BranchRestrictionPolicyAppsItemPermissionsConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('metadata', $data)) {
                $object->setMetadata($data['metadata']);
                unset($data['metadata']);
            }
            if (\array_key_exists('contents', $data)) {
                $object->setContents($data['contents']);
                unset($data['contents']);
            }
            if (\array_key_exists('issues', $data)) {
                $object->setIssues($data['issues']);
                unset($data['issues']);
            }
            if (\array_key_exists('single_file', $data)) {
                $object->setSingleFile($data['single_file']);
                unset($data['single_file']);
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
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $data['metadata'] = $object->getMetadata();
            }
            if ($object->isInitialized('contents') && null !== $object->getContents()) {
                $data['contents'] = $object->getContents();
            }
            if ($object->isInitialized('issues') && null !== $object->getIssues()) {
                $data['issues'] = $object->getIssues();
            }
            if ($object->isInitialized('singleFile') && null !== $object->getSingleFile()) {
                $data['single_file'] = $object->getSingleFile();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\BranchRestrictionPolicyAppsItemPermissionsConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\BranchRestrictionPolicyAppsItemPermissions' => false];
        }
    }
}