<?php

namespace Jane\OpenApi3\Tests\Expected\Authentication;

class ApiKeyAuthentication implements \Http\Client\Common\Plugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function handleRequest(\Psr\Http\Message\RequestInterface $request, callable $next, callable $first) : \Http\Promise\Promise
    {
        $request = $request->withHeader('X-API-KEY', $this->{'apiKey'});
        return $next($request);
    }
}