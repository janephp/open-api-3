<?php

namespace Gounlaf\JanephpBug;

class Client extends \Gounlaf\JanephpBug\Runtime\Client\Client
{
    /**
     * 
     *
     * @param int $id ID of the entity
     * @param \Gounlaf\JanephpBug\Model\PatchableEntity $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gounlaf\JanephpBug\Exception\PatchEntityBadRequestException
     * @throws \Gounlaf\JanephpBug\Exception\PatchEntityNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchEntity(int $id, \Gounlaf\JanephpBug\Model\PatchableEntity $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gounlaf\JanephpBug\Endpoint\PatchEntity($id, $requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Gounlaf\JanephpBug\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}