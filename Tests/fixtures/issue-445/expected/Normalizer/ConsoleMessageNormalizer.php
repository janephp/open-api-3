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
    class ConsoleMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ConsoleMessage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ConsoleMessage';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ConsoleMessage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('retries', $data)) {
                $object->setRetries($data['retries']);
                unset($data['retries']);
            }
            if (\array_key_exists('priority', $data)) {
                $object->setPriority($data['priority']);
                unset($data['priority']);
            }
            if (\array_key_exists('deduplicate', $data)) {
                $object->setDeduplicate($data['deduplicate']);
                unset($data['deduplicate']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('command', $data) && $data['command'] !== null) {
                $object->setCommand($data['command']);
                unset($data['command']);
            }
            elseif (\array_key_exists('command', $data) && $data['command'] === null) {
                $object->setCommand(null);
            }
            if (\array_key_exists('arguments', $data) && $data['arguments'] !== null) {
                $values = [];
                foreach ($data['arguments'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\TupleOfStringAndString', 'json', $context);
                }
                $object->setArguments($values);
                unset($data['arguments']);
            }
            elseif (\array_key_exists('arguments', $data) && $data['arguments'] === null) {
                $object->setArguments(null);
            }
            if (\array_key_exists('targetQueue', $data) && $data['targetQueue'] !== null) {
                $object->setTargetQueue($data['targetQueue']);
                unset($data['targetQueue']);
            }
            elseif (\array_key_exists('targetQueue', $data) && $data['targetQueue'] === null) {
                $object->setTargetQueue(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            $data['retries'] = $object->getRetries();
            $data['priority'] = $object->getPriority();
            $data['deduplicate'] = $object->getDeduplicate();
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('command') && null !== $object->getCommand()) {
                $data['command'] = $object->getCommand();
            }
            if ($object->isInitialized('arguments') && null !== $object->getArguments()) {
                $values = [];
                foreach ($object->getArguments() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['arguments'] = $values;
            }
            if ($object->isInitialized('targetQueue') && null !== $object->getTargetQueue()) {
                $data['targetQueue'] = $object->getTargetQueue();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ConsoleMessage' => false];
        }
    }
} else {
    class ConsoleMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ConsoleMessage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ConsoleMessage';
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
            $object = new \PicturePark\API\Model\ConsoleMessage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('retries', $data)) {
                $object->setRetries($data['retries']);
                unset($data['retries']);
            }
            if (\array_key_exists('priority', $data)) {
                $object->setPriority($data['priority']);
                unset($data['priority']);
            }
            if (\array_key_exists('deduplicate', $data)) {
                $object->setDeduplicate($data['deduplicate']);
                unset($data['deduplicate']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('command', $data) && $data['command'] !== null) {
                $object->setCommand($data['command']);
                unset($data['command']);
            }
            elseif (\array_key_exists('command', $data) && $data['command'] === null) {
                $object->setCommand(null);
            }
            if (\array_key_exists('arguments', $data) && $data['arguments'] !== null) {
                $values = [];
                foreach ($data['arguments'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\TupleOfStringAndString', 'json', $context);
                }
                $object->setArguments($values);
                unset($data['arguments']);
            }
            elseif (\array_key_exists('arguments', $data) && $data['arguments'] === null) {
                $object->setArguments(null);
            }
            if (\array_key_exists('targetQueue', $data) && $data['targetQueue'] !== null) {
                $object->setTargetQueue($data['targetQueue']);
                unset($data['targetQueue']);
            }
            elseif (\array_key_exists('targetQueue', $data) && $data['targetQueue'] === null) {
                $object->setTargetQueue(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            $data['retries'] = $object->getRetries();
            $data['priority'] = $object->getPriority();
            $data['deduplicate'] = $object->getDeduplicate();
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('command') && null !== $object->getCommand()) {
                $data['command'] = $object->getCommand();
            }
            if ($object->isInitialized('arguments') && null !== $object->getArguments()) {
                $values = [];
                foreach ($object->getArguments() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['arguments'] = $values;
            }
            if ($object->isInitialized('targetQueue') && null !== $object->getTargetQueue()) {
                $data['targetQueue'] = $object->getTargetQueue();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ConsoleMessage' => false];
        }
    }
}