<?php

namespace ApiPlatform\Demo\Authentication;

class ApiKeyAuthentication implements \Http\Client\Common\Plugin, \Jane\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function handleRequest(\Psr\Http\Message\RequestInterface $request, callable $next, callable $first) : \Http\Promise\Promise
    {
        $request = $request->withHeader('Authorization', $this->{'apiKey'});
        return $next($request);
    }
    public function getScope() : string
    {
        return 'apiKey';
    }
}