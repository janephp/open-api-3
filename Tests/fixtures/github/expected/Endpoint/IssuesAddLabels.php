<?php

namespace Github\Endpoint;

class IssuesAddLabels extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $owner;
    protected $repo;
    protected $issue_number;
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param \Github\Model\ReposOwnerRepoIssuesIssueNumberLabelsPostBody $requestBody 
     */
    public function __construct(string $owner, string $repo, int $issueNumber, \Github\Model\ReposOwnerRepoIssuesIssueNumberLabelsPostBody $requestBody)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->issue_number = $issueNumber;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{issue_number}'), array($this->owner, $this->repo, $this->issue_number), '/repos/{owner}/{repo}/issues/{issue_number}/labels');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoIssuesIssueNumberLabelsPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\IssuesAddLabelsGoneException
     * @throws \Github\Exception\IssuesAddLabelsUnprocessableEntityException
     *
     * @return null|\Github\Model\Label[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Label[]', 'json');
        }
        if (410 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\IssuesAddLabelsGoneException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\IssuesAddLabelsUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}