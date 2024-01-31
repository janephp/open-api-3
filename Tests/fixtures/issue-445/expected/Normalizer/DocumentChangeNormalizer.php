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
    class DocumentChangeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\DocumentChange';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DocumentChange';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\DocumentChange();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('documentName', $data) && $data['documentName'] !== null) {
                $object->setDocumentName($data['documentName']);
            }
            elseif (\array_key_exists('documentName', $data) && $data['documentName'] === null) {
                $object->setDocumentName(null);
            }
            if (\array_key_exists('documentId', $data) && $data['documentId'] !== null) {
                $object->setDocumentId($data['documentId']);
            }
            elseif (\array_key_exists('documentId', $data) && $data['documentId'] === null) {
                $object->setDocumentId(null);
            }
            if (\array_key_exists('version', $data)) {
                $object->setVersion($data['version']);
            }
            if (\array_key_exists('action', $data) && $data['action'] !== null) {
                $object->setAction($data['action']);
            }
            elseif (\array_key_exists('action', $data) && $data['action'] === null) {
                $object->setAction(null);
            }
            if (\array_key_exists('timeStamp', $data)) {
                $object->setTimeStamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timeStamp']));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('documentName') && null !== $object->getDocumentName()) {
                $data['documentName'] = $object->getDocumentName();
            }
            if ($object->isInitialized('documentId') && null !== $object->getDocumentId()) {
                $data['documentId'] = $object->getDocumentId();
            }
            $data['version'] = $object->getVersion();
            if ($object->isInitialized('action') && null !== $object->getAction()) {
                $data['action'] = $object->getAction();
            }
            $data['timeStamp'] = $object->getTimeStamp()->format('Y-m-d\\TH:i:sP');
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\DocumentChange' => false];
        }
    }
} else {
    class DocumentChangeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\DocumentChange';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DocumentChange';
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
            $object = new \PicturePark\API\Model\DocumentChange();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('documentName', $data) && $data['documentName'] !== null) {
                $object->setDocumentName($data['documentName']);
            }
            elseif (\array_key_exists('documentName', $data) && $data['documentName'] === null) {
                $object->setDocumentName(null);
            }
            if (\array_key_exists('documentId', $data) && $data['documentId'] !== null) {
                $object->setDocumentId($data['documentId']);
            }
            elseif (\array_key_exists('documentId', $data) && $data['documentId'] === null) {
                $object->setDocumentId(null);
            }
            if (\array_key_exists('version', $data)) {
                $object->setVersion($data['version']);
            }
            if (\array_key_exists('action', $data) && $data['action'] !== null) {
                $object->setAction($data['action']);
            }
            elseif (\array_key_exists('action', $data) && $data['action'] === null) {
                $object->setAction(null);
            }
            if (\array_key_exists('timeStamp', $data)) {
                $object->setTimeStamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timeStamp']));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('documentName') && null !== $object->getDocumentName()) {
                $data['documentName'] = $object->getDocumentName();
            }
            if ($object->isInitialized('documentId') && null !== $object->getDocumentId()) {
                $data['documentId'] = $object->getDocumentId();
            }
            $data['version'] = $object->getVersion();
            if ($object->isInitialized('action') && null !== $object->getAction()) {
                $data['action'] = $object->getAction();
            }
            $data['timeStamp'] = $object->getTimeStamp()->format('Y-m-d\\TH:i:sP');
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\DocumentChange' => false];
        }
    }
}