<?php

namespace Jane\OpenApi3\Tests\Expected\Endpoint;

class TestDictionary extends \Jane\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $input 
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/test-dictionary';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('input'));
        $optionsResolver->setRequired(array('input'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('input', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}