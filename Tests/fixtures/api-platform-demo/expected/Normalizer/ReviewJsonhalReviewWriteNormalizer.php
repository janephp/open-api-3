<?php

namespace ApiPlatform\Demo\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ApiPlatform\Demo\Runtime\Normalizer\CheckArray;
use ApiPlatform\Demo\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ReviewJsonhalReviewWriteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWrite';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWrite';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ApiPlatform\Demo\Model\ReviewJsonhalReviewWrite();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('_links', $data)) {
                $object->setLinks($this->denormalizer->denormalize($data['_links'], 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWriteLinks', 'json', $context));
                unset($data['_links']);
            }
            if (\array_key_exists('body', $data)) {
                $object->setBody($data['body']);
                unset($data['body']);
            }
            if (\array_key_exists('rating', $data)) {
                $object->setRating($data['rating']);
                unset($data['rating']);
            }
            if (\array_key_exists('letter', $data) && $data['letter'] !== null) {
                $object->setLetter($data['letter']);
                unset($data['letter']);
            }
            elseif (\array_key_exists('letter', $data) && $data['letter'] === null) {
                $object->setLetter(null);
            }
            if (\array_key_exists('book', $data)) {
                $object->setBook($data['book']);
                unset($data['book']);
            }
            if (\array_key_exists('author', $data) && $data['author'] !== null) {
                $object->setAuthor($data['author']);
                unset($data['author']);
            }
            elseif (\array_key_exists('author', $data) && $data['author'] === null) {
                $object->setAuthor(null);
            }
            if (\array_key_exists('publicationDate', $data) && $data['publicationDate'] !== null) {
                $object->setPublicationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['publicationDate']));
                unset($data['publicationDate']);
            }
            elseif (\array_key_exists('publicationDate', $data) && $data['publicationDate'] === null) {
                $object->setPublicationDate(null);
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
            if ($object->isInitialized('links') && null !== $object->getLinks()) {
                $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
            }
            $data['body'] = $object->getBody();
            $data['rating'] = $object->getRating();
            if ($object->isInitialized('letter') && null !== $object->getLetter()) {
                $data['letter'] = $object->getLetter();
            }
            $data['book'] = $object->getBook();
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['author'] = $object->getAuthor();
            }
            if ($object->isInitialized('publicationDate') && null !== $object->getPublicationDate()) {
                $data['publicationDate'] = $object->getPublicationDate()->format('Y-m-d\\TH:i:sP');
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWrite' => false];
        }
    }
} else {
    class ReviewJsonhalReviewWriteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWrite';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWrite';
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
            $object = new \ApiPlatform\Demo\Model\ReviewJsonhalReviewWrite();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('_links', $data)) {
                $object->setLinks($this->denormalizer->denormalize($data['_links'], 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWriteLinks', 'json', $context));
                unset($data['_links']);
            }
            if (\array_key_exists('body', $data)) {
                $object->setBody($data['body']);
                unset($data['body']);
            }
            if (\array_key_exists('rating', $data)) {
                $object->setRating($data['rating']);
                unset($data['rating']);
            }
            if (\array_key_exists('letter', $data) && $data['letter'] !== null) {
                $object->setLetter($data['letter']);
                unset($data['letter']);
            }
            elseif (\array_key_exists('letter', $data) && $data['letter'] === null) {
                $object->setLetter(null);
            }
            if (\array_key_exists('book', $data)) {
                $object->setBook($data['book']);
                unset($data['book']);
            }
            if (\array_key_exists('author', $data) && $data['author'] !== null) {
                $object->setAuthor($data['author']);
                unset($data['author']);
            }
            elseif (\array_key_exists('author', $data) && $data['author'] === null) {
                $object->setAuthor(null);
            }
            if (\array_key_exists('publicationDate', $data) && $data['publicationDate'] !== null) {
                $object->setPublicationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['publicationDate']));
                unset($data['publicationDate']);
            }
            elseif (\array_key_exists('publicationDate', $data) && $data['publicationDate'] === null) {
                $object->setPublicationDate(null);
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
            if ($object->isInitialized('links') && null !== $object->getLinks()) {
                $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
            }
            $data['body'] = $object->getBody();
            $data['rating'] = $object->getRating();
            if ($object->isInitialized('letter') && null !== $object->getLetter()) {
                $data['letter'] = $object->getLetter();
            }
            $data['book'] = $object->getBook();
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['author'] = $object->getAuthor();
            }
            if ($object->isInitialized('publicationDate') && null !== $object->getPublicationDate()) {
                $data['publicationDate'] = $object->getPublicationDate()->format('Y-m-d\\TH:i:sP');
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWrite' => false];
        }
    }
}