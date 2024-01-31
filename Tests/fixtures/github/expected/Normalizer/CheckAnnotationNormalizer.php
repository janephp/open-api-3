<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class CheckAnnotationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\CheckAnnotation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\CheckAnnotation';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\CheckAnnotation();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CheckAnnotationConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('path', $data)) {
                $object->setPath($data['path']);
                unset($data['path']);
            }
            if (\array_key_exists('start_line', $data)) {
                $object->setStartLine($data['start_line']);
                unset($data['start_line']);
            }
            if (\array_key_exists('end_line', $data)) {
                $object->setEndLine($data['end_line']);
                unset($data['end_line']);
            }
            if (\array_key_exists('start_column', $data) && $data['start_column'] !== null) {
                $object->setStartColumn($data['start_column']);
                unset($data['start_column']);
            }
            elseif (\array_key_exists('start_column', $data) && $data['start_column'] === null) {
                $object->setStartColumn(null);
            }
            if (\array_key_exists('end_column', $data) && $data['end_column'] !== null) {
                $object->setEndColumn($data['end_column']);
                unset($data['end_column']);
            }
            elseif (\array_key_exists('end_column', $data) && $data['end_column'] === null) {
                $object->setEndColumn(null);
            }
            if (\array_key_exists('annotation_level', $data) && $data['annotation_level'] !== null) {
                $object->setAnnotationLevel($data['annotation_level']);
                unset($data['annotation_level']);
            }
            elseif (\array_key_exists('annotation_level', $data) && $data['annotation_level'] === null) {
                $object->setAnnotationLevel(null);
            }
            if (\array_key_exists('title', $data) && $data['title'] !== null) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            elseif (\array_key_exists('title', $data) && $data['title'] === null) {
                $object->setTitle(null);
            }
            if (\array_key_exists('message', $data) && $data['message'] !== null) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            elseif (\array_key_exists('message', $data) && $data['message'] === null) {
                $object->setMessage(null);
            }
            if (\array_key_exists('raw_details', $data) && $data['raw_details'] !== null) {
                $object->setRawDetails($data['raw_details']);
                unset($data['raw_details']);
            }
            elseif (\array_key_exists('raw_details', $data) && $data['raw_details'] === null) {
                $object->setRawDetails(null);
            }
            if (\array_key_exists('blob_href', $data)) {
                $object->setBlobHref($data['blob_href']);
                unset($data['blob_href']);
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
            $data['path'] = $object->getPath();
            $data['start_line'] = $object->getStartLine();
            $data['end_line'] = $object->getEndLine();
            $data['start_column'] = $object->getStartColumn();
            $data['end_column'] = $object->getEndColumn();
            $data['annotation_level'] = $object->getAnnotationLevel();
            $data['title'] = $object->getTitle();
            $data['message'] = $object->getMessage();
            $data['raw_details'] = $object->getRawDetails();
            $data['blob_href'] = $object->getBlobHref();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CheckAnnotationConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\CheckAnnotation' => false];
        }
    }
} else {
    class CheckAnnotationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\CheckAnnotation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\CheckAnnotation';
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
            $object = new \Github\Model\CheckAnnotation();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CheckAnnotationConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('path', $data)) {
                $object->setPath($data['path']);
                unset($data['path']);
            }
            if (\array_key_exists('start_line', $data)) {
                $object->setStartLine($data['start_line']);
                unset($data['start_line']);
            }
            if (\array_key_exists('end_line', $data)) {
                $object->setEndLine($data['end_line']);
                unset($data['end_line']);
            }
            if (\array_key_exists('start_column', $data) && $data['start_column'] !== null) {
                $object->setStartColumn($data['start_column']);
                unset($data['start_column']);
            }
            elseif (\array_key_exists('start_column', $data) && $data['start_column'] === null) {
                $object->setStartColumn(null);
            }
            if (\array_key_exists('end_column', $data) && $data['end_column'] !== null) {
                $object->setEndColumn($data['end_column']);
                unset($data['end_column']);
            }
            elseif (\array_key_exists('end_column', $data) && $data['end_column'] === null) {
                $object->setEndColumn(null);
            }
            if (\array_key_exists('annotation_level', $data) && $data['annotation_level'] !== null) {
                $object->setAnnotationLevel($data['annotation_level']);
                unset($data['annotation_level']);
            }
            elseif (\array_key_exists('annotation_level', $data) && $data['annotation_level'] === null) {
                $object->setAnnotationLevel(null);
            }
            if (\array_key_exists('title', $data) && $data['title'] !== null) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            elseif (\array_key_exists('title', $data) && $data['title'] === null) {
                $object->setTitle(null);
            }
            if (\array_key_exists('message', $data) && $data['message'] !== null) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            elseif (\array_key_exists('message', $data) && $data['message'] === null) {
                $object->setMessage(null);
            }
            if (\array_key_exists('raw_details', $data) && $data['raw_details'] !== null) {
                $object->setRawDetails($data['raw_details']);
                unset($data['raw_details']);
            }
            elseif (\array_key_exists('raw_details', $data) && $data['raw_details'] === null) {
                $object->setRawDetails(null);
            }
            if (\array_key_exists('blob_href', $data)) {
                $object->setBlobHref($data['blob_href']);
                unset($data['blob_href']);
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
            $data['path'] = $object->getPath();
            $data['start_line'] = $object->getStartLine();
            $data['end_line'] = $object->getEndLine();
            $data['start_column'] = $object->getStartColumn();
            $data['end_column'] = $object->getEndColumn();
            $data['annotation_level'] = $object->getAnnotationLevel();
            $data['title'] = $object->getTitle();
            $data['message'] = $object->getMessage();
            $data['raw_details'] = $object->getRawDetails();
            $data['blob_href'] = $object->getBlobHref();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CheckAnnotationConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\CheckAnnotation' => false];
        }
    }
}