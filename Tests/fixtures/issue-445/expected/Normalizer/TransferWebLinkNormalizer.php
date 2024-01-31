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
    class TransferWebLinkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\TransferWebLink';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\TransferWebLink';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\TransferWebLink();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('identifier', $data) && $data['identifier'] !== null) {
                $object->setIdentifier($data['identifier']);
                unset($data['identifier']);
            }
            elseif (\array_key_exists('identifier', $data) && $data['identifier'] === null) {
                $object->setIdentifier(null);
            }
            if (\array_key_exists('requestId', $data) && $data['requestId'] !== null) {
                $object->setRequestId($data['requestId']);
                unset($data['requestId']);
            }
            elseif (\array_key_exists('requestId', $data) && $data['requestId'] === null) {
                $object->setRequestId(null);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('fileName', $data) && $data['fileName'] !== null) {
                $object->setFileName($data['fileName']);
                unset($data['fileName']);
            }
            elseif (\array_key_exists('fileName', $data) && $data['fileName'] === null) {
                $object->setFileName(null);
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
            if ($object->isInitialized('identifier') && null !== $object->getIdentifier()) {
                $data['identifier'] = $object->getIdentifier();
            }
            if ($object->isInitialized('requestId') && null !== $object->getRequestId()) {
                $data['requestId'] = $object->getRequestId();
            }
            $data['url'] = $object->getUrl();
            if ($object->isInitialized('fileName') && null !== $object->getFileName()) {
                $data['fileName'] = $object->getFileName();
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
            return ['PicturePark\\API\\Model\\TransferWebLink' => false];
        }
    }
} else {
    class TransferWebLinkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\TransferWebLink';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\TransferWebLink';
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
            $object = new \PicturePark\API\Model\TransferWebLink();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('identifier', $data) && $data['identifier'] !== null) {
                $object->setIdentifier($data['identifier']);
                unset($data['identifier']);
            }
            elseif (\array_key_exists('identifier', $data) && $data['identifier'] === null) {
                $object->setIdentifier(null);
            }
            if (\array_key_exists('requestId', $data) && $data['requestId'] !== null) {
                $object->setRequestId($data['requestId']);
                unset($data['requestId']);
            }
            elseif (\array_key_exists('requestId', $data) && $data['requestId'] === null) {
                $object->setRequestId(null);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('fileName', $data) && $data['fileName'] !== null) {
                $object->setFileName($data['fileName']);
                unset($data['fileName']);
            }
            elseif (\array_key_exists('fileName', $data) && $data['fileName'] === null) {
                $object->setFileName(null);
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
            if ($object->isInitialized('identifier') && null !== $object->getIdentifier()) {
                $data['identifier'] = $object->getIdentifier();
            }
            if ($object->isInitialized('requestId') && null !== $object->getRequestId()) {
                $data['requestId'] = $object->getRequestId();
            }
            $data['url'] = $object->getUrl();
            if ($object->isInitialized('fileName') && null !== $object->getFileName()) {
                $data['fileName'] = $object->getFileName();
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
            return ['PicturePark\\API\\Model\\TransferWebLink' => false];
        }
    }
}