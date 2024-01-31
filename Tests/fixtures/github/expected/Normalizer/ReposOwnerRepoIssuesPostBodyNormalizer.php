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
    class ReposOwnerRepoIssuesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ReposOwnerRepoIssuesPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoIssuesPostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ReposOwnerRepoIssuesPostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoIssuesPostBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('body', $data)) {
                $object->setBody($data['body']);
                unset($data['body']);
            }
            if (\array_key_exists('assignee', $data) && $data['assignee'] !== null) {
                $object->setAssignee($data['assignee']);
                unset($data['assignee']);
            }
            elseif (\array_key_exists('assignee', $data) && $data['assignee'] === null) {
                $object->setAssignee(null);
            }
            if (\array_key_exists('milestone', $data) && $data['milestone'] !== null) {
                $object->setMilestone($data['milestone']);
                unset($data['milestone']);
            }
            elseif (\array_key_exists('milestone', $data) && $data['milestone'] === null) {
                $object->setMilestone(null);
            }
            if (\array_key_exists('labels', $data)) {
                $values = [];
                foreach ($data['labels'] as $value) {
                    $values[] = $value;
                }
                $object->setLabels($values);
                unset($data['labels']);
            }
            if (\array_key_exists('assignees', $data)) {
                $values_1 = [];
                foreach ($data['assignees'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAssignees($values_1);
                unset($data['assignees']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['title'] = $object->getTitle();
            if ($object->isInitialized('body') && null !== $object->getBody()) {
                $data['body'] = $object->getBody();
            }
            if ($object->isInitialized('assignee') && null !== $object->getAssignee()) {
                $data['assignee'] = $object->getAssignee();
            }
            if ($object->isInitialized('milestone') && null !== $object->getMilestone()) {
                $data['milestone'] = $object->getMilestone();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values = [];
                foreach ($object->getLabels() as $value) {
                    $values[] = $value;
                }
                $data['labels'] = $values;
            }
            if ($object->isInitialized('assignees') && null !== $object->getAssignees()) {
                $values_1 = [];
                foreach ($object->getAssignees() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['assignees'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoIssuesPostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ReposOwnerRepoIssuesPostBody' => false];
        }
    }
} else {
    class ReposOwnerRepoIssuesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ReposOwnerRepoIssuesPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoIssuesPostBody';
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
            $object = new \Github\Model\ReposOwnerRepoIssuesPostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoIssuesPostBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('body', $data)) {
                $object->setBody($data['body']);
                unset($data['body']);
            }
            if (\array_key_exists('assignee', $data) && $data['assignee'] !== null) {
                $object->setAssignee($data['assignee']);
                unset($data['assignee']);
            }
            elseif (\array_key_exists('assignee', $data) && $data['assignee'] === null) {
                $object->setAssignee(null);
            }
            if (\array_key_exists('milestone', $data) && $data['milestone'] !== null) {
                $object->setMilestone($data['milestone']);
                unset($data['milestone']);
            }
            elseif (\array_key_exists('milestone', $data) && $data['milestone'] === null) {
                $object->setMilestone(null);
            }
            if (\array_key_exists('labels', $data)) {
                $values = [];
                foreach ($data['labels'] as $value) {
                    $values[] = $value;
                }
                $object->setLabels($values);
                unset($data['labels']);
            }
            if (\array_key_exists('assignees', $data)) {
                $values_1 = [];
                foreach ($data['assignees'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAssignees($values_1);
                unset($data['assignees']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $data['title'] = $object->getTitle();
            if ($object->isInitialized('body') && null !== $object->getBody()) {
                $data['body'] = $object->getBody();
            }
            if ($object->isInitialized('assignee') && null !== $object->getAssignee()) {
                $data['assignee'] = $object->getAssignee();
            }
            if ($object->isInitialized('milestone') && null !== $object->getMilestone()) {
                $data['milestone'] = $object->getMilestone();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values = [];
                foreach ($object->getLabels() as $value) {
                    $values[] = $value;
                }
                $data['labels'] = $values;
            }
            if ($object->isInitialized('assignees') && null !== $object->getAssignees()) {
                $values_1 = [];
                foreach ($object->getAssignees() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['assignees'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoIssuesPostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ReposOwnerRepoIssuesPostBody' => false];
        }
    }
}