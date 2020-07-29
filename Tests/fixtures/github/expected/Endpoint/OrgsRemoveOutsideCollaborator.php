<?php

namespace Github\Endpoint;

class OrgsRemoveOutsideCollaborator extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $org;
    protected $username;
    /**
     * Removing a user from this list will remove them from all the organization's repositories.
     *
     * @param string $org 
     * @param string $username 
     */
    public function __construct(string $org, string $username)
    {
        $this->org = $org;
        $this->username = $username;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{username}'), array($this->org, $this->username), '/orgs/{org}/outside_collaborators/{username}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\OrgsRemoveOutsideCollaboratorUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\OrgsRemoveOutsideCollaboratorUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\OrgsOrgOutsideCollaboratorsUsernameDeleteResponse422', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}