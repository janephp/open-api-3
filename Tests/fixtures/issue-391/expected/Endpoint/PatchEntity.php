<?php

namespace Gounlaf\JanephpBug\Endpoint;

class PatchEntity extends \Gounlaf\JanephpBug\Runtime\Client\BaseEndpoint implements \Gounlaf\JanephpBug\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param int $id ID of the entity
     * @param \Gounlaf\JanephpBug\Model\PatchableEntity $requestBody 
     */
    public function __construct(int $id, \Gounlaf\JanephpBug\Model\PatchableEntity $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \Gounlaf\JanephpBug\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/patchable/entity/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Gounlaf\JanephpBug\Model\PatchableEntity) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gounlaf\JanephpBug\Exception\PatchEntityBadRequestException
     * @throws \Gounlaf\JanephpBug\Exception\PatchEntityNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (202 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gounlaf\JanephpBug\Exception\PatchEntityBadRequestException();
        }
        if (404 === $status) {
            throw new \Gounlaf\JanephpBug\Exception\PatchEntityNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}