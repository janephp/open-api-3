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
    class OutputFormatDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\OutputFormatDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\OutputFormatDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\OutputFormatDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sourceOutputFormats', $data) && $data['sourceOutputFormats'] !== null) {
                $object->setSourceOutputFormats($data['sourceOutputFormats']);
                unset($data['sourceOutputFormats']);
            }
            elseif (\array_key_exists('sourceOutputFormats', $data) && $data['sourceOutputFormats'] === null) {
                $object->setSourceOutputFormats(null);
            }
            if (\array_key_exists('format', $data) && $data['format'] !== null) {
                $object->setFormat($data['format']);
                unset($data['format']);
            }
            elseif (\array_key_exists('format', $data) && $data['format'] === null) {
                $object->setFormat(null);
            }
            if (\array_key_exists('names', $data)) {
                $object->setNames($data['names']);
                unset($data['names']);
            }
            if (\array_key_exists('retentionTime', $data)) {
                $object->setRetentionTime($data['retentionTime']);
                unset($data['retentionTime']);
            }
            if (\array_key_exists('downloadFileNamePatterns', $data) && $data['downloadFileNamePatterns'] !== null) {
                $object->setDownloadFileNamePatterns($data['downloadFileNamePatterns']);
                unset($data['downloadFileNamePatterns']);
            }
            elseif (\array_key_exists('downloadFileNamePatterns', $data) && $data['downloadFileNamePatterns'] === null) {
                $object->setDownloadFileNamePatterns(null);
            }
            if (\array_key_exists('viewForAll', $data)) {
                $object->setViewForAll($data['viewForAll']);
                unset($data['viewForAll']);
            }
            if (\array_key_exists('enableXmpWriteback', $data)) {
                $object->setEnableXmpWriteback($data['enableXmpWriteback']);
                unset($data['enableXmpWriteback']);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('system', $data)) {
                $object->setSystem($data['system']);
                unset($data['system']);
            }
            if (\array_key_exists('dynamic', $data)) {
                $object->setDynamic($data['dynamic']);
                unset($data['dynamic']);
            }
            if (\array_key_exists('dataExtraction', $data)) {
                $object->setDataExtraction($data['dataExtraction']);
                unset($data['dataExtraction']);
            }
            if (\array_key_exists('temporary', $data)) {
                $object->setTemporary($data['temporary']);
                unset($data['temporary']);
            }
            if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
                $object->setAudit($data['audit']);
                unset($data['audit']);
            }
            elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
                $object->setAudit(null);
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
            if ($object->isInitialized('sourceOutputFormats') && null !== $object->getSourceOutputFormats()) {
                $data['sourceOutputFormats'] = $object->getSourceOutputFormats();
            }
            if ($object->isInitialized('format') && null !== $object->getFormat()) {
                $data['format'] = $object->getFormat();
            }
            $data['names'] = $object->getNames();
            if ($object->isInitialized('retentionTime') && null !== $object->getRetentionTime()) {
                $data['retentionTime'] = $object->getRetentionTime();
            }
            if ($object->isInitialized('downloadFileNamePatterns') && null !== $object->getDownloadFileNamePatterns()) {
                $data['downloadFileNamePatterns'] = $object->getDownloadFileNamePatterns();
            }
            if ($object->isInitialized('viewForAll') && null !== $object->getViewForAll()) {
                $data['viewForAll'] = $object->getViewForAll();
            }
            if ($object->isInitialized('enableXmpWriteback') && null !== $object->getEnableXmpWriteback()) {
                $data['enableXmpWriteback'] = $object->getEnableXmpWriteback();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('system') && null !== $object->getSystem()) {
                $data['system'] = $object->getSystem();
            }
            if ($object->isInitialized('dynamic') && null !== $object->getDynamic()) {
                $data['dynamic'] = $object->getDynamic();
            }
            if ($object->isInitialized('dataExtraction') && null !== $object->getDataExtraction()) {
                $data['dataExtraction'] = $object->getDataExtraction();
            }
            if ($object->isInitialized('temporary') && null !== $object->getTemporary()) {
                $data['temporary'] = $object->getTemporary();
            }
            if ($object->isInitialized('audit') && null !== $object->getAudit()) {
                $data['audit'] = $object->getAudit();
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
            return ['PicturePark\\API\\Model\\OutputFormatDetail' => false];
        }
    }
} else {
    class OutputFormatDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\OutputFormatDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\OutputFormatDetail';
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
            $object = new \PicturePark\API\Model\OutputFormatDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sourceOutputFormats', $data) && $data['sourceOutputFormats'] !== null) {
                $object->setSourceOutputFormats($data['sourceOutputFormats']);
                unset($data['sourceOutputFormats']);
            }
            elseif (\array_key_exists('sourceOutputFormats', $data) && $data['sourceOutputFormats'] === null) {
                $object->setSourceOutputFormats(null);
            }
            if (\array_key_exists('format', $data) && $data['format'] !== null) {
                $object->setFormat($data['format']);
                unset($data['format']);
            }
            elseif (\array_key_exists('format', $data) && $data['format'] === null) {
                $object->setFormat(null);
            }
            if (\array_key_exists('names', $data)) {
                $object->setNames($data['names']);
                unset($data['names']);
            }
            if (\array_key_exists('retentionTime', $data)) {
                $object->setRetentionTime($data['retentionTime']);
                unset($data['retentionTime']);
            }
            if (\array_key_exists('downloadFileNamePatterns', $data) && $data['downloadFileNamePatterns'] !== null) {
                $object->setDownloadFileNamePatterns($data['downloadFileNamePatterns']);
                unset($data['downloadFileNamePatterns']);
            }
            elseif (\array_key_exists('downloadFileNamePatterns', $data) && $data['downloadFileNamePatterns'] === null) {
                $object->setDownloadFileNamePatterns(null);
            }
            if (\array_key_exists('viewForAll', $data)) {
                $object->setViewForAll($data['viewForAll']);
                unset($data['viewForAll']);
            }
            if (\array_key_exists('enableXmpWriteback', $data)) {
                $object->setEnableXmpWriteback($data['enableXmpWriteback']);
                unset($data['enableXmpWriteback']);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('system', $data)) {
                $object->setSystem($data['system']);
                unset($data['system']);
            }
            if (\array_key_exists('dynamic', $data)) {
                $object->setDynamic($data['dynamic']);
                unset($data['dynamic']);
            }
            if (\array_key_exists('dataExtraction', $data)) {
                $object->setDataExtraction($data['dataExtraction']);
                unset($data['dataExtraction']);
            }
            if (\array_key_exists('temporary', $data)) {
                $object->setTemporary($data['temporary']);
                unset($data['temporary']);
            }
            if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
                $object->setAudit($data['audit']);
                unset($data['audit']);
            }
            elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
                $object->setAudit(null);
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
            if ($object->isInitialized('sourceOutputFormats') && null !== $object->getSourceOutputFormats()) {
                $data['sourceOutputFormats'] = $object->getSourceOutputFormats();
            }
            if ($object->isInitialized('format') && null !== $object->getFormat()) {
                $data['format'] = $object->getFormat();
            }
            $data['names'] = $object->getNames();
            if ($object->isInitialized('retentionTime') && null !== $object->getRetentionTime()) {
                $data['retentionTime'] = $object->getRetentionTime();
            }
            if ($object->isInitialized('downloadFileNamePatterns') && null !== $object->getDownloadFileNamePatterns()) {
                $data['downloadFileNamePatterns'] = $object->getDownloadFileNamePatterns();
            }
            if ($object->isInitialized('viewForAll') && null !== $object->getViewForAll()) {
                $data['viewForAll'] = $object->getViewForAll();
            }
            if ($object->isInitialized('enableXmpWriteback') && null !== $object->getEnableXmpWriteback()) {
                $data['enableXmpWriteback'] = $object->getEnableXmpWriteback();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('system') && null !== $object->getSystem()) {
                $data['system'] = $object->getSystem();
            }
            if ($object->isInitialized('dynamic') && null !== $object->getDynamic()) {
                $data['dynamic'] = $object->getDynamic();
            }
            if ($object->isInitialized('dataExtraction') && null !== $object->getDataExtraction()) {
                $data['dataExtraction'] = $object->getDataExtraction();
            }
            if ($object->isInitialized('temporary') && null !== $object->getTemporary()) {
                $data['temporary'] = $object->getTemporary();
            }
            if ($object->isInitialized('audit') && null !== $object->getAudit()) {
                $data['audit'] = $object->getAudit();
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
            return ['PicturePark\\API\\Model\\OutputFormatDetail' => false];
        }
    }
}