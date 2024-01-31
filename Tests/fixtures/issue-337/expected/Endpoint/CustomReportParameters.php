<?php

namespace CreditSafe\API\Endpoint;

class CustomReportParameters extends \CreditSafe\API\Runtime\Client\BaseEndpoint implements \CreditSafe\API\Runtime\Client\Endpoint
{
    protected $country;
    /**
     * Endpoint to return mandatory parameters or metadata associated with specific country Company Report requests. To add a custom data parameter, add a Parameter with the key=value pair in the format customData=key::allowedValue I.e. Suppling `DE` as a country code will return a list of reasons for requesting a DE Credit Report (which is a legal requirement to supply with each Credit Report request in Germany). This will provide a list of allowedValues to enter into the mandatory Parameter `customData` = `de_reason_code::allowedValue`
     *
     * @param string $country An ISO/Alpha-2 country code to display any special mandatory parameters when ordering a Credit Report in that territory.
     * @param array $queryParameters {
     *     @var string $template Report template (currently unncessary to provide.)
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer JWT (Authentication Token) generated from the /authenticate endpoint.
     * }
     */
    public function __construct(string $country, array $queryParameters = [], array $headerParameters = [])
    {
        $this->country = $country;
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
        return str_replace(['{country}'], [$this->country], '/reportcustomdata/{country}');
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
        $optionsResolver->setDefined(['template']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['template' => 'full']);
        $optionsResolver->addAllowedTypes('template', ['string']);
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
     * @throws \CreditSafe\API\Exception\CustomReportParametersBadRequestException
     * @throws \CreditSafe\API\Exception\CustomReportParametersUnauthorizedException
     * @throws \CreditSafe\API\Exception\CustomReportParametersForbiddenException
     * @throws \CreditSafe\API\Exception\CustomReportParametersNotFoundException
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
            throw new \CreditSafe\API\Exception\CustomReportParametersBadRequestException($response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\CustomReportParametersUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\CustomReportParametersForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CreditSafe\API\Exception\CustomReportParametersNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['bearerAuth'];
    }
}