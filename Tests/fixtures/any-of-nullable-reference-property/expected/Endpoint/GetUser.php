<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class GetUser extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/user';
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
     * @throws \Jane\Component\OpenApi3\Tests\Expected\Exception\GetUserNotFoundException
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\Account
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Account', 'json');
        }
        if (404 === $status) {
            throw new \Jane\Component\OpenApi3\Tests\Expected\Exception\GetUserNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}