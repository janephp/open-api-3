<?php

namespace Jane\OpenApi\Tests\Expected\Endpoint;

class TestHost extends \Jane\OpenApi\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\OpenApi\Tests\Expected\Runtime\Client\Endpoint
{
    use \Jane\OpenApi\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/test-exception';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        return null;
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}