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
    class BusinessProcessNotificationUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\BusinessProcessNotificationUpdate';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessProcessNotificationUpdate';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\BusinessProcessNotificationUpdate();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
            }
            if (\array_key_exists('navigationLink', $data) && $data['navigationLink'] !== null) {
                $object->setNavigationLink($data['navigationLink']);
            }
            elseif (\array_key_exists('navigationLink', $data) && $data['navigationLink'] === null) {
                $object->setNavigationLink(null);
            }
            if (\array_key_exists('eventType', $data)) {
                $object->setEventType($data['eventType']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['title'] = $object->getTitle();
            $data['message'] = $object->getMessage();
            if ($object->isInitialized('navigationLink') && null !== $object->getNavigationLink()) {
                $data['navigationLink'] = $object->getNavigationLink();
            }
            $data['eventType'] = $object->getEventType();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\BusinessProcessNotificationUpdate' => false];
        }
    }
} else {
    class BusinessProcessNotificationUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\BusinessProcessNotificationUpdate';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessProcessNotificationUpdate';
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
            $object = new \PicturePark\API\Model\BusinessProcessNotificationUpdate();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
            }
            if (\array_key_exists('navigationLink', $data) && $data['navigationLink'] !== null) {
                $object->setNavigationLink($data['navigationLink']);
            }
            elseif (\array_key_exists('navigationLink', $data) && $data['navigationLink'] === null) {
                $object->setNavigationLink(null);
            }
            if (\array_key_exists('eventType', $data)) {
                $object->setEventType($data['eventType']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['title'] = $object->getTitle();
            $data['message'] = $object->getMessage();
            if ($object->isInitialized('navigationLink') && null !== $object->getNavigationLink()) {
                $data['navigationLink'] = $object->getNavigationLink();
            }
            $data['eventType'] = $object->getEventType();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\BusinessProcessNotificationUpdate' => false];
        }
    }
}