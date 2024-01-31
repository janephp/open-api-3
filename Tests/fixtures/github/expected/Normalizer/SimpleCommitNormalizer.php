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
    class SimpleCommitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\SimpleCommit';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\SimpleCommit';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\SimpleCommit();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\SimpleCommitConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('tree_id', $data)) {
                $object->setTreeId($data['tree_id']);
                unset($data['tree_id']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            if (\array_key_exists('timestamp', $data)) {
                $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timestamp']));
                unset($data['timestamp']);
            }
            if (\array_key_exists('author', $data) && $data['author'] !== null) {
                $object->setAuthor($this->denormalizer->denormalize($data['author'], 'Github\\Model\\SimpleCommitAuthor', 'json', $context));
                unset($data['author']);
            }
            elseif (\array_key_exists('author', $data) && $data['author'] === null) {
                $object->setAuthor(null);
            }
            if (\array_key_exists('committer', $data) && $data['committer'] !== null) {
                $object->setCommitter($this->denormalizer->denormalize($data['committer'], 'Github\\Model\\SimpleCommitCommitter', 'json', $context));
                unset($data['committer']);
            }
            elseif (\array_key_exists('committer', $data) && $data['committer'] === null) {
                $object->setCommitter(null);
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
            $data['id'] = $object->getId();
            $data['tree_id'] = $object->getTreeId();
            $data['message'] = $object->getMessage();
            $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\\TH:i:sP');
            $data['author'] = $this->normalizer->normalize($object->getAuthor(), 'json', $context);
            $data['committer'] = $this->normalizer->normalize($object->getCommitter(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\SimpleCommitConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\SimpleCommit' => false];
        }
    }
} else {
    class SimpleCommitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\SimpleCommit';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\SimpleCommit';
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
            $object = new \Github\Model\SimpleCommit();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\SimpleCommitConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('tree_id', $data)) {
                $object->setTreeId($data['tree_id']);
                unset($data['tree_id']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            if (\array_key_exists('timestamp', $data)) {
                $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timestamp']));
                unset($data['timestamp']);
            }
            if (\array_key_exists('author', $data) && $data['author'] !== null) {
                $object->setAuthor($this->denormalizer->denormalize($data['author'], 'Github\\Model\\SimpleCommitAuthor', 'json', $context));
                unset($data['author']);
            }
            elseif (\array_key_exists('author', $data) && $data['author'] === null) {
                $object->setAuthor(null);
            }
            if (\array_key_exists('committer', $data) && $data['committer'] !== null) {
                $object->setCommitter($this->denormalizer->denormalize($data['committer'], 'Github\\Model\\SimpleCommitCommitter', 'json', $context));
                unset($data['committer']);
            }
            elseif (\array_key_exists('committer', $data) && $data['committer'] === null) {
                $object->setCommitter(null);
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
            $data['id'] = $object->getId();
            $data['tree_id'] = $object->getTreeId();
            $data['message'] = $object->getMessage();
            $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\\TH:i:sP');
            $data['author'] = $this->normalizer->normalize($object->getAuthor(), 'json', $context);
            $data['committer'] = $this->normalizer->normalize($object->getCommitter(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\SimpleCommitConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\SimpleCommit' => false];
        }
    }
}