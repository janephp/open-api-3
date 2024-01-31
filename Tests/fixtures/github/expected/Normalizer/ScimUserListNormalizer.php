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
    class ScimUserListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ScimUserList';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ScimUserList';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ScimUserList();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimUserListConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('schemas', $data)) {
                $values = [];
                foreach ($data['schemas'] as $value) {
                    $values[] = $value;
                }
                $object->setSchemas($values);
                unset($data['schemas']);
            }
            if (\array_key_exists('totalResults', $data)) {
                $object->setTotalResults($data['totalResults']);
                unset($data['totalResults']);
            }
            if (\array_key_exists('itemsPerPage', $data)) {
                $object->setItemsPerPage($data['itemsPerPage']);
                unset($data['itemsPerPage']);
            }
            if (\array_key_exists('startIndex', $data)) {
                $object->setStartIndex($data['startIndex']);
                unset($data['startIndex']);
            }
            if (\array_key_exists('Resources', $data)) {
                $values_1 = [];
                foreach ($data['Resources'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\ScimUser', 'json', $context);
                }
                $object->setResources($values_1);
                unset($data['Resources']);
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
            $values = [];
            foreach ($object->getSchemas() as $value) {
                $values[] = $value;
            }
            $data['schemas'] = $values;
            $data['totalResults'] = $object->getTotalResults();
            $data['itemsPerPage'] = $object->getItemsPerPage();
            $data['startIndex'] = $object->getStartIndex();
            $values_1 = [];
            foreach ($object->getResources() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Resources'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimUserListConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ScimUserList' => false];
        }
    }
} else {
    class ScimUserListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ScimUserList';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ScimUserList';
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
            $object = new \Github\Model\ScimUserList();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimUserListConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('schemas', $data)) {
                $values = [];
                foreach ($data['schemas'] as $value) {
                    $values[] = $value;
                }
                $object->setSchemas($values);
                unset($data['schemas']);
            }
            if (\array_key_exists('totalResults', $data)) {
                $object->setTotalResults($data['totalResults']);
                unset($data['totalResults']);
            }
            if (\array_key_exists('itemsPerPage', $data)) {
                $object->setItemsPerPage($data['itemsPerPage']);
                unset($data['itemsPerPage']);
            }
            if (\array_key_exists('startIndex', $data)) {
                $object->setStartIndex($data['startIndex']);
                unset($data['startIndex']);
            }
            if (\array_key_exists('Resources', $data)) {
                $values_1 = [];
                foreach ($data['Resources'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\ScimUser', 'json', $context);
                }
                $object->setResources($values_1);
                unset($data['Resources']);
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
            $values = [];
            foreach ($object->getSchemas() as $value) {
                $values[] = $value;
            }
            $data['schemas'] = $values;
            $data['totalResults'] = $object->getTotalResults();
            $data['itemsPerPage'] = $object->getItemsPerPage();
            $data['startIndex'] = $object->getStartIndex();
            $values_1 = [];
            foreach ($object->getResources() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Resources'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimUserListConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ScimUserList' => false];
        }
    }
}