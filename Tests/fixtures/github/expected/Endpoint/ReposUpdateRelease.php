<?php

namespace Github\Endpoint;

class ReposUpdateRelease extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $release_id;
    /**
     * Users with push access to the repository can edit a release.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $releaseId release_id parameter
     * @param null|\Github\Model\ReposOwnerRepoReleasesReleaseIdPatchBody $requestBody 
     */
    public function __construct(string $owner, string $repo, int $releaseId, ?\Github\Model\ReposOwnerRepoReleasesReleaseIdPatchBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->release_id = $releaseId;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}', '{release_id}'], [$this->owner, $this->repo, $this->release_id], '/repos/{owner}/{repo}/releases/{release_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoReleasesReleaseIdPatchBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
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
     * @return null|\Github\Model\Release
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\Release', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}