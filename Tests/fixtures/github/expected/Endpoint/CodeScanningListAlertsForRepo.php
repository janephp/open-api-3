<?php

namespace Github\Endpoint;

class CodeScanningListAlertsForRepo extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    /**
     * Lists all open code scanning alerts for the default branch (usually `master`) and protected branches in a repository. You must use an access token with the `security_events` scope to use this endpoint. GitHub Apps must have the `security_events` read permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var string $state Set to `closed` to list only closed code scanning alerts.
     *     @var string $ref Returns a list of code scanning alerts for a specific brach reference. The `ref` must be formatted as `heads/<branch name>`.
     * }
     */
    public function __construct(string $owner, string $repo, array $queryParameters = [])
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->queryParameters = $queryParameters;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], '/repos/{owner}/{repo}/code-scanning/alerts');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['state', 'ref']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['state' => 'open']);
        $optionsResolver->addAllowedTypes('state', ['string']);
        $optionsResolver->addAllowedTypes('ref', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\CodeScanningListAlertsForRepoNotFoundException
     * @throws \Github\Exception\CodeScanningListAlertsForRepoServiceUnavailableException
     *
     * @return null|\Github\Model\CodeScanningAlert[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\CodeScanningAlert[]', 'json');
        }
        if (404 === $status) {
            throw new \Github\Exception\CodeScanningListAlertsForRepoNotFoundException($response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\CodeScanningListAlertsForRepoServiceUnavailableException($serializer->deserialize($body, 'Github\\Model\\ResponseServiceUnavailable', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}