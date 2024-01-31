<?php

namespace ApiPlatform\Demo\Endpoint;

class ApiBooksBookIdreviewsGetCollection extends \ApiPlatform\Demo\Runtime\Client\BaseEndpoint implements \ApiPlatform\Demo\Runtime\Client\Endpoint
{
    protected $bookId;
    protected $accept;
    /**
     * Retrieves the collection of Review resources.
     *
     * @param string $bookId Book identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     *     @var string $order[id] 
     *     @var string $order[publicationDate] 
     *     @var string $book 
     *     @var array $book[] 
     * }
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     */
    public function __construct(string $bookId, array $queryParameters = [], array $accept = [])
    {
        $this->bookId = $bookId;
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \ApiPlatform\Demo\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{bookId}'], [$this->bookId], '/books/{bookId}/reviews');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/ld+json', 'application/hal+json', 'application/vnd.api+json', 'application/json', 'application/xml', 'text/xml', 'application/x-yaml', 'text/csv']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['page', 'order[id]', 'order[publicationDate]', 'book']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1]);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('order[id]', ['string']);
        $optionsResolver->addAllowedTypes('order[publicationDate]', ['string']);
        $optionsResolver->addAllowedTypes('book', ['string']);
        $optionsResolver->addAllowedTypes('book', ['array']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\ApiPlatform\Demo\Model\BooksBookIdReviewsGetLdjsonResponse200|\ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200|\ApiPlatform\Demo\Model\ReviewReviewRead[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (mb_strpos($contentType, 'application/ld+json') !== false) {
                return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetLdjsonResponse200', 'json');
            }
            if (mb_strpos($contentType, 'application/hal+json') !== false) {
                return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200', 'json');
            }
            if (mb_strpos($contentType, 'application/vnd.api+json') !== false) {
                return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\ReviewReviewRead[]', 'json');
            }
            if (mb_strpos($contentType, 'application/json') !== false) {
                return $serializer->deserialize($body, 'ApiPlatform\\Demo\\Model\\ReviewReviewRead[]', 'json');
            }
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['apiKey'];
    }
}