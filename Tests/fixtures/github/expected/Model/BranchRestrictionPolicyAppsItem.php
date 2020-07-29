<?php

namespace Github\Model;

class BranchRestrictionPolicyAppsItem
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
    protected $slug;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * 
     *
     * @var BranchRestrictionPolicyAppsItemOwner
     */
    protected $owner;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $externalUrl;
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
     * @var BranchRestrictionPolicyAppsItemPermissions
     */
    protected $permissions;
    /**
     * 
     *
     * @var string[]
     */
    protected $events;
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
    public function getSlug() : string
    {
        return $this->slug;
    }
    /**
     * 
     *
     * @param string $slug
     *
     * @return self
     */
    public function setSlug(string $slug) : self
    {
        $this->slug = $slug;
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
     * @return BranchRestrictionPolicyAppsItemOwner
     */
    public function getOwner() : BranchRestrictionPolicyAppsItemOwner
    {
        return $this->owner;
    }
    /**
     * 
     *
     * @param BranchRestrictionPolicyAppsItemOwner $owner
     *
     * @return self
     */
    public function setOwner(BranchRestrictionPolicyAppsItemOwner $owner) : self
    {
        $this->owner = $owner;
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
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExternalUrl() : string
    {
        return $this->externalUrl;
    }
    /**
     * 
     *
     * @param string $externalUrl
     *
     * @return self
     */
    public function setExternalUrl(string $externalUrl) : self
    {
        $this->externalUrl = $externalUrl;
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
     * @return BranchRestrictionPolicyAppsItemPermissions
     */
    public function getPermissions() : BranchRestrictionPolicyAppsItemPermissions
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param BranchRestrictionPolicyAppsItemPermissions $permissions
     *
     * @return self
     */
    public function setPermissions(BranchRestrictionPolicyAppsItemPermissions $permissions) : self
    {
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getEvents() : array
    {
        return $this->events;
    }
    /**
     * 
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
}