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
    class TopBooksGetHaljsonResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('_embedded', $data)) {
                $values = [];
                foreach ($data['_embedded'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ApiPlatform\\Demo\\Model\\TopBookJsonhal', 'json', $context);
                }
                $object->setEmbedded($values);
                unset($data['_embedded']);
            }
            if (\array_key_exists('totalItems', $data)) {
                $object->setTotalItems($data['totalItems']);
                unset($data['totalItems']);
            }
            if (\array_key_exists('itemsPerPage', $data)) {
                $object->setItemsPerPage($data['itemsPerPage']);
                unset($data['itemsPerPage']);
            }
            if (\array_key_exists('_links', $data)) {
                $object->setLinks($this->denormalizer->denormalize($data['_links'], 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200Links', 'json', $context));
                unset($data['_links']);
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
            $values = [];
            foreach ($object->getEmbedded() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['_embedded'] = $values;
            if ($object->isInitialized('totalItems') && null !== $object->getTotalItems()) {
                $data['totalItems'] = $object->getTotalItems();
            }
            if ($object->isInitialized('itemsPerPage') && null !== $object->getItemsPerPage()) {
                $data['itemsPerPage'] = $object->getItemsPerPage();
            }
            $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200' => false];
        }
    }
} else {
    class TopBooksGetHaljsonResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200';
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
            $object = new \ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('_embedded', $data)) {
                $values = [];
                foreach ($data['_embedded'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ApiPlatform\\Demo\\Model\\TopBookJsonhal', 'json', $context);
                }
                $object->setEmbedded($values);
                unset($data['_embedded']);
            }
            if (\array_key_exists('totalItems', $data)) {
                $object->setTotalItems($data['totalItems']);
                unset($data['totalItems']);
            }
            if (\array_key_exists('itemsPerPage', $data)) {
                $object->setItemsPerPage($data['itemsPerPage']);
                unset($data['itemsPerPage']);
            }
            if (\array_key_exists('_links', $data)) {
                $object->setLinks($this->denormalizer->denormalize($data['_links'], 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200Links', 'json', $context));
                unset($data['_links']);
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
            $values = [];
            foreach ($object->getEmbedded() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['_embedded'] = $values;
            if ($object->isInitialized('totalItems') && null !== $object->getTotalItems()) {
                $data['totalItems'] = $object->getTotalItems();
            }
            if ($object->isInitialized('itemsPerPage') && null !== $object->getItemsPerPage()) {
                $data['itemsPerPage'] = $object->getItemsPerPage();
            }
            $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200' => false];
        }
    }
}