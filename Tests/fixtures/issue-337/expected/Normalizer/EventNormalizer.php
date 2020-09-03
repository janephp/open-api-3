<?php

namespace CreditSafe\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class EventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\Event';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\Event';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\Event();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('eventId', $data)) {
            $object->setEventId($data['eventId']);
        }
        if (\array_key_exists('companyId', $data)) {
            $object->setCompanyId($data['companyId']);
        }
        if (\array_key_exists('portfolioId', $data)) {
            $object->setPortfolioId($data['portfolioId']);
        }
        if (\array_key_exists('ruleName', $data)) {
            $object->setRuleName($data['ruleName']);
        }
        if (\array_key_exists('localEventCode', $data)) {
            $object->setLocalEventCode($data['localEventCode']);
        }
        if (\array_key_exists('globalEventCode', $data)) {
            $object->setGlobalEventCode($data['globalEventCode']);
        }
        if (\array_key_exists('newValue', $data)) {
            $object->setNewValue($data['newValue']);
        }
        if (\array_key_exists('oldValue', $data)) {
            $object->setOldValue($data['oldValue']);
        }
        if (\array_key_exists('eventDate', $data)) {
            $object->setEventDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['eventDate']));
        }
        if (\array_key_exists('createdDate', $data)) {
            $object->setCreatedDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdDate']));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEventId()) {
            $data['eventId'] = $object->getEventId();
        }
        if (null !== $object->getCompanyId()) {
            $data['companyId'] = $object->getCompanyId();
        }
        if (null !== $object->getPortfolioId()) {
            $data['portfolioId'] = $object->getPortfolioId();
        }
        if (null !== $object->getRuleName()) {
            $data['ruleName'] = $object->getRuleName();
        }
        if (null !== $object->getLocalEventCode()) {
            $data['localEventCode'] = $object->getLocalEventCode();
        }
        if (null !== $object->getGlobalEventCode()) {
            $data['globalEventCode'] = $object->getGlobalEventCode();
        }
        if (null !== $object->getNewValue()) {
            $data['newValue'] = $object->getNewValue();
        }
        if (null !== $object->getOldValue()) {
            $data['oldValue'] = $object->getOldValue();
        }
        if (null !== $object->getEventDate()) {
            $data['eventDate'] = $object->getEventDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getCreatedDate()) {
            $data['createdDate'] = $object->getCreatedDate()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}