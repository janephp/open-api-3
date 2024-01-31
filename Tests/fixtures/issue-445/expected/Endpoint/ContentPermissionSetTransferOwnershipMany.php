<?php

namespace PicturePark\API\Endpoint;

class ContentPermissionSetTransferOwnershipMany extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * Transfers ownership of multiple content permission sets to respective supplied users.
     *
     * @param \PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest $requestBody 
     */
    public function __construct(\PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/v1/ContentPermissionSets/many/ownership';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyInternalServerErrorException
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
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}