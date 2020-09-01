<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ReviewCommentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ReviewComment';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ReviewComment';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ReviewComment();
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('pull_request_review_id', $data) && $data['pull_request_review_id'] !== null) {
            $object->setPullRequestReviewId($data['pull_request_review_id']);
        }
        elseif (\array_key_exists('pull_request_review_id', $data) && $data['pull_request_review_id'] === null) {
            $object->setPullRequestReviewId(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('diff_hunk', $data)) {
            $object->setDiffHunk($data['diff_hunk']);
        }
        if (\array_key_exists('path', $data)) {
            $object->setPath($data['path']);
        }
        if (\array_key_exists('position', $data) && $data['position'] !== null) {
            $object->setPosition($data['position']);
        }
        elseif (\array_key_exists('position', $data) && $data['position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('original_position', $data)) {
            $object->setOriginalPosition($data['original_position']);
        }
        if (\array_key_exists('commit_id', $data)) {
            $object->setCommitId($data['commit_id']);
        }
        if (\array_key_exists('original_commit_id', $data)) {
            $object->setOriginalCommitId($data['original_commit_id']);
        }
        if (\array_key_exists('in_reply_to_id', $data)) {
            $object->setInReplyToId($data['in_reply_to_id']);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($this->denormalizer->denormalize($data['user'], 'Github\\Model\\ReviewCommentUser', 'json', $context));
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('pull_request_url', $data)) {
            $object->setPullRequestUrl($data['pull_request_url']);
        }
        if (\array_key_exists('author_association', $data)) {
            $object->setAuthorAssociation($data['author_association']);
        }
        if (\array_key_exists('_links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], 'Github\\Model\\ReviewCommentLinks', 'json', $context));
        }
        if (\array_key_exists('body_text', $data)) {
            $object->setBodyText($data['body_text']);
        }
        if (\array_key_exists('body_html', $data)) {
            $object->setBodyHtml($data['body_html']);
        }
        if (\array_key_exists('side', $data)) {
            $object->setSide($data['side']);
        }
        if (\array_key_exists('start_side', $data) && $data['start_side'] !== null) {
            $object->setStartSide($data['start_side']);
        }
        elseif (\array_key_exists('start_side', $data) && $data['start_side'] === null) {
            $object->setStartSide(null);
        }
        if (\array_key_exists('line', $data)) {
            $object->setLine($data['line']);
        }
        if (\array_key_exists('original_line', $data)) {
            $object->setOriginalLine($data['original_line']);
        }
        if (\array_key_exists('start_line', $data) && $data['start_line'] !== null) {
            $object->setStartLine($data['start_line']);
        }
        elseif (\array_key_exists('start_line', $data) && $data['start_line'] === null) {
            $object->setStartLine(null);
        }
        if (\array_key_exists('original_start_line', $data) && $data['original_start_line'] !== null) {
            $object->setOriginalStartLine($data['original_start_line']);
        }
        elseif (\array_key_exists('original_start_line', $data) && $data['original_start_line'] === null) {
            $object->setOriginalStartLine(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getPullRequestReviewId()) {
            $data['pull_request_review_id'] = $object->getPullRequestReviewId();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getNodeId()) {
            $data['node_id'] = $object->getNodeId();
        }
        if (null !== $object->getDiffHunk()) {
            $data['diff_hunk'] = $object->getDiffHunk();
        }
        if (null !== $object->getPath()) {
            $data['path'] = $object->getPath();
        }
        if (null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if (null !== $object->getOriginalPosition()) {
            $data['original_position'] = $object->getOriginalPosition();
        }
        if (null !== $object->getCommitId()) {
            $data['commit_id'] = $object->getCommitId();
        }
        if (null !== $object->getOriginalCommitId()) {
            $data['original_commit_id'] = $object->getOriginalCommitId();
        }
        if (null !== $object->getInReplyToId()) {
            $data['in_reply_to_id'] = $object->getInReplyToId();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        if (null !== $object->getBody()) {
            $data['body'] = $object->getBody();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getHtmlUrl()) {
            $data['html_url'] = $object->getHtmlUrl();
        }
        if (null !== $object->getPullRequestUrl()) {
            $data['pull_request_url'] = $object->getPullRequestUrl();
        }
        if (null !== $object->getAuthorAssociation()) {
            $data['author_association'] = $object->getAuthorAssociation();
        }
        if (null !== $object->getLinks()) {
            $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        if (null !== $object->getBodyText()) {
            $data['body_text'] = $object->getBodyText();
        }
        if (null !== $object->getBodyHtml()) {
            $data['body_html'] = $object->getBodyHtml();
        }
        if (null !== $object->getSide()) {
            $data['side'] = $object->getSide();
        }
        if (null !== $object->getStartSide()) {
            $data['start_side'] = $object->getStartSide();
        }
        if (null !== $object->getLine()) {
            $data['line'] = $object->getLine();
        }
        if (null !== $object->getOriginalLine()) {
            $data['original_line'] = $object->getOriginalLine();
        }
        if (null !== $object->getStartLine()) {
            $data['start_line'] = $object->getStartLine();
        }
        if (null !== $object->getOriginalStartLine()) {
            $data['original_start_line'] = $object->getOriginalStartLine();
        }
        return $data;
    }
}