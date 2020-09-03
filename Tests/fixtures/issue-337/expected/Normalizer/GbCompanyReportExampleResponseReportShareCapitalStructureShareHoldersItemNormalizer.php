<?php

namespace CreditSafe\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('shareholderType', $data)) {
            $object->setShareholderType($data['shareholderType']);
        }
        if (\array_key_exists('shareType', $data)) {
            $object->setShareType($data['shareType']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($data['currency']);
        }
        if (\array_key_exists('totalNumberOfSharesOwned', $data)) {
            $object->setTotalNumberOfSharesOwned($data['totalNumberOfSharesOwned']);
        }
        if (\array_key_exists('percentSharesHeld', $data)) {
            $object->setPercentSharesHeld($data['percentSharesHeld']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getShareholderType()) {
            $data['shareholderType'] = $object->getShareholderType();
        }
        if (null !== $object->getShareType()) {
            $data['shareType'] = $object->getShareType();
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if (null !== $object->getTotalNumberOfSharesOwned()) {
            $data['totalNumberOfSharesOwned'] = $object->getTotalNumberOfSharesOwned();
        }
        if (null !== $object->getPercentSharesHeld()) {
            $data['percentSharesHeld'] = $object->getPercentSharesHeld();
        }
        return $data;
    }
}