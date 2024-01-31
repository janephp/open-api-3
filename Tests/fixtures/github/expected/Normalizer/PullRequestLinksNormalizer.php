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
    class PullRequestLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\PullRequestLinks';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\PullRequestLinks';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\PullRequestLinks();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\PullRequestLinksConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($this->denormalizer->denormalize($data['comments'], 'Github\\Model\\Link', 'json', $context));
                unset($data['comments']);
            }
            if (\array_key_exists('commits', $data)) {
                $object->setCommits($this->denormalizer->denormalize($data['commits'], 'Github\\Model\\Link', 'json', $context));
                unset($data['commits']);
            }
            if (\array_key_exists('statuses', $data)) {
                $object->setStatuses($this->denormalizer->denormalize($data['statuses'], 'Github\\Model\\Link', 'json', $context));
                unset($data['statuses']);
            }
            if (\array_key_exists('html', $data)) {
                $object->setHtml($this->denormalizer->denormalize($data['html'], 'Github\\Model\\Link', 'json', $context));
                unset($data['html']);
            }
            if (\array_key_exists('issue', $data)) {
                $object->setIssue($this->denormalizer->denormalize($data['issue'], 'Github\\Model\\Link', 'json', $context));
                unset($data['issue']);
            }
            if (\array_key_exists('review_comments', $data)) {
                $object->setReviewComments($this->denormalizer->denormalize($data['review_comments'], 'Github\\Model\\Link', 'json', $context));
                unset($data['review_comments']);
            }
            if (\array_key_exists('review_comment', $data)) {
                $object->setReviewComment($this->denormalizer->denormalize($data['review_comment'], 'Github\\Model\\Link', 'json', $context));
                unset($data['review_comment']);
            }
            if (\array_key_exists('self', $data)) {
                $object->setSelf($this->denormalizer->denormalize($data['self'], 'Github\\Model\\Link', 'json', $context));
                unset($data['self']);
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
            $data['comments'] = $this->normalizer->normalize($object->getComments(), 'json', $context);
            $data['commits'] = $this->normalizer->normalize($object->getCommits(), 'json', $context);
            $data['statuses'] = $this->normalizer->normalize($object->getStatuses(), 'json', $context);
            $data['html'] = $this->normalizer->normalize($object->getHtml(), 'json', $context);
            $data['issue'] = $this->normalizer->normalize($object->getIssue(), 'json', $context);
            $data['review_comments'] = $this->normalizer->normalize($object->getReviewComments(), 'json', $context);
            $data['review_comment'] = $this->normalizer->normalize($object->getReviewComment(), 'json', $context);
            $data['self'] = $this->normalizer->normalize($object->getSelf(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\PullRequestLinksConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\PullRequestLinks' => false];
        }
    }
} else {
    class PullRequestLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\PullRequestLinks';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\PullRequestLinks';
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
            $object = new \Github\Model\PullRequestLinks();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\PullRequestLinksConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($this->denormalizer->denormalize($data['comments'], 'Github\\Model\\Link', 'json', $context));
                unset($data['comments']);
            }
            if (\array_key_exists('commits', $data)) {
                $object->setCommits($this->denormalizer->denormalize($data['commits'], 'Github\\Model\\Link', 'json', $context));
                unset($data['commits']);
            }
            if (\array_key_exists('statuses', $data)) {
                $object->setStatuses($this->denormalizer->denormalize($data['statuses'], 'Github\\Model\\Link', 'json', $context));
                unset($data['statuses']);
            }
            if (\array_key_exists('html', $data)) {
                $object->setHtml($this->denormalizer->denormalize($data['html'], 'Github\\Model\\Link', 'json', $context));
                unset($data['html']);
            }
            if (\array_key_exists('issue', $data)) {
                $object->setIssue($this->denormalizer->denormalize($data['issue'], 'Github\\Model\\Link', 'json', $context));
                unset($data['issue']);
            }
            if (\array_key_exists('review_comments', $data)) {
                $object->setReviewComments($this->denormalizer->denormalize($data['review_comments'], 'Github\\Model\\Link', 'json', $context));
                unset($data['review_comments']);
            }
            if (\array_key_exists('review_comment', $data)) {
                $object->setReviewComment($this->denormalizer->denormalize($data['review_comment'], 'Github\\Model\\Link', 'json', $context));
                unset($data['review_comment']);
            }
            if (\array_key_exists('self', $data)) {
                $object->setSelf($this->denormalizer->denormalize($data['self'], 'Github\\Model\\Link', 'json', $context));
                unset($data['self']);
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
            $data['comments'] = $this->normalizer->normalize($object->getComments(), 'json', $context);
            $data['commits'] = $this->normalizer->normalize($object->getCommits(), 'json', $context);
            $data['statuses'] = $this->normalizer->normalize($object->getStatuses(), 'json', $context);
            $data['html'] = $this->normalizer->normalize($object->getHtml(), 'json', $context);
            $data['issue'] = $this->normalizer->normalize($object->getIssue(), 'json', $context);
            $data['review_comments'] = $this->normalizer->normalize($object->getReviewComments(), 'json', $context);
            $data['review_comment'] = $this->normalizer->normalize($object->getReviewComment(), 'json', $context);
            $data['self'] = $this->normalizer->normalize($object->getSelf(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\PullRequestLinksConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\PullRequestLinks' => false];
        }
    }
}