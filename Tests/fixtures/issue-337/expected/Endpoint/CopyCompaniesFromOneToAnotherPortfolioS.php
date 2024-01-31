<?php

namespace CreditSafe\API\Endpoint;

class CopyCompaniesFromOneToAnotherPortfolioS extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $portfolioId;
    /**
     * Copy companies from one portfolio to single (or) multiple portfolios.
     *
     * @param string $portfolioId The unique identifier of the portfolio you want to copy companies from, obtained from `/portfolios`.
     * @param \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBody $requestBody 
     * @param array $queryParameters {
     *     @var bool $copyAll When CopyAll queryparameter is False, portfolios and companies list needs to be passed. When CopyAll queryparameter is True, only portfolios need to be passed and companies List must be empty. All companies are copied from current portfolio are considered here.
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $portfolioId, \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBody $requestBody, array $queryParameters = [], array $headerParameters = [])
    {
        $this->portfolioId = $portfolioId;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \CreditSafe\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{portfolioId}'], [$this->portfolioId], '/monitoring/portfolios/{portfolioId}/companies/copy');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['copyAll']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['copyAll' => false]);
        $optionsResolver->addAllowedTypes('copyAll', ['bool']);
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
     * @throws \CreditSafe\API\Exception\CopyCompaniesFromOneToAnotherPortfolioSBadRequestException
     * @throws \CreditSafe\API\Exception\CopyCompaniesFromOneToAnotherPortfolioSUnauthorizedException
     * @throws \CreditSafe\API\Exception\CopyCompaniesFromOneToAnotherPortfolioSForbiddenException
     * @throws \CreditSafe\API\Exception\CopyCompaniesFromOneToAnotherPortfolioSNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\CopyCompaniesFromOneToAnotherPortfolioSBadRequestException($response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\CopyCompaniesFromOneToAnotherPortfolioSUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\CopyCompaniesFromOneToAnotherPortfolioSForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\CopyCompaniesFromOneToAnotherPortfolioSNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['bearerAuth'];
    }
}