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
    class CommitCommitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\CommitCommit';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\CommitCommit';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\CommitCommit();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CommitCommitConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('author', $data) && $data['author'] !== null) {
                $object->setAuthor($this->denormalizer->denormalize($data['author'], 'Github\\Model\\CommitCommitAuthor', 'json', $context));
                unset($data['author']);
            }
            elseif (\array_key_exists('author', $data) && $data['author'] === null) {
                $object->setAuthor(null);
            }
            if (\array_key_exists('committer', $data) && $data['committer'] !== null) {
                $object->setCommitter($this->denormalizer->denormalize($data['committer'], 'Github\\Model\\CommitCommitCommitter', 'json', $context));
                unset($data['committer']);
            }
            elseif (\array_key_exists('committer', $data) && $data['committer'] === null) {
                $object->setCommitter(null);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            if (\array_key_exists('comment_count', $data)) {
                $object->setCommentCount($data['comment_count']);
                unset($data['comment_count']);
            }
            if (\array_key_exists('tree', $data)) {
                $object->setTree($this->denormalizer->denormalize($data['tree'], 'Github\\Model\\CommitCommitTree', 'json', $context));
                unset($data['tree']);
            }
            if (\array_key_exists('verification', $data)) {
                $object->setVerification($this->denormalizer->denormalize($data['verification'], 'Github\\Model\\Verification', 'json', $context));
                unset($data['verification']);
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
            $data['url'] = $object->getUrl();
            $data['author'] = $this->normalizer->normalize($object->getAuthor(), 'json', $context);
            $data['committer'] = $this->normalizer->normalize($object->getCommitter(), 'json', $context);
            $data['message'] = $object->getMessage();
            $data['comment_count'] = $object->getCommentCount();
            $data['tree'] = $this->normalizer->normalize($object->getTree(), 'json', $context);
            if ($object->isInitialized('verification') && null !== $object->getVerification()) {
                $data['verification'] = $this->normalizer->normalize($object->getVerification(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CommitCommitConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\CommitCommit' => false];
        }
    }
} else {
    class CommitCommitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\CommitCommit';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\CommitCommit';
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
            $object = new \Github\Model\CommitCommit();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CommitCommitConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('author', $data) && $data['author'] !== null) {
                $object->setAuthor($this->denormalizer->denormalize($data['author'], 'Github\\Model\\CommitCommitAuthor', 'json', $context));
                unset($data['author']);
            }
            elseif (\array_key_exists('author', $data) && $data['author'] === null) {
                $object->setAuthor(null);
            }
            if (\array_key_exists('committer', $data) && $data['committer'] !== null) {
                $object->setCommitter($this->denormalizer->denormalize($data['committer'], 'Github\\Model\\CommitCommitCommitter', 'json', $context));
                unset($data['committer']);
            }
            elseif (\array_key_exists('committer', $data) && $data['committer'] === null) {
                $object->setCommitter(null);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            if (\array_key_exists('comment_count', $data)) {
                $object->setCommentCount($data['comment_count']);
                unset($data['comment_count']);
            }
            if (\array_key_exists('tree', $data)) {
                $object->setTree($this->denormalizer->denormalize($data['tree'], 'Github\\Model\\CommitCommitTree', 'json', $context));
                unset($data['tree']);
            }
            if (\array_key_exists('verification', $data)) {
                $object->setVerification($this->denormalizer->denormalize($data['verification'], 'Github\\Model\\Verification', 'json', $context));
                unset($data['verification']);
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
            $data['url'] = $object->getUrl();
            $data['author'] = $this->normalizer->normalize($object->getAuthor(), 'json', $context);
            $data['committer'] = $this->normalizer->normalize($object->getCommitter(), 'json', $context);
            $data['message'] = $object->getMessage();
            $data['comment_count'] = $object->getCommentCount();
            $data['tree'] = $this->normalizer->normalize($object->getTree(), 'json', $context);
            if ($object->isInitialized('verification') && null !== $object->getVerification()) {
                $data['verification'] = $this->normalizer->normalize($object->getVerification(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CommitCommitConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\CommitCommit' => false];
        }
    }
}