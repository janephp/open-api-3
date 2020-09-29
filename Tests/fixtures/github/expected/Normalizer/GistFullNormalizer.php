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
class GistFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\GistFull';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\GistFull';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\GistFull();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('forks_url', $data)) {
            $object->setForksUrl($data['forks_url']);
        }
        if (\array_key_exists('commits_url', $data)) {
            $object->setCommitsUrl($data['commits_url']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('git_pull_url', $data)) {
            $object->setGitPullUrl($data['git_pull_url']);
        }
        if (\array_key_exists('git_push_url', $data)) {
            $object->setGitPushUrl($data['git_push_url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('files', $data)) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['files'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, 'Github\\Model\\GistSimpleFilesItem', 'json', $context);
            }
            $object->setFiles($values);
        }
        if (\array_key_exists('public', $data)) {
            $object->setPublic($data['public']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('comments', $data)) {
            $object->setComments($data['comments']);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($data['user']);
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('comments_url', $data)) {
            $object->setCommentsUrl($data['comments_url']);
        }
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Github\\Model\\SimpleUser', 'json', $context));
        }
        elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
            $object->setOwner(null);
        }
        if (\array_key_exists('truncated', $data)) {
            $object->setTruncated($data['truncated']);
        }
        if (\array_key_exists('forks', $data)) {
            $values_1 = array();
            foreach ($data['forks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\GistFullforksItem', 'json', $context);
            }
            $object->setForks($values_1);
        }
        if (\array_key_exists('history', $data)) {
            $values_2 = array();
            foreach ($data['history'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Github\\Model\\GistFullhistoryItem', 'json', $context);
            }
            $object->setHistory($values_2);
        }
        if (\array_key_exists('fork_of', $data) && $data['fork_of'] !== null) {
            $object->setForkOf($this->denormalizer->denormalize($data['fork_of'], 'Github\\Model\\GistFullforkOf', 'json', $context));
        }
        elseif (\array_key_exists('fork_of', $data) && $data['fork_of'] === null) {
            $object->setForkOf(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getForksUrl()) {
            $data['forks_url'] = $object->getForksUrl();
        }
        if (null !== $object->getCommitsUrl()) {
            $data['commits_url'] = $object->getCommitsUrl();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getNodeId()) {
            $data['node_id'] = $object->getNodeId();
        }
        if (null !== $object->getGitPullUrl()) {
            $data['git_pull_url'] = $object->getGitPullUrl();
        }
        if (null !== $object->getGitPushUrl()) {
            $data['git_push_url'] = $object->getGitPushUrl();
        }
        if (null !== $object->getHtmlUrl()) {
            $data['html_url'] = $object->getHtmlUrl();
        }
        if (null !== $object->getFiles()) {
            $values = array();
            foreach ($object->getFiles() as $key => $value) {
                $values[$key] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['files'] = $values;
        }
        if (null !== $object->getPublic()) {
            $data['public'] = $object->getPublic();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getComments()) {
            $data['comments'] = $object->getComments();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        if (null !== $object->getCommentsUrl()) {
            $data['comments_url'] = $object->getCommentsUrl();
        }
        if (null !== $object->getOwner()) {
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if (null !== $object->getTruncated()) {
            $data['truncated'] = $object->getTruncated();
        }
        if (null !== $object->getForks()) {
            $values_1 = array();
            foreach ($object->getForks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['forks'] = $values_1;
        }
        if (null !== $object->getHistory()) {
            $values_2 = array();
            foreach ($object->getHistory() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['history'] = $values_2;
        }
        if (null !== $object->getForkOf()) {
            $data['fork_of'] = $this->normalizer->normalize($object->getForkOf(), 'json', $context);
        }
        return $data;
    }
}