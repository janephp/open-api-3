<?php

namespace Github\Endpoint;

class ReposUploadReleaseAsset extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $release_id;
    /**
    * This endpoint makes use of [a Hypermedia relation](https://developer.github.com/v3/#hypermedia) to determine which URL to access. The endpoint you call to upload release assets is specific to your release. Use the `upload_url` returned in
    the response of the [Create a release endpoint](https://developer.github.com/v3/repos/releases/#create-a-release) to upload a release asset.
    
    You need to use an HTTP client which supports [SNI](http://en.wikipedia.org/wiki/Server_Name_Indication) to make calls to this endpoint.
    
    Most libraries will set the required `Content-Length` header automatically. Use the required `Content-Type` header to provide the media type of the asset. For a list of media types, see [Media Types](https://www.iana.org/assignments/media-types/media-types.xhtml). For example: 
    
    `application/zip`
    
    GitHub expects the asset data in its raw binary form, rather than JSON. You will send the raw binary content of the asset as the request body. Everything else about the endpoint is the same as the rest of the API. For example,
    you'll still need to pass your authentication to be able to upload an asset.
    
    When an upstream failure occurs, you will receive a `502 Bad Gateway` status. This may leave an empty asset with a state of `starter`. It can be safely deleted.
    
    **Notes:**
    *   GitHub renames asset filenames that have special characters, non-alphanumeric characters, and leading or trailing periods. The "[List assets for a release](https://developer.github.com/v3/repos/releases/#list-assets-for-a-release)"
    endpoint lists the renamed filenames. For more information and help, contact [GitHub Support](https://github.com/contact).
    *   If you upload an asset with the same filename as another uploaded asset, you'll receive an error and must delete the old file before you can re-upload the new asset.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $releaseId release_id parameter
    * @param null|string $requestBody 
    * @param array $queryParameters {
    *     @var string $name name parameter
    *     @var string $label label parameter
    * }
    */
    public function __construct(string $owner, string $repo, int $releaseId, ?string $requestBody = null, array $queryParameters = [])
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->release_id = $releaseId;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}', '{release_id}'], [$this->owner, $this->repo, $this->release_id], '/repos/{owner}/{repo}/releases/{release_id}/assets');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (is_string($this->body)) {
            return [['Content-Type' => ['*/*']], $this->body];
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
        $optionsResolver->setDefined(['name', 'label']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('name', ['string']);
        $optionsResolver->addAllowedTypes('label', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Github\Model\ReleaseAsset
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\ReleaseAsset', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}