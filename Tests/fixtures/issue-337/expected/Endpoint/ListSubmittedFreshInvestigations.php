<?php

namespace CreditSafe\API\Endpoint;

class ListSubmittedFreshInvestigations extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    /**
     * Returns a list of your submitted Fresh Investigation Orders.
     *
     * @param array $queryParameters {
     *     @var int $page Starting page number (indexed from 0)
     *     @var int $pageSize Number of items to return per Page (max 1000)
     *     @var string $transactionId Fresh Investigation Identifier used internally and with our data partners.
     *     @var string $reportCreatedAfter Returns Fresh Investigations processed after this date
     *     @var string $reportCreatedBefore Returns ordered Fresh Investigations that were processed before this date
     *     @var string $createdBefore Returns Fresh Investigations created before this date
     *     @var string $createdSince Returns ordered Fresh Investigations created after this date
     *     @var string $lookUpOrderBy Use to search for your Fresh Investigations by either the returned Company Details in the `GET` `freshInvestigations/{orderId}` endpoint or your supplied Search Criteria in the `POST` `/freshInvestigations` endpoint
     *     @var string $companyDetailsCountry Looks for your returned Fresh Investigations where the returned Company Country is named this. Use with lookUpOrderBy=CompanyDetails
     *     @var string $companyDetailsName Looks for your returned Fresh Investigations where the returned Company Name is named this. Use with lookUpOrderBy=CompanyDetails
     *     @var string $searchCriteriaCountry Looks for your returned Fresh Investigations where your submitted Search Criteria Company Country is this. Use with lookUpOrderBy=searchCriteria
     *     @var string $searchCriteriaName Looks for your Fresh Investigations where your submitted Search Criteria Company Name is this. Use with lookUpOrderBy=searchCriteria
     *     @var string $sortBy Sorts  returned Fresh Investigations by this field
     *     @var string $sortDir Sorts returned Fresh Investigations by this direction
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
    {
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
        return '/freshInvestigations';
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
        $optionsResolver->setDefined(['page', 'pageSize', 'transactionId', 'reportCreatedAfter', 'reportCreatedBefore', 'createdBefore', 'createdSince', 'lookUpOrderBy', 'companyDetailsCountry', 'companyDetailsName', 'searchCriteriaCountry', 'searchCriteriaName', 'sortBy', 'sortDir']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 0, 'pageSize' => 50]);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('pageSize', ['int']);
        $optionsResolver->addAllowedTypes('transactionId', ['string']);
        $optionsResolver->addAllowedTypes('reportCreatedAfter', ['string']);
        $optionsResolver->addAllowedTypes('reportCreatedBefore', ['string']);
        $optionsResolver->addAllowedTypes('createdBefore', ['string']);
        $optionsResolver->addAllowedTypes('createdSince', ['string']);
        $optionsResolver->addAllowedTypes('lookUpOrderBy', ['string']);
        $optionsResolver->addAllowedTypes('companyDetailsCountry', ['string']);
        $optionsResolver->addAllowedTypes('companyDetailsName', ['string']);
        $optionsResolver->addAllowedTypes('searchCriteriaCountry', ['string']);
        $optionsResolver->addAllowedTypes('searchCriteriaName', ['string']);
        $optionsResolver->addAllowedTypes('sortBy', ['string']);
        $optionsResolver->addAllowedTypes('sortDir', ['string']);
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
     * @throws \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsBadRequestException
     * @throws \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsUnauthorizedException
     * @throws \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsForbiddenException
     * @throws \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsNotFoundException
     *
     * @return null|\CreditSafe\API\Model\ListFreshInvestigationResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CreditSafe\\API\\Model\\ListFreshInvestigationResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsBadRequestException($response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\ListSubmittedFreshInvestigationsNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['bearerAuth'];
    }
}