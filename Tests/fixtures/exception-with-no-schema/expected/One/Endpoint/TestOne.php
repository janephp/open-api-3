<?php

namespace Jane\Component\OpenApi3\Tests\Expected\One\Endpoint;

class TestOne extends \Jane\Component\OpenApi3\Tests\Expected\One\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\One\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\Expected\One\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/test-one';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\Expected\One\Exception\TestOneNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\One\Exception\TestOneNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}