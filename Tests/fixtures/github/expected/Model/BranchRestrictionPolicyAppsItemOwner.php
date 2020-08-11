<?php

namespace Github\Model;

class BranchRestrictionPolicyAppsItemOwner
{
    /**
     * 
     *
     * @var string
     */
    protected $login;
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
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $reposUrl;
    /**
     * 
     *
     * @var string
     */
    protected $eventsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $hooksUrl;
    /**
     * 
     *
     * @var string
     */
    protected $issuesUrl;
    /**
     * 
     *
     * @var string
     */
    protected $membersUrl;
    /**
     * 
     *
     * @var string
     */
    protected $publicMembersUrl;
    /**
     * 
     *
     * @var string
     */
    protected $avatarUrl;
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
    protected $gravatarId;
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
    protected $followersUrl;
    /**
     * 
     *
     * @var string
     */
    protected $followingUrl;
    /**
     * 
     *
     * @var string
     */
    protected $gistsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $starredUrl;
    /**
     * 
     *
     * @var string
     */
    protected $subscriptionsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $organizationsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $receivedEventsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return string
     */
    public function getLogin() : string
    {
        return $this->login;
    }
    /**
     * 
     *
     * @param string $login
     *
     * @return self
     */
    public function setLogin(string $login) : self
    {
        $this->login = $login;
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
    public function getReposUrl() : string
    {
        return $this->reposUrl;
    }
    /**
     * 
     *
     * @param string $reposUrl
     *
     * @return self
     */
    public function setReposUrl(string $reposUrl) : self
    {
        $this->reposUrl = $reposUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEventsUrl() : string
    {
        return $this->eventsUrl;
    }
    /**
     * 
     *
     * @param string $eventsUrl
     *
     * @return self
     */
    public function setEventsUrl(string $eventsUrl) : self
    {
        $this->eventsUrl = $eventsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHooksUrl() : string
    {
        return $this->hooksUrl;
    }
    /**
     * 
     *
     * @param string $hooksUrl
     *
     * @return self
     */
    public function setHooksUrl(string $hooksUrl) : self
    {
        $this->hooksUrl = $hooksUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIssuesUrl() : string
    {
        return $this->issuesUrl;
    }
    /**
     * 
     *
     * @param string $issuesUrl
     *
     * @return self
     */
    public function setIssuesUrl(string $issuesUrl) : self
    {
        $this->issuesUrl = $issuesUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMembersUrl() : string
    {
        return $this->membersUrl;
    }
    /**
     * 
     *
     * @param string $membersUrl
     *
     * @return self
     */
    public function setMembersUrl(string $membersUrl) : self
    {
        $this->membersUrl = $membersUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPublicMembersUrl() : string
    {
        return $this->publicMembersUrl;
    }
    /**
     * 
     *
     * @param string $publicMembersUrl
     *
     * @return self
     */
    public function setPublicMembersUrl(string $publicMembersUrl) : self
    {
        $this->publicMembersUrl = $publicMembersUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAvatarUrl() : string
    {
        return $this->avatarUrl;
    }
    /**
     * 
     *
     * @param string $avatarUrl
     *
     * @return self
     */
    public function setAvatarUrl(string $avatarUrl) : self
    {
        $this->avatarUrl = $avatarUrl;
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
    public function getGravatarId() : string
    {
        return $this->gravatarId;
    }
    /**
     * 
     *
     * @param string $gravatarId
     *
     * @return self
     */
    public function setGravatarId(string $gravatarId) : self
    {
        $this->gravatarId = $gravatarId;
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
    public function getFollowersUrl() : string
    {
        return $this->followersUrl;
    }
    /**
     * 
     *
     * @param string $followersUrl
     *
     * @return self
     */
    public function setFollowersUrl(string $followersUrl) : self
    {
        $this->followersUrl = $followersUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFollowingUrl() : string
    {
        return $this->followingUrl;
    }
    /**
     * 
     *
     * @param string $followingUrl
     *
     * @return self
     */
    public function setFollowingUrl(string $followingUrl) : self
    {
        $this->followingUrl = $followingUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGistsUrl() : string
    {
        return $this->gistsUrl;
    }
    /**
     * 
     *
     * @param string $gistsUrl
     *
     * @return self
     */
    public function setGistsUrl(string $gistsUrl) : self
    {
        $this->gistsUrl = $gistsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStarredUrl() : string
    {
        return $this->starredUrl;
    }
    /**
     * 
     *
     * @param string $starredUrl
     *
     * @return self
     */
    public function setStarredUrl(string $starredUrl) : self
    {
        $this->starredUrl = $starredUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSubscriptionsUrl() : string
    {
        return $this->subscriptionsUrl;
    }
    /**
     * 
     *
     * @param string $subscriptionsUrl
     *
     * @return self
     */
    public function setSubscriptionsUrl(string $subscriptionsUrl) : self
    {
        $this->subscriptionsUrl = $subscriptionsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrganizationsUrl() : string
    {
        return $this->organizationsUrl;
    }
    /**
     * 
     *
     * @param string $organizationsUrl
     *
     * @return self
     */
    public function setOrganizationsUrl(string $organizationsUrl) : self
    {
        $this->organizationsUrl = $organizationsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReceivedEventsUrl() : string
    {
        return $this->receivedEventsUrl;
    }
    /**
     * 
     *
     * @param string $receivedEventsUrl
     *
     * @return self
     */
    public function setReceivedEventsUrl(string $receivedEventsUrl) : self
    {
        $this->receivedEventsUrl = $receivedEventsUrl;
        return $this;
    }
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
}