<?php

namespace Github\Endpoint;

class OrgsListMembers extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    /**
    * List all users who are members of an organization. If the authenticated user is also a member of this organization then both concealed and public members will be returned.
    *
    * @param string $org 
    * @param array $queryParameters {
    *     @var string $filter Filter members returned in the list. Can be one of:  
    \* `2fa_disabled` - Members without [two-factor authentication](https://github.com/blog/1614-two-factor-authentication) enabled. Available for organization owners.  
    \* `all` - All members the authenticated user can see.
    *     @var string $role Filter members returned by their role. Can be one of:  
    \* `all` - All members of the organization, regardless of role.  
    \* `admin` - Organization owners.  
    \* `member` - Non-owner organization members.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    */
    public function __construct(string $org, array $queryParameters = [])
    {
        $this->org = $org;
        $this->queryParameters = $queryParameters;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{org}'], [$this->org], '/orgs/{org}/members');
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
        $optionsResolver->setDefined(['filter', 'role', 'per_page', 'page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['filter' => 'all', 'role' => 'all', 'per_page' => 30, 'page' => 1]);
        $optionsResolver->addAllowedTypes('filter', ['string']);
        $optionsResolver->addAllowedTypes('role', ['string']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\OrgsListMembersUnprocessableEntityException
     *
     * @return null|\Github\Model\SimpleUser[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\SimpleUser[]', 'json');
        }
        if (302 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\OrgsListMembersUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}