<?php

namespace PicturePark\API\Endpoint;

class OutputFormatSetDownloadFileNamePatterns extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * This is allowed for both static and dynamic formats. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param string $id ID of the output format.
     * @param \stdClass $requestBody 
     */
    public function __construct(string $id, \stdClass $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{id}'], [$this->id], '/v1/OutputFormats/{id}/downloadFileNamePatterns');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \stdClass) {
            return [['Content-Type' => ['application/json']], json_encode($this->body)];
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
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsConflictException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\BusinessProcess', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}