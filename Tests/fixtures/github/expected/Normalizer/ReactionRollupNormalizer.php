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
    class ReactionRollupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ReactionRollup';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ReactionRollup';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ReactionRollup();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReactionRollupConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('total_count', $data)) {
                $object->setTotalCount($data['total_count']);
                unset($data['total_count']);
            }
            if (\array_key_exists('+1', $data)) {
                $object->set1($data['+1']);
                unset($data['+1']);
            }
            if (\array_key_exists('-1', $data)) {
                $object->set12($data['-1']);
                unset($data['-1']);
            }
            if (\array_key_exists('laugh', $data)) {
                $object->setLaugh($data['laugh']);
                unset($data['laugh']);
            }
            if (\array_key_exists('confused', $data)) {
                $object->setConfused($data['confused']);
                unset($data['confused']);
            }
            if (\array_key_exists('heart', $data)) {
                $object->setHeart($data['heart']);
                unset($data['heart']);
            }
            if (\array_key_exists('hooray', $data)) {
                $object->setHooray($data['hooray']);
                unset($data['hooray']);
            }
            if (\array_key_exists('eyes', $data)) {
                $object->setEyes($data['eyes']);
                unset($data['eyes']);
            }
            if (\array_key_exists('rocket', $data)) {
                $object->setRocket($data['rocket']);
                unset($data['rocket']);
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
            $data['url'] = $object->getUrl();
            $data['total_count'] = $object->getTotalCount();
            $data['+1'] = $object->get1();
            $data['-1'] = $object->get12();
            $data['laugh'] = $object->getLaugh();
            $data['confused'] = $object->getConfused();
            $data['heart'] = $object->getHeart();
            $data['hooray'] = $object->getHooray();
            $data['eyes'] = $object->getEyes();
            $data['rocket'] = $object->getRocket();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReactionRollupConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ReactionRollup' => false];
        }
    }
} else {
    class ReactionRollupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ReactionRollup';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ReactionRollup';
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
            $object = new \Github\Model\ReactionRollup();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReactionRollupConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('total_count', $data)) {
                $object->setTotalCount($data['total_count']);
                unset($data['total_count']);
            }
            if (\array_key_exists('+1', $data)) {
                $object->set1($data['+1']);
                unset($data['+1']);
            }
            if (\array_key_exists('-1', $data)) {
                $object->set12($data['-1']);
                unset($data['-1']);
            }
            if (\array_key_exists('laugh', $data)) {
                $object->setLaugh($data['laugh']);
                unset($data['laugh']);
            }
            if (\array_key_exists('confused', $data)) {
                $object->setConfused($data['confused']);
                unset($data['confused']);
            }
            if (\array_key_exists('heart', $data)) {
                $object->setHeart($data['heart']);
                unset($data['heart']);
            }
            if (\array_key_exists('hooray', $data)) {
                $object->setHooray($data['hooray']);
                unset($data['hooray']);
            }
            if (\array_key_exists('eyes', $data)) {
                $object->setEyes($data['eyes']);
                unset($data['eyes']);
            }
            if (\array_key_exists('rocket', $data)) {
                $object->setRocket($data['rocket']);
                unset($data['rocket']);
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
            $data['url'] = $object->getUrl();
            $data['total_count'] = $object->getTotalCount();
            $data['+1'] = $object->get1();
            $data['-1'] = $object->get12();
            $data['laugh'] = $object->getLaugh();
            $data['confused'] = $object->getConfused();
            $data['heart'] = $object->getHeart();
            $data['hooray'] = $object->getHooray();
            $data['eyes'] = $object->getEyes();
            $data['rocket'] = $object->getRocket();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReactionRollupConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ReactionRollup' => false];
        }
    }
}