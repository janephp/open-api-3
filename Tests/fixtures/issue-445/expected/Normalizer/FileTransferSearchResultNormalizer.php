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
class FileTransferSearchResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\FileTransferSearchResult';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\FileTransferSearchResult';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\FileTransferSearchResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('totalResults', $data)) {
            $object->setTotalResults($data['totalResults']);
            unset($data['totalResults']);
        }
        if (\array_key_exists('results', $data)) {
            $values = array();
            foreach ($data['results'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\FileTransfer', 'json', $context);
            }
            $object->setResults($values);
            unset($data['results']);
        }
        if (\array_key_exists('elapsedMilliseconds', $data)) {
            $object->setElapsedMilliseconds($data['elapsedMilliseconds']);
            unset($data['elapsedMilliseconds']);
        }
        if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
            $object->setPageToken($data['pageToken']);
            unset($data['pageToken']);
        }
        elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
            $object->setPageToken(null);
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->setSearchString($data['searchString']);
            unset($data['searchString']);
        }
        elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
            $object->setSearchString(null);
        }
        if (\array_key_exists('isSearchStringRewritten', $data)) {
            $object->setIsSearchStringRewritten($data['isSearchStringRewritten']);
            unset($data['isSearchStringRewritten']);
        }
        if (\array_key_exists('queryDebugInformation', $data) && $data['queryDebugInformation'] !== null) {
            $values_1 = array();
            foreach ($data['queryDebugInformation'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\QueryDebugInformation', 'json', $context);
            }
            $object->setQueryDebugInformation($values_1);
            unset($data['queryDebugInformation']);
        }
        elseif (\array_key_exists('queryDebugInformation', $data) && $data['queryDebugInformation'] === null) {
            $object->setQueryDebugInformation(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['totalResults'] = $object->getTotalResults();
        $values = array();
        foreach ($object->getResults() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['results'] = $values;
        $data['elapsedMilliseconds'] = $object->getElapsedMilliseconds();
        if (null !== $object->getPageToken()) {
            $data['pageToken'] = $object->getPageToken();
        }
        if (null !== $object->getSearchString()) {
            $data['searchString'] = $object->getSearchString();
        }
        if (null !== $object->getIsSearchStringRewritten()) {
            $data['isSearchStringRewritten'] = $object->getIsSearchStringRewritten();
        }
        if (null !== $object->getQueryDebugInformation()) {
            $values_1 = array();
            foreach ($object->getQueryDebugInformation() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['queryDebugInformation'] = $values_1;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        return $data;
    }
}