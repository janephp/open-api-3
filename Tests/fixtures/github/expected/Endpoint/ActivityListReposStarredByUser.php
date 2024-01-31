<?php

namespace Github\Endpoint;

class ActivityListReposStarredByUser extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $username;
    protected $accept;
    /**
    * Lists repositories a user has starred.
    
    You can also find out _when_ stars were created by passing the following custom [media type](https://developer.github.com/v3/media/) via the `Accept` header:
    *
    * @param string $username 
    * @param array $queryParameters {
    *     @var string $sort One of `created` (when the repository was starred) or `updated` (when it was last pushed to).
    *     @var string $direction One of `asc` (ascending) or `desc` (descending).
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param array $accept Accept content header application/json|application/vnd.github.v3.star+json
    */
    public function __construct(string $username, array $queryParameters = [], array $accept = [])
    {
        $this->username = $username;
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{username}'], [$this->username], '/users/{username}/starred');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/vnd.github.v3.star+json']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['sort', 'direction', 'per_page', 'page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['sort' => 'created', 'direction' => 'desc', 'per_page' => 30, 'page' => 1]);
        $optionsResolver->addAllowedTypes('sort', ['string']);
        $optionsResolver->addAllowedTypes('direction', ['string']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Github\Model\Repository[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\Repository[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}