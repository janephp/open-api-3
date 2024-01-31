<?php

namespace ApiPlatform\Demo\Endpoint;

class ApiReviewsIdPatch extends \ApiPlatform\Demo\Runtime\Client\BaseEndpoint implements \ApiPlatform\Demo\Runtime\Client\Endpoint
{
    protected $id;
    protected $accept;
    /**
     * Updates the Review resource.
     *
     * @param string $id Review identifier
     * @param \ApiPlatform\Demo\Model\ReviewReviewWrite $requestBody 
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     */
    public function __construct(string $id, \ApiPlatform\Demo\Model\ReviewReviewWrite $requestBody, array $accept = [])
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \ApiPlatform\Demo\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(['{id}'], [$this->id], '/reviews/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ApiPlatform\Demo\Model\ReviewReviewWrite) {
            return [['Content-Type' => ['application/merge-patch+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\ReviewReviewWrite) {
            return [['Content-Type' => ['application/vnd.api+json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/ld+json', 'application/hal+json', 'application/vnd.api+json', 'application/json', 'application/xml', 'text/xml', 'application/x-yaml', 'text/csv']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ApiPlatform\Demo\Exception\ApiReviewsIdPatchBadRequestException
     * @throws \ApiPlatform\Demo\Exception\ApiReviewsIdPatchUnprocessableEntityException
     * @throws \ApiPlatform\Demo\Exception\ApiReviewsIdPatchNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\ReviewJsonldReviewRead|\ApiPlatform\Demo\Model\ReviewJsonhalReviewRead|\ApiPlatform\Demo\Model\ReviewReviewRead
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (mb_strpos($contentType, 'application/ld+json') !== false) {
                return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\ReviewJsonldReviewRead', 'json');
            }
            if (mb_strpos($contentType, 'application/hal+json') !== false) {
                return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewRead', 'json');
            }
            if (mb_strpos($contentType, 'application/vnd.api+json') !== false) {
                return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\ReviewReviewRead', 'json');
            }
            if (mb_strpos($contentType, 'application/json') !== false) {
                return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\ReviewReviewRead', 'json');
            }
        }
        if (400 === $status) {
            throw new \ApiPlatform\Demo\Exception\ApiReviewsIdPatchBadRequestException($response);
        }
        if (422 === $status) {
            throw new \ApiPlatform\Demo\Exception\ApiReviewsIdPatchUnprocessableEntityException($response);
        }
        if (404 === $status) {
            throw new \ApiPlatform\Demo\Exception\ApiReviewsIdPatchNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['apiKey'];
    }
}