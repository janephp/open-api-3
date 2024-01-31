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
    class AnalyzerBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\AnalyzerBase';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\AnalyzerBase';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (array_key_exists('kind', $data) and 'EdgeNGramAnalyzer' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\EdgeNGramAnalyzer', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'LanguageAnalyzer' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\LanguageAnalyzer', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'NGramAnalyzer' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\NGramAnalyzer', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'PathHierarchyAnalyzer' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\PathHierarchyAnalyzer', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'SimpleAnalyzer' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\SimpleAnalyzer', $format, $context);
            }
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\AnalyzerBase();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if (null !== $object->getKind() and 'EdgeNGramAnalyzer' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'LanguageAnalyzer' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'NGramAnalyzer' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'PathHierarchyAnalyzer' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'SimpleAnalyzer' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            $data['kind'] = $object->getKind();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\AnalyzerBase' => false];
        }
    }
} else {
    class AnalyzerBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\AnalyzerBase';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\AnalyzerBase';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (array_key_exists('kind', $data) and 'EdgeNGramAnalyzer' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\EdgeNGramAnalyzer', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'LanguageAnalyzer' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\LanguageAnalyzer', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'NGramAnalyzer' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\NGramAnalyzer', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'PathHierarchyAnalyzer' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\PathHierarchyAnalyzer', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'SimpleAnalyzer' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\SimpleAnalyzer', $format, $context);
            }
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\AnalyzerBase();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if (null !== $object->getKind() and 'EdgeNGramAnalyzer' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'LanguageAnalyzer' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'NGramAnalyzer' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'PathHierarchyAnalyzer' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'SimpleAnalyzer' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            $data['kind'] = $object->getKind();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\AnalyzerBase' => false];
        }
    }
}