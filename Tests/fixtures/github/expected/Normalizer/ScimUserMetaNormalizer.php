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
    class ScimUserMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ScimUserMeta';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ScimUserMeta';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ScimUserMeta();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimUserMetaConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('resourceType', $data)) {
                $object->setResourceType($data['resourceType']);
                unset($data['resourceType']);
            }
            if (\array_key_exists('created', $data)) {
                $object->setCreated(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created']));
                unset($data['created']);
            }
            if (\array_key_exists('lastModified', $data)) {
                $object->setLastModified(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastModified']));
                unset($data['lastModified']);
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($data['location']);
                unset($data['location']);
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
            if ($object->isInitialized('resourceType') && null !== $object->getResourceType()) {
                $data['resourceType'] = $object->getResourceType();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['created'] = $object->getCreated()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('lastModified') && null !== $object->getLastModified()) {
                $data['lastModified'] = $object->getLastModified()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['location'] = $object->getLocation();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimUserMetaConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ScimUserMeta' => false];
        }
    }
} else {
    class ScimUserMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ScimUserMeta';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ScimUserMeta';
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
            $object = new \Github\Model\ScimUserMeta();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimUserMetaConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('resourceType', $data)) {
                $object->setResourceType($data['resourceType']);
                unset($data['resourceType']);
            }
            if (\array_key_exists('created', $data)) {
                $object->setCreated(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created']));
                unset($data['created']);
            }
            if (\array_key_exists('lastModified', $data)) {
                $object->setLastModified(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastModified']));
                unset($data['lastModified']);
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($data['location']);
                unset($data['location']);
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
            if ($object->isInitialized('resourceType') && null !== $object->getResourceType()) {
                $data['resourceType'] = $object->getResourceType();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['created'] = $object->getCreated()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('lastModified') && null !== $object->getLastModified()) {
                $data['lastModified'] = $object->getLastModified()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['location'] = $object->getLocation();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimUserMetaConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ScimUserMeta' => false];
        }
    }
}