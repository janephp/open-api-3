<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class UserRoleAssignManyRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\UserRoleAssignManyRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\UserRoleAssignManyRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\UserRoleAssignManyRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('userIds', $data)) {
                $values = [];
                foreach ($data['userIds'] as $value) {
                    $values[] = $value;
                }
                $object->setUserIds($values);
                unset($data['userIds']);
            }
            if (\array_key_exists('userRoleIds', $data)) {
                $values_1 = [];
                foreach ($data['userRoleIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setUserRoleIds($values_1);
                unset($data['userRoleIds']);
            }
            if (\array_key_exists('operation', $data)) {
                $object->setOperation($data['operation']);
                unset($data['operation']);
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
            foreach ($object->getUserIds() as $value) {
                $values[] = $value;
            }
            $data['userIds'] = $values;
            $values_1 = [];
            foreach ($object->getUserRoleIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['userRoleIds'] = $values_1;
            $data['operation'] = $object->getOperation();
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\UserRoleAssignManyRequest' => false];
        }
    }
} else {
    class UserRoleAssignManyRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\UserRoleAssignManyRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\UserRoleAssignManyRequest';
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
            $object = new \PicturePark\API\Model\UserRoleAssignManyRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('userIds', $data)) {
                $values = [];
                foreach ($data['userIds'] as $value) {
                    $values[] = $value;
                }
                $object->setUserIds($values);
                unset($data['userIds']);
            }
            if (\array_key_exists('userRoleIds', $data)) {
                $values_1 = [];
                foreach ($data['userRoleIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setUserRoleIds($values_1);
                unset($data['userRoleIds']);
            }
            if (\array_key_exists('operation', $data)) {
                $object->setOperation($data['operation']);
                unset($data['operation']);
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
            foreach ($object->getUserIds() as $value) {
                $values[] = $value;
            }
            $data['userIds'] = $values;
            $values_1 = [];
            foreach ($object->getUserRoleIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['userRoleIds'] = $values_1;
            $data['operation'] = $object->getOperation();
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\UserRoleAssignManyRequest' => false];
        }
    }
}