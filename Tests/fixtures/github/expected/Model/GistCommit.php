<?php

namespace Github\Model;

class GistCommit
{
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
    protected $version;
    /**
     * 
     *
     * @var GistCommitUser|null
     */
    protected $user;
    /**
     * 
     *
     * @var GistCommitChangeStatus
     */
    protected $changeStatus;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $committedAt;
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
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return GistCommitUser|null
     */
    public function getUser() : ?GistCommitUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param GistCommitUser|null $user
     *
     * @return self
     */
    public function setUser(?GistCommitUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return GistCommitChangeStatus
     */
    public function getChangeStatus() : GistCommitChangeStatus
    {
        return $this->changeStatus;
    }
    /**
     * 
     *
     * @param GistCommitChangeStatus $changeStatus
     *
     * @return self
     */
    public function setChangeStatus(GistCommitChangeStatus $changeStatus) : self
    {
        $this->changeStatus = $changeStatus;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCommittedAt() : \DateTime
    {
        return $this->committedAt;
    }
    /**
     * 
     *
     * @param \DateTime $committedAt
     *
     * @return self
     */
    public function setCommittedAt(\DateTime $committedAt) : self
    {
        $this->committedAt = $committedAt;
        return $this;
    }
}