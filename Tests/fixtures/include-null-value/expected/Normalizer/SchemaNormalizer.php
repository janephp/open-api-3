<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class SchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Schema';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Schema';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\Schema();
            if (\array_key_exists('floatProperty', $data) && \is_int($data['floatProperty'])) {
                $data['floatProperty'] = (double) $data['floatProperty'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('attribute1', $data)) {
                $object->setAttribute1($data['attribute1']);
                unset($data['attribute1']);
            }
            if (\array_key_exists('attribute2', $data) && $data['attribute2'] !== null) {
                $object->setAttribute2($data['attribute2']);
                unset($data['attribute2']);
            }
            elseif (\array_key_exists('attribute2', $data) && $data['attribute2'] === null) {
                $object->setAttribute2(null);
            }
            if (\array_key_exists('attribute3', $data)) {
                $object->setAttribute3($data['attribute3']);
                unset($data['attribute3']);
            }
            if (\array_key_exists('attribute4', $data) && $data['attribute4'] !== null) {
                $object->setAttribute4($data['attribute4']);
                unset($data['attribute4']);
            }
            elseif (\array_key_exists('attribute4', $data) && $data['attribute4'] === null) {
                $object->setAttribute4(null);
            }
            if (\array_key_exists('stringProperty', $data)) {
                $object->setStringProperty($data['stringProperty']);
                unset($data['stringProperty']);
            }
            if (\array_key_exists('dateProperty', $data)) {
                $object->setDateProperty(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateProperty']));
                unset($data['dateProperty']);
            }
            if (\array_key_exists('integerProperty', $data)) {
                $object->setIntegerProperty($data['integerProperty']);
                unset($data['integerProperty']);
            }
            if (\array_key_exists('floatProperty', $data)) {
                $object->setFloatProperty($data['floatProperty']);
                unset($data['floatProperty']);
            }
            if (\array_key_exists('arrayProperty', $data)) {
                $values = [];
                foreach ($data['arrayProperty'] as $value) {
                    $values[] = $value;
                }
                $object->setArrayProperty($values);
                unset($data['arrayProperty']);
            }
            if (\array_key_exists('mapProperty', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['mapProperty'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setMapProperty($values_1);
                unset($data['mapProperty']);
            }
            if (\array_key_exists('objectProperty', $data)) {
                $object->setObjectProperty($this->denormalizer->denormalize($data['objectProperty'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\SchemaObjectProperty', 'json', $context));
                unset($data['objectProperty']);
            }
            if (\array_key_exists('objectRefProperty', $data)) {
                $object->setObjectRefProperty($this->denormalizer->denormalize($data['objectRefProperty'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Schema', 'json', $context));
                unset($data['objectRefProperty']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['attribute1'] = $object->getAttribute1();
            $data['attribute2'] = $object->getAttribute2();
            if ($object->isInitialized('attribute3')) {
                $data['attribute3'] = $object->getAttribute3();
            }
            if ($object->isInitialized('attribute4')) {
                $data['attribute4'] = $object->getAttribute4();
            }
            if ($object->isInitialized('stringProperty')) {
                $data['stringProperty'] = $object->getStringProperty();
            }
            if ($object->isInitialized('dateProperty')) {
                $data['dateProperty'] = $object->getDateProperty()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('integerProperty')) {
                $data['integerProperty'] = $object->getIntegerProperty();
            }
            if ($object->isInitialized('floatProperty')) {
                $data['floatProperty'] = $object->getFloatProperty();
            }
            if ($object->isInitialized('arrayProperty')) {
                $values = [];
                foreach ($object->getArrayProperty() as $value) {
                    $values[] = $value;
                }
                $data['arrayProperty'] = $values;
            }
            if ($object->isInitialized('mapProperty')) {
                $values_1 = [];
                foreach ($object->getMapProperty() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['mapProperty'] = $values_1;
            }
            if ($object->isInitialized('objectProperty')) {
                $data['objectProperty'] = $this->normalizer->normalize($object->getObjectProperty(), 'json', $context);
            }
            if ($object->isInitialized('objectRefProperty')) {
                $data['objectRefProperty'] = $this->normalizer->normalize($object->getObjectRefProperty(), 'json', $context);
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Schema' => false];
        }
    }
} else {
    class SchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Schema';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Schema';
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
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\Schema();
            if (\array_key_exists('floatProperty', $data) && \is_int($data['floatProperty'])) {
                $data['floatProperty'] = (double) $data['floatProperty'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('attribute1', $data)) {
                $object->setAttribute1($data['attribute1']);
                unset($data['attribute1']);
            }
            if (\array_key_exists('attribute2', $data) && $data['attribute2'] !== null) {
                $object->setAttribute2($data['attribute2']);
                unset($data['attribute2']);
            }
            elseif (\array_key_exists('attribute2', $data) && $data['attribute2'] === null) {
                $object->setAttribute2(null);
            }
            if (\array_key_exists('attribute3', $data)) {
                $object->setAttribute3($data['attribute3']);
                unset($data['attribute3']);
            }
            if (\array_key_exists('attribute4', $data) && $data['attribute4'] !== null) {
                $object->setAttribute4($data['attribute4']);
                unset($data['attribute4']);
            }
            elseif (\array_key_exists('attribute4', $data) && $data['attribute4'] === null) {
                $object->setAttribute4(null);
            }
            if (\array_key_exists('stringProperty', $data)) {
                $object->setStringProperty($data['stringProperty']);
                unset($data['stringProperty']);
            }
            if (\array_key_exists('dateProperty', $data)) {
                $object->setDateProperty(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateProperty']));
                unset($data['dateProperty']);
            }
            if (\array_key_exists('integerProperty', $data)) {
                $object->setIntegerProperty($data['integerProperty']);
                unset($data['integerProperty']);
            }
            if (\array_key_exists('floatProperty', $data)) {
                $object->setFloatProperty($data['floatProperty']);
                unset($data['floatProperty']);
            }
            if (\array_key_exists('arrayProperty', $data)) {
                $values = [];
                foreach ($data['arrayProperty'] as $value) {
                    $values[] = $value;
                }
                $object->setArrayProperty($values);
                unset($data['arrayProperty']);
            }
            if (\array_key_exists('mapProperty', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['mapProperty'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setMapProperty($values_1);
                unset($data['mapProperty']);
            }
            if (\array_key_exists('objectProperty', $data)) {
                $object->setObjectProperty($this->denormalizer->denormalize($data['objectProperty'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\SchemaObjectProperty', 'json', $context));
                unset($data['objectProperty']);
            }
            if (\array_key_exists('objectRefProperty', $data)) {
                $object->setObjectRefProperty($this->denormalizer->denormalize($data['objectRefProperty'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Schema', 'json', $context));
                unset($data['objectRefProperty']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
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
            $data['attribute1'] = $object->getAttribute1();
            $data['attribute2'] = $object->getAttribute2();
            if ($object->isInitialized('attribute3')) {
                $data['attribute3'] = $object->getAttribute3();
            }
            if ($object->isInitialized('attribute4')) {
                $data['attribute4'] = $object->getAttribute4();
            }
            if ($object->isInitialized('stringProperty')) {
                $data['stringProperty'] = $object->getStringProperty();
            }
            if ($object->isInitialized('dateProperty')) {
                $data['dateProperty'] = $object->getDateProperty()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('integerProperty')) {
                $data['integerProperty'] = $object->getIntegerProperty();
            }
            if ($object->isInitialized('floatProperty')) {
                $data['floatProperty'] = $object->getFloatProperty();
            }
            if ($object->isInitialized('arrayProperty')) {
                $values = [];
                foreach ($object->getArrayProperty() as $value) {
                    $values[] = $value;
                }
                $data['arrayProperty'] = $values;
            }
            if ($object->isInitialized('mapProperty')) {
                $values_1 = [];
                foreach ($object->getMapProperty() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['mapProperty'] = $values_1;
            }
            if ($object->isInitialized('objectProperty')) {
                $data['objectProperty'] = $this->normalizer->normalize($object->getObjectProperty(), 'json', $context);
            }
            if ($object->isInitialized('objectRefProperty')) {
                $data['objectRefProperty'] = $this->normalizer->normalize($object->getObjectRefProperty(), 'json', $context);
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Schema' => false];
        }
    }
}