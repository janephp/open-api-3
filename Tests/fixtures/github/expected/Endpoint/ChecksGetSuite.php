<?php

namespace Github\Endpoint;

class ChecksGetSuite extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $check_suite_id;
    /**
    * **Note:** The Checks API only looks for pushes in the repository where the check suite or check run were created. Pushes to a branch in a forked repository are not detected and return an empty `pull_requests` array and a `null` value for `head_branch`.
    
    Gets a single check suite using its `id`. GitHub Apps must have the `checks:read` permission on a private repository or pull access to a public repository to get check suites. OAuth Apps and authenticated users must have the `repo` scope to get check suites in a private repository.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $checkSuiteId check_suite_id parameter
    */
    public function __construct(string $owner, string $repo, int $checkSuiteId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->check_suite_id = $checkSuiteId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}', '{check_suite_id}'], [$this->owner, $this->repo, $this->check_suite_id], '/repos/{owner}/{repo}/check-suites/{check_suite_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Github\Model\CheckSuite
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\CheckSuite', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}