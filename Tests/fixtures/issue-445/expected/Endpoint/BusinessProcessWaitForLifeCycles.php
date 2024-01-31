<?php

namespace PicturePark\API\Endpoint;

class BusinessProcessWaitForLifeCycles extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Wait for the business process to hit one of the given life cycles.
     *
     * @param string $id The business process id.
     * @param array $queryParameters {
     *     @var array $lifeCycles Business process life cycles to wait for.
     *     @var string $timeout The timeout to wait for completion.
     * }
     */
    public function __construct(string $id, array $queryParameters = [])
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{id}'], [$this->id], '/v1/BusinessProcesses/{id}/waitLifeCycles');
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
        $optionsResolver->setDefined(['lifeCycles', 'timeout']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('lifeCycles', ['array', 'null']);
        $optionsResolver->addAllowedTypes('timeout', ['string', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcessWaitForLifeCycleResult
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\BusinessProcessWaitForLifeCycleResult', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}