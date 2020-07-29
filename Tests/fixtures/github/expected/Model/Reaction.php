<?php

namespace Github\Model;

class Reaction
{
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
     * @var ReactionUser|null
     */
    protected $user;
    /**
     * The reaction to use
     *
     * @var string
     */
    protected $content;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
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
     * @return ReactionUser|null
     */
    public function getUser() : ?ReactionUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param ReactionUser|null $user
     *
     * @return self
     */
    public function setUser(?ReactionUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * The reaction to use
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }
    /**
     * The reaction to use
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content) : self
    {
        $this->content = $content;
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
}