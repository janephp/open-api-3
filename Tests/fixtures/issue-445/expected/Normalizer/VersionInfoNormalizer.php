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
    class VersionInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\VersionInfo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\VersionInfo';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\VersionInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fileVersion', $data) && $data['fileVersion'] !== null) {
                $object->setFileVersion($data['fileVersion']);
            }
            elseif (\array_key_exists('fileVersion', $data) && $data['fileVersion'] === null) {
                $object->setFileVersion(null);
            }
            if (\array_key_exists('fileProductVersion', $data) && $data['fileProductVersion'] !== null) {
                $object->setFileProductVersion($data['fileProductVersion']);
            }
            elseif (\array_key_exists('fileProductVersion', $data) && $data['fileProductVersion'] === null) {
                $object->setFileProductVersion(null);
            }
            if (\array_key_exists('contractVersion', $data) && $data['contractVersion'] !== null) {
                $object->setContractVersion($data['contractVersion']);
            }
            elseif (\array_key_exists('contractVersion', $data) && $data['contractVersion'] === null) {
                $object->setContractVersion(null);
            }
            if (\array_key_exists('release', $data) && $data['release'] !== null) {
                $object->setRelease($data['release']);
            }
            elseif (\array_key_exists('release', $data) && $data['release'] === null) {
                $object->setRelease(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('fileVersion') && null !== $object->getFileVersion()) {
                $data['fileVersion'] = $object->getFileVersion();
            }
            if ($object->isInitialized('fileProductVersion') && null !== $object->getFileProductVersion()) {
                $data['fileProductVersion'] = $object->getFileProductVersion();
            }
            if ($object->isInitialized('contractVersion') && null !== $object->getContractVersion()) {
                $data['contractVersion'] = $object->getContractVersion();
            }
            if ($object->isInitialized('release') && null !== $object->getRelease()) {
                $data['release'] = $object->getRelease();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\VersionInfo' => false];
        }
    }
} else {
    class VersionInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\VersionInfo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\VersionInfo';
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
            $object = new \PicturePark\API\Model\VersionInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fileVersion', $data) && $data['fileVersion'] !== null) {
                $object->setFileVersion($data['fileVersion']);
            }
            elseif (\array_key_exists('fileVersion', $data) && $data['fileVersion'] === null) {
                $object->setFileVersion(null);
            }
            if (\array_key_exists('fileProductVersion', $data) && $data['fileProductVersion'] !== null) {
                $object->setFileProductVersion($data['fileProductVersion']);
            }
            elseif (\array_key_exists('fileProductVersion', $data) && $data['fileProductVersion'] === null) {
                $object->setFileProductVersion(null);
            }
            if (\array_key_exists('contractVersion', $data) && $data['contractVersion'] !== null) {
                $object->setContractVersion($data['contractVersion']);
            }
            elseif (\array_key_exists('contractVersion', $data) && $data['contractVersion'] === null) {
                $object->setContractVersion(null);
            }
            if (\array_key_exists('release', $data) && $data['release'] !== null) {
                $object->setRelease($data['release']);
            }
            elseif (\array_key_exists('release', $data) && $data['release'] === null) {
                $object->setRelease(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('fileVersion') && null !== $object->getFileVersion()) {
                $data['fileVersion'] = $object->getFileVersion();
            }
            if ($object->isInitialized('fileProductVersion') && null !== $object->getFileProductVersion()) {
                $data['fileProductVersion'] = $object->getFileProductVersion();
            }
            if ($object->isInitialized('contractVersion') && null !== $object->getContractVersion()) {
                $data['contractVersion'] = $object->getContractVersion();
            }
            if ($object->isInitialized('release') && null !== $object->getRelease()) {
                $data['release'] = $object->getRelease();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\VersionInfo' => false];
        }
    }
}