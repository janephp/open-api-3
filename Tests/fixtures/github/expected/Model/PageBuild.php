<?php

namespace Github\Model;

class PageBuild
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
    protected $status;
    /**
     * 
     *
     * @var PageBuildError
     */
    protected $error;
    /**
     * 
     *
     * @var PageBuildPusher|null
     */
    protected $pusher;
    /**
     * 
     *
     * @var string
     */
    protected $commit;
    /**
     * 
     *
     * @var int
     */
    protected $duration;
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
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return PageBuildError
     */
    public function getError() : PageBuildError
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param PageBuildError $error
     *
     * @return self
     */
    public function setError(PageBuildError $error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * 
     *
     * @return PageBuildPusher|null
     */
    public function getPusher() : ?PageBuildPusher
    {
        return $this->pusher;
    }
    /**
     * 
     *
     * @param PageBuildPusher|null $pusher
     *
     * @return self
     */
    public function setPusher(?PageBuildPusher $pusher) : self
    {
        $this->pusher = $pusher;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommit() : string
    {
        return $this->commit;
    }
    /**
     * 
     *
     * @param string $commit
     *
     * @return self
     */
    public function setCommit(string $commit) : self
    {
        $this->commit = $commit;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDuration() : int
    {
        return $this->duration;
    }
    /**
     * 
     *
     * @param int $duration
     *
     * @return self
     */
    public function setDuration(int $duration) : self
    {
        $this->duration = $duration;
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