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
    class ReposOwnerRepoBranchesBranchProtectionPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoBranchesBranchProtectionPutBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('required_status_checks', $data) && $data['required_status_checks'] !== null) {
                $object->setRequiredStatusChecks($this->denormalizer->denormalize($data['required_status_checks'], 'Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredStatusChecks', 'json', $context));
                unset($data['required_status_checks']);
            }
            elseif (\array_key_exists('required_status_checks', $data) && $data['required_status_checks'] === null) {
                $object->setRequiredStatusChecks(null);
            }
            if (\array_key_exists('enforce_admins', $data) && $data['enforce_admins'] !== null) {
                $object->setEnforceAdmins($data['enforce_admins']);
                unset($data['enforce_admins']);
            }
            elseif (\array_key_exists('enforce_admins', $data) && $data['enforce_admins'] === null) {
                $object->setEnforceAdmins(null);
            }
            if (\array_key_exists('required_pull_request_reviews', $data) && $data['required_pull_request_reviews'] !== null) {
                $object->setRequiredPullRequestReviews($this->denormalizer->denormalize($data['required_pull_request_reviews'], 'Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredPullRequestReviews', 'json', $context));
                unset($data['required_pull_request_reviews']);
            }
            elseif (\array_key_exists('required_pull_request_reviews', $data) && $data['required_pull_request_reviews'] === null) {
                $object->setRequiredPullRequestReviews(null);
            }
            if (\array_key_exists('restrictions', $data) && $data['restrictions'] !== null) {
                $object->setRestrictions($this->denormalizer->denormalize($data['restrictions'], 'Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions', 'json', $context));
                unset($data['restrictions']);
            }
            elseif (\array_key_exists('restrictions', $data) && $data['restrictions'] === null) {
                $object->setRestrictions(null);
            }
            if (\array_key_exists('required_linear_history', $data)) {
                $object->setRequiredLinearHistory($data['required_linear_history']);
                unset($data['required_linear_history']);
            }
            if (\array_key_exists('allow_force_pushes', $data) && $data['allow_force_pushes'] !== null) {
                $object->setAllowForcePushes($data['allow_force_pushes']);
                unset($data['allow_force_pushes']);
            }
            elseif (\array_key_exists('allow_force_pushes', $data) && $data['allow_force_pushes'] === null) {
                $object->setAllowForcePushes(null);
            }
            if (\array_key_exists('allow_deletions', $data)) {
                $object->setAllowDeletions($data['allow_deletions']);
                unset($data['allow_deletions']);
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
            $data['required_status_checks'] = $this->normalizer->normalize($object->getRequiredStatusChecks(), 'json', $context);
            $data['enforce_admins'] = $object->getEnforceAdmins();
            $data['required_pull_request_reviews'] = $this->normalizer->normalize($object->getRequiredPullRequestReviews(), 'json', $context);
            $data['restrictions'] = $this->normalizer->normalize($object->getRestrictions(), 'json', $context);
            if ($object->isInitialized('requiredLinearHistory') && null !== $object->getRequiredLinearHistory()) {
                $data['required_linear_history'] = $object->getRequiredLinearHistory();
            }
            if ($object->isInitialized('allowForcePushes') && null !== $object->getAllowForcePushes()) {
                $data['allow_force_pushes'] = $object->getAllowForcePushes();
            }
            if ($object->isInitialized('allowDeletions') && null !== $object->getAllowDeletions()) {
                $data['allow_deletions'] = $object->getAllowDeletions();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoBranchesBranchProtectionPutBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBody' => false];
        }
    }
} else {
    class ReposOwnerRepoBranchesBranchProtectionPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBody';
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
            $object = new \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoBranchesBranchProtectionPutBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('required_status_checks', $data) && $data['required_status_checks'] !== null) {
                $object->setRequiredStatusChecks($this->denormalizer->denormalize($data['required_status_checks'], 'Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredStatusChecks', 'json', $context));
                unset($data['required_status_checks']);
            }
            elseif (\array_key_exists('required_status_checks', $data) && $data['required_status_checks'] === null) {
                $object->setRequiredStatusChecks(null);
            }
            if (\array_key_exists('enforce_admins', $data) && $data['enforce_admins'] !== null) {
                $object->setEnforceAdmins($data['enforce_admins']);
                unset($data['enforce_admins']);
            }
            elseif (\array_key_exists('enforce_admins', $data) && $data['enforce_admins'] === null) {
                $object->setEnforceAdmins(null);
            }
            if (\array_key_exists('required_pull_request_reviews', $data) && $data['required_pull_request_reviews'] !== null) {
                $object->setRequiredPullRequestReviews($this->denormalizer->denormalize($data['required_pull_request_reviews'], 'Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredPullRequestReviews', 'json', $context));
                unset($data['required_pull_request_reviews']);
            }
            elseif (\array_key_exists('required_pull_request_reviews', $data) && $data['required_pull_request_reviews'] === null) {
                $object->setRequiredPullRequestReviews(null);
            }
            if (\array_key_exists('restrictions', $data) && $data['restrictions'] !== null) {
                $object->setRestrictions($this->denormalizer->denormalize($data['restrictions'], 'Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions', 'json', $context));
                unset($data['restrictions']);
            }
            elseif (\array_key_exists('restrictions', $data) && $data['restrictions'] === null) {
                $object->setRestrictions(null);
            }
            if (\array_key_exists('required_linear_history', $data)) {
                $object->setRequiredLinearHistory($data['required_linear_history']);
                unset($data['required_linear_history']);
            }
            if (\array_key_exists('allow_force_pushes', $data) && $data['allow_force_pushes'] !== null) {
                $object->setAllowForcePushes($data['allow_force_pushes']);
                unset($data['allow_force_pushes']);
            }
            elseif (\array_key_exists('allow_force_pushes', $data) && $data['allow_force_pushes'] === null) {
                $object->setAllowForcePushes(null);
            }
            if (\array_key_exists('allow_deletions', $data)) {
                $object->setAllowDeletions($data['allow_deletions']);
                unset($data['allow_deletions']);
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
            $data['required_status_checks'] = $this->normalizer->normalize($object->getRequiredStatusChecks(), 'json', $context);
            $data['enforce_admins'] = $object->getEnforceAdmins();
            $data['required_pull_request_reviews'] = $this->normalizer->normalize($object->getRequiredPullRequestReviews(), 'json', $context);
            $data['restrictions'] = $this->normalizer->normalize($object->getRestrictions(), 'json', $context);
            if ($object->isInitialized('requiredLinearHistory') && null !== $object->getRequiredLinearHistory()) {
                $data['required_linear_history'] = $object->getRequiredLinearHistory();
            }
            if ($object->isInitialized('allowForcePushes') && null !== $object->getAllowForcePushes()) {
                $data['allow_force_pushes'] = $object->getAllowForcePushes();
            }
            if ($object->isInitialized('allowDeletions') && null !== $object->getAllowDeletions()) {
                $data['allow_deletions'] = $object->getAllowDeletions();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoBranchesBranchProtectionPutBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBody' => false];
        }
    }
}