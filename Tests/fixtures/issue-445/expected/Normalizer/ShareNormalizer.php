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
    class ShareNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\Share';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Share';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\Share();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('contentIds', $data)) {
                $values = [];
                foreach ($data['contentIds'] as $value) {
                    $values[] = $value;
                }
                $object->setContentIds($values);
            }
            if (\array_key_exists('audit', $data)) {
                $object->setAudit($data['audit']);
            }
            if (\array_key_exists('expirationDate', $data) && $data['expirationDate'] !== null) {
                $object->setExpirationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['expirationDate']));
            }
            elseif (\array_key_exists('expirationDate', $data) && $data['expirationDate'] === null) {
                $object->setExpirationDate(null);
            }
            if (\array_key_exists('shareType', $data)) {
                $object->setShareType($data['shareType']);
            }
            if (\array_key_exists('isReadOnly', $data)) {
                $object->setIsReadOnly($data['isReadOnly']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            $values = [];
            foreach ($object->getContentIds() as $value) {
                $values[] = $value;
            }
            $data['contentIds'] = $values;
            $data['audit'] = $object->getAudit();
            if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
                $data['expirationDate'] = $object->getExpirationDate()->format('Y-m-d\\TH:i:sP');
            }
            $data['shareType'] = $object->getShareType();
            $data['isReadOnly'] = $object->getIsReadOnly();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\Share' => false];
        }
    }
} else {
    class ShareNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\Share';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Share';
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
            $object = new \PicturePark\API\Model\Share();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('contentIds', $data)) {
                $values = [];
                foreach ($data['contentIds'] as $value) {
                    $values[] = $value;
                }
                $object->setContentIds($values);
            }
            if (\array_key_exists('audit', $data)) {
                $object->setAudit($data['audit']);
            }
            if (\array_key_exists('expirationDate', $data) && $data['expirationDate'] !== null) {
                $object->setExpirationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['expirationDate']));
            }
            elseif (\array_key_exists('expirationDate', $data) && $data['expirationDate'] === null) {
                $object->setExpirationDate(null);
            }
            if (\array_key_exists('shareType', $data)) {
                $object->setShareType($data['shareType']);
            }
            if (\array_key_exists('isReadOnly', $data)) {
                $object->setIsReadOnly($data['isReadOnly']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            $values = [];
            foreach ($object->getContentIds() as $value) {
                $values[] = $value;
            }
            $data['contentIds'] = $values;
            $data['audit'] = $object->getAudit();
            if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
                $data['expirationDate'] = $object->getExpirationDate()->format('Y-m-d\\TH:i:sP');
            }
            $data['shareType'] = $object->getShareType();
            $data['isReadOnly'] = $object->getIsReadOnly();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\Share' => false];
        }
    }
}