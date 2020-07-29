<?php

namespace Github\Model;

class TeamProject
{
    /**
     * 
     *
     * @var string
     */
    protected $ownerUrl;
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
    protected $htmlUrl;
    /**
     * 
     *
     * @var string
     */
    protected $columnsUrl;
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
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $body;
    /**
     * 
     *
     * @var int
     */
    protected $number;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * Simple User
     *
     * @var SimpleUser|null
     */
    protected $creator;
    /**
     * 
     *
     * @var string
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var string
     */
    protected $organizationPermission;
    /**
     * 
     *
     * @var bool
     */
    protected $private;
    /**
     * 
     *
     * @var TeamProjectPermissions
     */
    protected $permissions;
    /**
     * 
     *
     * @return string
     */
    public function getOwnerUrl() : string
    {
        return $this->ownerUrl;
    }
    /**
     * 
     *
     * @param string $ownerUrl
     *
     * @return self
     */
    public function setOwnerUrl(string $ownerUrl) : self
    {
        $this->ownerUrl = $ownerUrl;
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
    public function getHtmlUrl() : string
    {
        return $this->htmlUrl;
    }
    /**
     * 
     *
     * @param string $htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl(string $htmlUrl) : self
    {
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getColumnsUrl() : string
    {
        return $this->columnsUrl;
    }
    /**
     * 
     *
     * @param string $columnsUrl
     *
     * @return self
     */
    public function setColumnsUrl(string $columnsUrl) : self
    {
        $this->columnsUrl = $columnsUrl;
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
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getBody() : ?string
    {
        return $this->body;
    }
    /**
     * 
     *
     * @param string|null $body
     *
     * @return self
     */
    public function setBody(?string $body) : self
    {
        $this->body = $body;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->number = $number;
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
     * Simple User
     *
     * @return SimpleUser|null
     */
    public function getCreator() : ?SimpleUser
    {
        return $this->creator;
    }
    /**
     * Simple User
     *
     * @param SimpleUser|null $creator
     *
     * @return self
     */
    public function setCreator(?SimpleUser $creator) : self
    {
        $this->creator = $creator;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpdatedAt() : string
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrganizationPermission() : string
    {
        return $this->organizationPermission;
    }
    /**
     * 
     *
     * @param string $organizationPermission
     *
     * @return self
     */
    public function setOrganizationPermission(string $organizationPermission) : self
    {
        $this->organizationPermission = $organizationPermission;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPrivate() : bool
    {
        return $this->private;
    }
    /**
     * 
     *
     * @param bool $private
     *
     * @return self
     */
    public function setPrivate(bool $private) : self
    {
        $this->private = $private;
        return $this;
    }
    /**
     * 
     *
     * @return TeamProjectPermissions
     */
    public function getPermissions() : TeamProjectPermissions
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param TeamProjectPermissions $permissions
     *
     * @return self
     */
    public function setPermissions(TeamProjectPermissions $permissions) : self
    {
        $this->permissions = $permissions;
        return $this;
    }
}