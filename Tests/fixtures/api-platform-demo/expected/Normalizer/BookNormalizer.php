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
    class BookNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ApiPlatform\\Demo\\Model\\Book';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\Book';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ApiPlatform\Demo\Model\Book();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('isbn', $data) && $data['isbn'] !== null) {
                $object->setIsbn($data['isbn']);
                unset($data['isbn']);
            }
            elseif (\array_key_exists('isbn', $data) && $data['isbn'] === null) {
                $object->setIsbn(null);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('author', $data)) {
                $object->setAuthor($data['author']);
                unset($data['author']);
            }
            if (\array_key_exists('publicationDate', $data)) {
                $object->setPublicationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['publicationDate']));
                unset($data['publicationDate']);
            }
            if (\array_key_exists('reviews', $data)) {
                $values = [];
                foreach ($data['reviews'] as $value) {
                    $values[] = $value;
                }
                $object->setReviews($values);
                unset($data['reviews']);
            }
            if (\array_key_exists('cover', $data) && $data['cover'] !== null) {
                $object->setCover($data['cover']);
                unset($data['cover']);
            }
            elseif (\array_key_exists('cover', $data) && $data['cover'] === null) {
                $object->setCover(null);
            }
            if (\array_key_exists('archivedAt', $data) && $data['archivedAt'] !== null) {
                $object->setArchivedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['archivedAt']));
                unset($data['archivedAt']);
            }
            elseif (\array_key_exists('archivedAt', $data) && $data['archivedAt'] === null) {
                $object->setArchivedAt(null);
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
            if ($object->isInitialized('isbn') && null !== $object->getIsbn()) {
                $data['isbn'] = $object->getIsbn();
            }
            $data['title'] = $object->getTitle();
            $data['description'] = $object->getDescription();
            $data['author'] = $object->getAuthor();
            $data['publicationDate'] = $object->getPublicationDate()->format('Y-m-d\\TH:i:sP');
            if ($object->isInitialized('reviews') && null !== $object->getReviews()) {
                $values = [];
                foreach ($object->getReviews() as $value) {
                    $values[] = $value;
                }
                $data['reviews'] = $values;
            }
            if ($object->isInitialized('cover') && null !== $object->getCover()) {
                $data['cover'] = $object->getCover();
            }
            if ($object->isInitialized('archivedAt') && null !== $object->getArchivedAt()) {
                $data['archivedAt'] = $object->getArchivedAt()->format('Y-m-d\\TH:i:sP');
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ApiPlatform\\Demo\\Model\\Book' => false];
        }
    }
} else {
    class BookNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ApiPlatform\\Demo\\Model\\Book';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\Book';
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
            $object = new \ApiPlatform\Demo\Model\Book();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('isbn', $data) && $data['isbn'] !== null) {
                $object->setIsbn($data['isbn']);
                unset($data['isbn']);
            }
            elseif (\array_key_exists('isbn', $data) && $data['isbn'] === null) {
                $object->setIsbn(null);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('author', $data)) {
                $object->setAuthor($data['author']);
                unset($data['author']);
            }
            if (\array_key_exists('publicationDate', $data)) {
                $object->setPublicationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['publicationDate']));
                unset($data['publicationDate']);
            }
            if (\array_key_exists('reviews', $data)) {
                $values = [];
                foreach ($data['reviews'] as $value) {
                    $values[] = $value;
                }
                $object->setReviews($values);
                unset($data['reviews']);
            }
            if (\array_key_exists('cover', $data) && $data['cover'] !== null) {
                $object->setCover($data['cover']);
                unset($data['cover']);
            }
            elseif (\array_key_exists('cover', $data) && $data['cover'] === null) {
                $object->setCover(null);
            }
            if (\array_key_exists('archivedAt', $data) && $data['archivedAt'] !== null) {
                $object->setArchivedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['archivedAt']));
                unset($data['archivedAt']);
            }
            elseif (\array_key_exists('archivedAt', $data) && $data['archivedAt'] === null) {
                $object->setArchivedAt(null);
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
            if ($object->isInitialized('isbn') && null !== $object->getIsbn()) {
                $data['isbn'] = $object->getIsbn();
            }
            $data['title'] = $object->getTitle();
            $data['description'] = $object->getDescription();
            $data['author'] = $object->getAuthor();
            $data['publicationDate'] = $object->getPublicationDate()->format('Y-m-d\\TH:i:sP');
            if ($object->isInitialized('reviews') && null !== $object->getReviews()) {
                $values = [];
                foreach ($object->getReviews() as $value) {
                    $values[] = $value;
                }
                $data['reviews'] = $values;
            }
            if ($object->isInitialized('cover') && null !== $object->getCover()) {
                $data['cover'] = $object->getCover();
            }
            if ($object->isInitialized('archivedAt') && null !== $object->getArchivedAt()) {
                $data['archivedAt'] = $object->getArchivedAt()->format('Y-m-d\\TH:i:sP');
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ApiPlatform\\Demo\\Model\\Book' => false];
        }
    }
}