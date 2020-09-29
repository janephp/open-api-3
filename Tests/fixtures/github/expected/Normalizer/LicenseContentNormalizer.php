<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class LicenseContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\LicenseContent';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\LicenseContent';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\LicenseContent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('path', $data)) {
            $object->setPath($data['path']);
        }
        if (\array_key_exists('sha', $data)) {
            $object->setSha($data['sha']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('html_url', $data) && $data['html_url'] !== null) {
            $object->setHtmlUrl($data['html_url']);
        }
        elseif (\array_key_exists('html_url', $data) && $data['html_url'] === null) {
            $object->setHtmlUrl(null);
        }
        if (\array_key_exists('git_url', $data) && $data['git_url'] !== null) {
            $object->setGitUrl($data['git_url']);
        }
        elseif (\array_key_exists('git_url', $data) && $data['git_url'] === null) {
            $object->setGitUrl(null);
        }
        if (\array_key_exists('download_url', $data) && $data['download_url'] !== null) {
            $object->setDownloadUrl($data['download_url']);
        }
        elseif (\array_key_exists('download_url', $data) && $data['download_url'] === null) {
            $object->setDownloadUrl(null);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('content', $data)) {
            $object->setContent($data['content']);
        }
        if (\array_key_exists('encoding', $data)) {
            $object->setEncoding($data['encoding']);
        }
        if (\array_key_exists('_links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], 'Github\\Model\\LicenseContentLinks', 'json', $context));
        }
        if (\array_key_exists('license', $data) && $data['license'] !== null) {
            $object->setLicense($this->denormalizer->denormalize($data['license'], 'Github\\Model\\LicenseContentLicense', 'json', $context));
        }
        elseif (\array_key_exists('license', $data) && $data['license'] === null) {
            $object->setLicense(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['name'] = $object->getName();
        $data['path'] = $object->getPath();
        $data['sha'] = $object->getSha();
        $data['size'] = $object->getSize();
        $data['url'] = $object->getUrl();
        $data['html_url'] = $object->getHtmlUrl();
        $data['git_url'] = $object->getGitUrl();
        $data['download_url'] = $object->getDownloadUrl();
        $data['type'] = $object->getType();
        $data['content'] = $object->getContent();
        $data['encoding'] = $object->getEncoding();
        $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        $data['license'] = $this->normalizer->normalize($object->getLicense(), 'json', $context);
        return $data;
    }
}