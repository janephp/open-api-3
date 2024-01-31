<?php

namespace ApiPlatform\Demo\Endpoint;

class ApiBooksIdgenerateCoverPut extends \ApiPlatform\Demo\Runtime\Client\BaseEndpoint implements \ApiPlatform\Demo\Runtime\Client\Endpoint
{
    protected $id;
    protected $accept;
    /**
     * Replaces the Book resource.
     *
     * @param string $id Book identifier
     * @param \ApiPlatform\Demo\Model\BookJsonld|\ApiPlatform\Demo\Model\BookJsonhal|\ApiPlatform\Demo\Model\Book $requestBody 
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     */
    public function __construct(string $id, $requestBody, array $accept = [])
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \ApiPlatform\Demo\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{id}'], [$this->id], '/books/{id}/generate-cover');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ApiPlatform\Demo\Model\BookJsonld) {
            return [['Content-Type' => ['application/ld+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\BookJsonhal) {
            return [['Content-Type' => ['application/hal+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Book) {
            return [['Content-Type' => ['application/vnd.api+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Book) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Book) {
            return [['Content-Type' => ['application/xml']], $this->body];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Book) {
            return [['Content-Type' => ['text/xml']], $this->body];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Book) {
            return [['Content-Type' => ['application/x-yaml']], $this->body];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Book) {
            return [['Content-Type' => ['text/csv']], $this->body];
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Book) {
            return [['Content-Type' => ['text/html']], $this->body];
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
     * @throws \ApiPlatform\Demo\Exception\ApiBooksIdgenerateCoverPutBadRequestException
     * @throws \ApiPlatform\Demo\Exception\ApiBooksIdgenerateCoverPutUnprocessableEntityException
     * @throws \ApiPlatform\Demo\Exception\ApiBooksIdgenerateCoverPutNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            if (mb_strpos($contentType, 'application/ld+json') !== false) {
                return json_decode($body);
            }
            if (mb_strpos($contentType, 'application/hal+json') !== false) {
                return json_decode($body);
            }
            if (mb_strpos($contentType, 'application/vnd.api+json') !== false) {
                return json_decode($body);
            }
            if (mb_strpos($contentType, 'application/json') !== false) {
                return json_decode($body);
            }
        }
        if (400 === $status) {
            throw new \ApiPlatform\Demo\Exception\ApiBooksIdgenerateCoverPutBadRequestException($response);
        }
        if (422 === $status) {
            throw new \ApiPlatform\Demo\Exception\ApiBooksIdgenerateCoverPutUnprocessableEntityException($response);
        }
        if (404 === $status) {
            throw new \ApiPlatform\Demo\Exception\ApiBooksIdgenerateCoverPutNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['apiKey'];
    }
}