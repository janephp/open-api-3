<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class EventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\Event';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\Event';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\Event();
            if (\array_key_exists('eventId', $data) && \is_int($data['eventId'])) {
                $data['eventId'] = (double) $data['eventId'];
            }
            if (\array_key_exists('companyId', $data) && \is_int($data['companyId'])) {
                $data['companyId'] = (double) $data['companyId'];
            }
            if (\array_key_exists('portfolioId', $data) && \is_int($data['portfolioId'])) {
                $data['portfolioId'] = (double) $data['portfolioId'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('eventId', $data)) {
                $object->setEventId($data['eventId']);
                unset($data['eventId']);
            }
            if (\array_key_exists('companyId', $data)) {
                $object->setCompanyId($data['companyId']);
                unset($data['companyId']);
            }
            if (\array_key_exists('portfolioId', $data)) {
                $object->setPortfolioId($data['portfolioId']);
                unset($data['portfolioId']);
            }
            if (\array_key_exists('ruleName', $data)) {
                $object->setRuleName($data['ruleName']);
                unset($data['ruleName']);
            }
            if (\array_key_exists('localEventCode', $data)) {
                $object->setLocalEventCode($data['localEventCode']);
                unset($data['localEventCode']);
            }
            if (\array_key_exists('globalEventCode', $data)) {
                $object->setGlobalEventCode($data['globalEventCode']);
                unset($data['globalEventCode']);
            }
            if (\array_key_exists('newValue', $data)) {
                $object->setNewValue($data['newValue']);
                unset($data['newValue']);
            }
            if (\array_key_exists('oldValue', $data)) {
                $object->setOldValue($data['oldValue']);
                unset($data['oldValue']);
            }
            if (\array_key_exists('eventDate', $data)) {
                $object->setEventDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['eventDate']));
                unset($data['eventDate']);
            }
            if (\array_key_exists('createdDate', $data)) {
                $object->setCreatedDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdDate']));
                unset($data['createdDate']);
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
            if ($object->isInitialized('eventId') && null !== $object->getEventId()) {
                $data['eventId'] = $object->getEventId();
            }
            if ($object->isInitialized('companyId') && null !== $object->getCompanyId()) {
                $data['companyId'] = $object->getCompanyId();
            }
            if ($object->isInitialized('portfolioId') && null !== $object->getPortfolioId()) {
                $data['portfolioId'] = $object->getPortfolioId();
            }
            if ($object->isInitialized('ruleName') && null !== $object->getRuleName()) {
                $data['ruleName'] = $object->getRuleName();
            }
            if ($object->isInitialized('localEventCode') && null !== $object->getLocalEventCode()) {
                $data['localEventCode'] = $object->getLocalEventCode();
            }
            if ($object->isInitialized('globalEventCode') && null !== $object->getGlobalEventCode()) {
                $data['globalEventCode'] = $object->getGlobalEventCode();
            }
            if ($object->isInitialized('newValue') && null !== $object->getNewValue()) {
                $data['newValue'] = $object->getNewValue();
            }
            if ($object->isInitialized('oldValue') && null !== $object->getOldValue()) {
                $data['oldValue'] = $object->getOldValue();
            }
            if ($object->isInitialized('eventDate') && null !== $object->getEventDate()) {
                $data['eventDate'] = $object->getEventDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('createdDate') && null !== $object->getCreatedDate()) {
                $data['createdDate'] = $object->getCreatedDate()->format('Y-m-d\\TH:i:sP');
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
            return ['CreditSafe\\API\\Model\\Event' => false];
        }
    }
} else {
    class EventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\Event';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\Event';
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
            $object = new \CreditSafe\API\Model\Event();
            if (\array_key_exists('eventId', $data) && \is_int($data['eventId'])) {
                $data['eventId'] = (double) $data['eventId'];
            }
            if (\array_key_exists('companyId', $data) && \is_int($data['companyId'])) {
                $data['companyId'] = (double) $data['companyId'];
            }
            if (\array_key_exists('portfolioId', $data) && \is_int($data['portfolioId'])) {
                $data['portfolioId'] = (double) $data['portfolioId'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('eventId', $data)) {
                $object->setEventId($data['eventId']);
                unset($data['eventId']);
            }
            if (\array_key_exists('companyId', $data)) {
                $object->setCompanyId($data['companyId']);
                unset($data['companyId']);
            }
            if (\array_key_exists('portfolioId', $data)) {
                $object->setPortfolioId($data['portfolioId']);
                unset($data['portfolioId']);
            }
            if (\array_key_exists('ruleName', $data)) {
                $object->setRuleName($data['ruleName']);
                unset($data['ruleName']);
            }
            if (\array_key_exists('localEventCode', $data)) {
                $object->setLocalEventCode($data['localEventCode']);
                unset($data['localEventCode']);
            }
            if (\array_key_exists('globalEventCode', $data)) {
                $object->setGlobalEventCode($data['globalEventCode']);
                unset($data['globalEventCode']);
            }
            if (\array_key_exists('newValue', $data)) {
                $object->setNewValue($data['newValue']);
                unset($data['newValue']);
            }
            if (\array_key_exists('oldValue', $data)) {
                $object->setOldValue($data['oldValue']);
                unset($data['oldValue']);
            }
            if (\array_key_exists('eventDate', $data)) {
                $object->setEventDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['eventDate']));
                unset($data['eventDate']);
            }
            if (\array_key_exists('createdDate', $data)) {
                $object->setCreatedDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdDate']));
                unset($data['createdDate']);
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
            if ($object->isInitialized('eventId') && null !== $object->getEventId()) {
                $data['eventId'] = $object->getEventId();
            }
            if ($object->isInitialized('companyId') && null !== $object->getCompanyId()) {
                $data['companyId'] = $object->getCompanyId();
            }
            if ($object->isInitialized('portfolioId') && null !== $object->getPortfolioId()) {
                $data['portfolioId'] = $object->getPortfolioId();
            }
            if ($object->isInitialized('ruleName') && null !== $object->getRuleName()) {
                $data['ruleName'] = $object->getRuleName();
            }
            if ($object->isInitialized('localEventCode') && null !== $object->getLocalEventCode()) {
                $data['localEventCode'] = $object->getLocalEventCode();
            }
            if ($object->isInitialized('globalEventCode') && null !== $object->getGlobalEventCode()) {
                $data['globalEventCode'] = $object->getGlobalEventCode();
            }
            if ($object->isInitialized('newValue') && null !== $object->getNewValue()) {
                $data['newValue'] = $object->getNewValue();
            }
            if ($object->isInitialized('oldValue') && null !== $object->getOldValue()) {
                $data['oldValue'] = $object->getOldValue();
            }
            if ($object->isInitialized('eventDate') && null !== $object->getEventDate()) {
                $data['eventDate'] = $object->getEventDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('createdDate') && null !== $object->getCreatedDate()) {
                $data['createdDate'] = $object->getCreatedDate()->format('Y-m-d\\TH:i:sP');
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
            return ['CreditSafe\\API\\Model\\Event' => false];
        }
    }
}