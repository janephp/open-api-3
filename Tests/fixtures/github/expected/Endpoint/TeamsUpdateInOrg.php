<?php

namespace Github\Endpoint;

class TeamsUpdateInOrg extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $team_slug;
    /**
     * To edit a team, the authenticated user must either be an organization owner or a team maintainer.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `PATCH /organizations/{org_id}/team/{team_id}`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param null|\Github\Model\OrgsOrgTeamsTeamSlugPatchBody $requestBody 
     */
    public function __construct(string $org, string $teamSlug, ?\Github\Model\OrgsOrgTeamsTeamSlugPatchBody $requestBody = null)
    {
        $this->org = $org;
        $this->team_slug = $teamSlug;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(['{org}', '{team_slug}'], [$this->org, $this->team_slug], '/orgs/{org}/teams/{team_slug}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\OrgsOrgTeamsTeamSlugPatchBody) {
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
     * @return null|\Github\Model\TeamFull
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\TeamFull', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}