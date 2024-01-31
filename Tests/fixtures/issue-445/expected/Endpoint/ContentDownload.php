<?php

namespace PicturePark\API\Endpoint;

class ContentDownload extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $contentId;
    protected $outputFormatId;
    protected $accept;
    /**
     * Download a single content in a specific output format. To resize images on download specify target width &amp; height. To download only a portion of the file, specify the range parameter.
     *
     * @param string $contentId The content ID.
     * @param string $outputFormatId The output format ID.
     * @param array $queryParameters {
     *     @var int $width Optional width in pixels to resize image.
     *     @var int $height Optional height in pixels to resize image.
     * }
     * @param array $headerParameters {
     *     @var string $range The range of bytes to download (http range header): bytes={from}-{to} (e.g. bytes=0-100000).
     * }
     * @param array $accept Accept content header application/json|application/octet-stream
     */
    public function __construct(string $contentId, string $outputFormatId, array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        $this->contentId = $contentId;
        $this->outputFormatId = $outputFormatId;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{contentId}', '{outputFormatId}'], [$this->contentId, $this->outputFormatId], '/v1/Contents/downloads/{contentId}/{outputFormatId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/octet-stream']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['width', 'height']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('width', ['int', 'null']);
        $optionsResolver->addAllowedTypes('height', ['int', 'null']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['range']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('range', ['string', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\ContentDownloadBadRequestException
     * @throws \PicturePark\API\Exception\ContentDownloadUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentDownloadNotFoundException
     * @throws \PicturePark\API\Exception\ContentDownloadMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentDownloadConflictException
     * @throws \PicturePark\API\Exception\ContentDownloadTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentDownloadInternalServerErrorException
     * @throws \PicturePark\API\Exception\ContentDownloadPreconditionFailedException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentDownloadBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ContentDownloadUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentDownloadNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ContentDownloadMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentDownloadConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ContentDownloadTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentDownloadInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
        if (200 === $status) {
        }
        if (206 === $status) {
        }
        if (412 === $status) {
            throw new \PicturePark\API\Exception\ContentDownloadPreconditionFailedException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}