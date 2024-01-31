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
    class CommitComparisonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\CommitComparison';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\CommitComparison';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\CommitComparison();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CommitComparisonConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            if (\array_key_exists('permalink_url', $data)) {
                $object->setPermalinkUrl($data['permalink_url']);
                unset($data['permalink_url']);
            }
            if (\array_key_exists('diff_url', $data)) {
                $object->setDiffUrl($data['diff_url']);
                unset($data['diff_url']);
            }
            if (\array_key_exists('patch_url', $data)) {
                $object->setPatchUrl($data['patch_url']);
                unset($data['patch_url']);
            }
            if (\array_key_exists('base_commit', $data)) {
                $object->setBaseCommit($this->denormalizer->denormalize($data['base_commit'], 'Github\\Model\\Commit', 'json', $context));
                unset($data['base_commit']);
            }
            if (\array_key_exists('merge_base_commit', $data)) {
                $object->setMergeBaseCommit($this->denormalizer->denormalize($data['merge_base_commit'], 'Github\\Model\\Commit', 'json', $context));
                unset($data['merge_base_commit']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('ahead_by', $data)) {
                $object->setAheadBy($data['ahead_by']);
                unset($data['ahead_by']);
            }
            if (\array_key_exists('behind_by', $data)) {
                $object->setBehindBy($data['behind_by']);
                unset($data['behind_by']);
            }
            if (\array_key_exists('total_commits', $data)) {
                $object->setTotalCommits($data['total_commits']);
                unset($data['total_commits']);
            }
            if (\array_key_exists('commits', $data)) {
                $values = [];
                foreach ($data['commits'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\Commit', 'json', $context);
                }
                $object->setCommits($values);
                unset($data['commits']);
            }
            if (\array_key_exists('files', $data)) {
                $values_1 = [];
                foreach ($data['files'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\DiffEntry', 'json', $context);
                }
                $object->setFiles($values_1);
                unset($data['files']);
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
            $data['url'] = $object->getUrl();
            $data['html_url'] = $object->getHtmlUrl();
            $data['permalink_url'] = $object->getPermalinkUrl();
            $data['diff_url'] = $object->getDiffUrl();
            $data['patch_url'] = $object->getPatchUrl();
            $data['base_commit'] = $this->normalizer->normalize($object->getBaseCommit(), 'json', $context);
            $data['merge_base_commit'] = $this->normalizer->normalize($object->getMergeBaseCommit(), 'json', $context);
            $data['status'] = $object->getStatus();
            $data['ahead_by'] = $object->getAheadBy();
            $data['behind_by'] = $object->getBehindBy();
            $data['total_commits'] = $object->getTotalCommits();
            $values = [];
            foreach ($object->getCommits() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['commits'] = $values;
            $values_1 = [];
            foreach ($object->getFiles() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['files'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CommitComparisonConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\CommitComparison' => false];
        }
    }
} else {
    class CommitComparisonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\CommitComparison';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\CommitComparison';
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
            $object = new \Github\Model\CommitComparison();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CommitComparisonConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            if (\array_key_exists('permalink_url', $data)) {
                $object->setPermalinkUrl($data['permalink_url']);
                unset($data['permalink_url']);
            }
            if (\array_key_exists('diff_url', $data)) {
                $object->setDiffUrl($data['diff_url']);
                unset($data['diff_url']);
            }
            if (\array_key_exists('patch_url', $data)) {
                $object->setPatchUrl($data['patch_url']);
                unset($data['patch_url']);
            }
            if (\array_key_exists('base_commit', $data)) {
                $object->setBaseCommit($this->denormalizer->denormalize($data['base_commit'], 'Github\\Model\\Commit', 'json', $context));
                unset($data['base_commit']);
            }
            if (\array_key_exists('merge_base_commit', $data)) {
                $object->setMergeBaseCommit($this->denormalizer->denormalize($data['merge_base_commit'], 'Github\\Model\\Commit', 'json', $context));
                unset($data['merge_base_commit']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('ahead_by', $data)) {
                $object->setAheadBy($data['ahead_by']);
                unset($data['ahead_by']);
            }
            if (\array_key_exists('behind_by', $data)) {
                $object->setBehindBy($data['behind_by']);
                unset($data['behind_by']);
            }
            if (\array_key_exists('total_commits', $data)) {
                $object->setTotalCommits($data['total_commits']);
                unset($data['total_commits']);
            }
            if (\array_key_exists('commits', $data)) {
                $values = [];
                foreach ($data['commits'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\Commit', 'json', $context);
                }
                $object->setCommits($values);
                unset($data['commits']);
            }
            if (\array_key_exists('files', $data)) {
                $values_1 = [];
                foreach ($data['files'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\DiffEntry', 'json', $context);
                }
                $object->setFiles($values_1);
                unset($data['files']);
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
            $data['url'] = $object->getUrl();
            $data['html_url'] = $object->getHtmlUrl();
            $data['permalink_url'] = $object->getPermalinkUrl();
            $data['diff_url'] = $object->getDiffUrl();
            $data['patch_url'] = $object->getPatchUrl();
            $data['base_commit'] = $this->normalizer->normalize($object->getBaseCommit(), 'json', $context);
            $data['merge_base_commit'] = $this->normalizer->normalize($object->getMergeBaseCommit(), 'json', $context);
            $data['status'] = $object->getStatus();
            $data['ahead_by'] = $object->getAheadBy();
            $data['behind_by'] = $object->getBehindBy();
            $data['total_commits'] = $object->getTotalCommits();
            $values = [];
            foreach ($object->getCommits() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['commits'] = $values;
            $values_1 = [];
            foreach ($object->getFiles() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['files'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CommitComparisonConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\CommitComparison' => false];
        }
    }
}