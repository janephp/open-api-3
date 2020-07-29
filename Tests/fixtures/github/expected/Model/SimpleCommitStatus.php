<?php

namespace Github\Model;

class SimpleCommitStatus
{
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var string
     */
    protected $context;
    /**
     * 
     *
     * @var string
     */
    protected $targetUrl;
    /**
     * 
     *
     * @var bool|null
     */
    protected $required;
    /**
     * 
     *
     * @var string|null
     */
    protected $avatarUrl;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getNodeId() : string
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId) : self
    {
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContext() : string
    {
        return $this->context;
    }
    /**
     * 
     *
     * @param string $context
     *
     * @return self
     */
    public function setContext(string $context) : self
    {
        $this->context = $context;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTargetUrl() : string
    {
        return $this->targetUrl;
    }
    /**
     * 
     *
     * @param string $targetUrl
     *
     * @return self
     */
    public function setTargetUrl(string $targetUrl) : self
    {
        $this->targetUrl = $targetUrl;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getRequired() : ?bool
    {
        return $this->required;
    }
    /**
     * 
     *
     * @param bool|null $required
     *
     * @return self
     */
    public function setRequired(?bool $required) : self
    {
        $this->required = $required;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAvatarUrl() : ?string
    {
        return $this->avatarUrl;
    }
    /**
     * 
     *
     * @param string|null $avatarUrl
     *
     * @return self
     */
    public function setAvatarUrl(?string $avatarUrl) : self
    {
        $this->avatarUrl = $avatarUrl;
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
}