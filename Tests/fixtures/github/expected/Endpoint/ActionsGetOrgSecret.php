<?php

namespace Github\Endpoint;

class ActionsGetOrgSecret extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $secret_name;
    /**
     * Gets a single organization secret without revealing its encrypted value. You must authenticate using an access token with the `admin:org` scope to use this endpoint. GitHub Apps must have the `secrets` organization permission to use this endpoint.
     *
     * @param string $org 
     * @param string $secretName secret_name parameter
     */
    public function __construct(string $org, string $secretName)
    {
        $this->org = $org;
        $this->secret_name = $secretName;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{org}', '{secret_name}'], [$this->org, $this->secret_name], '/orgs/{org}/actions/secrets/{secret_name}');
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
     * @return null|\Github\Model\OrganizationActionsSecret
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\OrganizationActionsSecret', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}