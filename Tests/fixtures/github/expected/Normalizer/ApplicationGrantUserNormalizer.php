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
class ApplicationGrantUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ApplicationGrantUser';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ApplicationGrantUser';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ApplicationGrantUser();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('login', $data)) {
            $object->setLogin($data['login']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('avatar_url', $data)) {
            $object->setAvatarUrl($data['avatar_url']);
        }
        if (\array_key_exists('gravatar_id', $data) && $data['gravatar_id'] !== null) {
            $object->setGravatarId($data['gravatar_id']);
        }
        elseif (\array_key_exists('gravatar_id', $data) && $data['gravatar_id'] === null) {
            $object->setGravatarId(null);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('followers_url', $data)) {
            $object->setFollowersUrl($data['followers_url']);
        }
        if (\array_key_exists('following_url', $data)) {
            $object->setFollowingUrl($data['following_url']);
        }
        if (\array_key_exists('gists_url', $data)) {
            $object->setGistsUrl($data['gists_url']);
        }
        if (\array_key_exists('starred_url', $data)) {
            $object->setStarredUrl($data['starred_url']);
        }
        if (\array_key_exists('subscriptions_url', $data)) {
            $object->setSubscriptionsUrl($data['subscriptions_url']);
        }
        if (\array_key_exists('organizations_url', $data)) {
            $object->setOrganizationsUrl($data['organizations_url']);
        }
        if (\array_key_exists('repos_url', $data)) {
            $object->setReposUrl($data['repos_url']);
        }
        if (\array_key_exists('events_url', $data)) {
            $object->setEventsUrl($data['events_url']);
        }
        if (\array_key_exists('received_events_url', $data)) {
            $object->setReceivedEventsUrl($data['received_events_url']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('site_admin', $data)) {
            $object->setSiteAdmin($data['site_admin']);
        }
        if (\array_key_exists('starred_at', $data)) {
            $object->setStarredAt($data['starred_at']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['login'] = $object->getLogin();
        $data['id'] = $object->getId();
        $data['node_id'] = $object->getNodeId();
        $data['avatar_url'] = $object->getAvatarUrl();
        $data['gravatar_id'] = $object->getGravatarId();
        $data['url'] = $object->getUrl();
        $data['html_url'] = $object->getHtmlUrl();
        $data['followers_url'] = $object->getFollowersUrl();
        $data['following_url'] = $object->getFollowingUrl();
        $data['gists_url'] = $object->getGistsUrl();
        $data['starred_url'] = $object->getStarredUrl();
        $data['subscriptions_url'] = $object->getSubscriptionsUrl();
        $data['organizations_url'] = $object->getOrganizationsUrl();
        $data['repos_url'] = $object->getReposUrl();
        $data['events_url'] = $object->getEventsUrl();
        $data['received_events_url'] = $object->getReceivedEventsUrl();
        $data['type'] = $object->getType();
        $data['site_admin'] = $object->getSiteAdmin();
        if (null !== $object->getStarredAt()) {
            $data['starred_at'] = $object->getStarredAt();
        }
        return $data;
    }
}