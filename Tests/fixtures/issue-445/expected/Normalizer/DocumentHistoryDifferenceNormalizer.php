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
    class DocumentHistoryDifferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\DocumentHistoryDifference';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DocumentHistoryDifference';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\DocumentHistoryDifference();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('documentId', $data) && $data['documentId'] !== null) {
                $object->setDocumentId($data['documentId']);
            }
            elseif (\array_key_exists('documentId', $data) && $data['documentId'] === null) {
                $object->setDocumentId(null);
            }
            if (\array_key_exists('oldDocumentVersion', $data)) {
                $object->setOldDocumentVersion($data['oldDocumentVersion']);
            }
            if (\array_key_exists('newDocumentVersion', $data)) {
                $object->setNewDocumentVersion($data['newDocumentVersion']);
            }
            if (\array_key_exists('patch', $data) && $data['patch'] !== null) {
                $object->setPatch($data['patch']);
            }
            elseif (\array_key_exists('patch', $data) && $data['patch'] === null) {
                $object->setPatch(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('documentId') && null !== $object->getDocumentId()) {
                $data['documentId'] = $object->getDocumentId();
            }
            $data['oldDocumentVersion'] = $object->getOldDocumentVersion();
            $data['newDocumentVersion'] = $object->getNewDocumentVersion();
            if ($object->isInitialized('patch') && null !== $object->getPatch()) {
                $data['patch'] = $object->getPatch();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\DocumentHistoryDifference' => false];
        }
    }
} else {
    class DocumentHistoryDifferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\DocumentHistoryDifference';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DocumentHistoryDifference';
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
            $object = new \PicturePark\API\Model\DocumentHistoryDifference();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('documentId', $data) && $data['documentId'] !== null) {
                $object->setDocumentId($data['documentId']);
            }
            elseif (\array_key_exists('documentId', $data) && $data['documentId'] === null) {
                $object->setDocumentId(null);
            }
            if (\array_key_exists('oldDocumentVersion', $data)) {
                $object->setOldDocumentVersion($data['oldDocumentVersion']);
            }
            if (\array_key_exists('newDocumentVersion', $data)) {
                $object->setNewDocumentVersion($data['newDocumentVersion']);
            }
            if (\array_key_exists('patch', $data) && $data['patch'] !== null) {
                $object->setPatch($data['patch']);
            }
            elseif (\array_key_exists('patch', $data) && $data['patch'] === null) {
                $object->setPatch(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('documentId') && null !== $object->getDocumentId()) {
                $data['documentId'] = $object->getDocumentId();
            }
            $data['oldDocumentVersion'] = $object->getOldDocumentVersion();
            $data['newDocumentVersion'] = $object->getNewDocumentVersion();
            if ($object->isInitialized('patch') && null !== $object->getPatch()) {
                $data['patch'] = $object->getPatch();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\DocumentHistoryDifference' => false];
        }
    }
}