<?php

namespace CreditSafe\API\Endpoint;

class CompanyEvents extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Endpoint to return a collection of `events` for the given company, optionally filtered on the supplied search criteria. Event information will only be returned if the company exists in at least one of your `portfolios`.
     *
     * @param string $id The connectId of the company that you wish to retrieve events for.
     * @param array $queryParameters {
     *     @var string $startDate The start date on which results are filtered.
     *     @var string $endDate The end date on which results are filtered.
     *     @var int $page Starting page number (indexed from 0)
     *     @var int $pageSize Number of items to return per Page (max 1000)
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $id, array $queryParameters = [], array $headerParameters = [])
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \CreditSafe\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{id}'], [$this->id], '/monitoring/companies/{id}/events');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['startDate', 'endDate', 'page', 'pageSize']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 0, 'pageSize' => 50]);
        $optionsResolver->addAllowedTypes('startDate', ['string']);
        $optionsResolver->addAllowedTypes('endDate', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('pageSize', ['int']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Authorization']);
        $optionsResolver->setRequired(['Authorization']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \CreditSafe\API\Exception\CompanyEventsBadRequestException
     * @throws \CreditSafe\API\Exception\CompanyEventsUnauthorizedException
     * @throws \CreditSafe\API\Exception\CompanyEventsForbiddenException
     * @throws \CreditSafe\API\Exception\CompanyEventsNotFoundException
     *
     * @return null|\CreditSafe\API\Model\CompanyEventsResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CreditSafe\\API\\Model\\CompanyEventsResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\CompanyEventsBadRequestException($serializer->deserialize($body, 'CreditSafe\\API\\Model\\BadRequestError', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\CompanyEventsUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\CompanyEventsForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\CompanyEventsNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['bearerAuth'];
    }
}