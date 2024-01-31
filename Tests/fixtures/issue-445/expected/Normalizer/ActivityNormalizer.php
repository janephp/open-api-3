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
    class ActivityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\Activity';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Activity';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\Activity();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('creationDate', $data) && $data['creationDate'] !== null) {
                $object->setCreationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['creationDate']));
            }
            elseif (\array_key_exists('creationDate', $data) && $data['creationDate'] === null) {
                $object->setCreationDate(null);
            }
            if (\array_key_exists('modificationDate', $data) && $data['modificationDate'] !== null) {
                $object->setModificationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['modificationDate']));
            }
            elseif (\array_key_exists('modificationDate', $data) && $data['modificationDate'] === null) {
                $object->setModificationDate(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('creationDate') && null !== $object->getCreationDate()) {
                $data['creationDate'] = $object->getCreationDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('modificationDate') && null !== $object->getModificationDate()) {
                $data['modificationDate'] = $object->getModificationDate()->format('Y-m-d\\TH:i:sP');
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\Activity' => false];
        }
    }
} else {
    class ActivityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\Activity';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Activity';
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
            $object = new \PicturePark\API\Model\Activity();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('creationDate', $data) && $data['creationDate'] !== null) {
                $object->setCreationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['creationDate']));
            }
            elseif (\array_key_exists('creationDate', $data) && $data['creationDate'] === null) {
                $object->setCreationDate(null);
            }
            if (\array_key_exists('modificationDate', $data) && $data['modificationDate'] !== null) {
                $object->setModificationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['modificationDate']));
            }
            elseif (\array_key_exists('modificationDate', $data) && $data['modificationDate'] === null) {
                $object->setModificationDate(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('creationDate') && null !== $object->getCreationDate()) {
                $data['creationDate'] = $object->getCreationDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('modificationDate') && null !== $object->getModificationDate()) {
                $data['modificationDate'] = $object->getModificationDate()->format('Y-m-d\\TH:i:sP');
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\Activity' => false];
        }
    }
}