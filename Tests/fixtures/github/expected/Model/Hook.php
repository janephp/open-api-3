<?php

namespace Github\Model;

class Hook
{
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * Unique identifier of the webhook.
     *
     * @var int
     */
    protected $id;
    /**
     * The name of a valid service, use 'web' for a webhook.
     *
     * @var string
     */
    protected $name;
    /**
     * Determines whether the hook is actually triggered on pushes.
     *
     * @var bool
     */
    protected $active;
    /**
     * Determines what events the hook is triggered for. Default: ['push'].
     *
     * @var string[]
     */
    protected $events;
    /**
     * 
     *
     * @var HookConfig
     */
    protected $config;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $testUrl;
    /**
     * 
     *
     * @var string
     */
    protected $pingUrl;
    /**
     * 
     *
     * @var HookResponse
     */
    protected $lastResponse;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Unique identifier of the webhook.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique identifier of the webhook.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The name of a valid service, use 'web' for a webhook.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of a valid service, use 'web' for a webhook.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Determines whether the hook is actually triggered on pushes.
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * Determines whether the hook is actually triggered on pushes.
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->active = $active;
        return $this;
    }
    /**
     * Determines what events the hook is triggered for. Default: ['push'].
     *
     * @return string[]
     */
    public function getEvents() : array
    {
        return $this->events;
    }
    /**
     * Determines what events the hook is triggered for. Default: ['push'].
     *
     * @param string[] $events
     *
     * @return self
     */
    public function setEvents(array $events) : self
    {
        $this->events = $events;
        return $this;
    }
    /**
     * 
     *
     * @return HookConfig
     */
    public function getConfig() : HookConfig
    {
        return $this->config;
    }
    /**
     * 
     *
     * @param HookConfig $config
     *
     * @return self
     */
    public function setConfig(HookConfig $config) : self
    {
        $this->config = $config;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTestUrl() : string
    {
        return $this->testUrl;
    }
    /**
     * 
     *
     * @param string $testUrl
     *
     * @return self
     */
    public function setTestUrl(string $testUrl) : self
    {
        $this->testUrl = $testUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPingUrl() : string
    {
        return $this->pingUrl;
    }
    /**
     * 
     *
     * @param string $pingUrl
     *
     * @return self
     */
    public function setPingUrl(string $pingUrl) : self
    {
        $this->pingUrl = $pingUrl;
        return $this;
    }
    /**
     * 
     *
     * @return HookResponse
     */
    public function getLastResponse() : HookResponse
    {
        return $this->lastResponse;
    }
    /**
     * 
     *
     * @param HookResponse $lastResponse
     *
     * @return self
     */
    public function setLastResponse(HookResponse $lastResponse) : self
    {
        $this->lastResponse = $lastResponse;
        return $this;
    }
}