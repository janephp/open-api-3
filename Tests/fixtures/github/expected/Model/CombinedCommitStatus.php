<?php

namespace Github\Model;

class CombinedCommitStatus
{
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var SimpleCommitStatus[]
     */
    protected $statuses;
    /**
     * 
     *
     * @var string
     */
    protected $sha;
    /**
     * 
     *
     * @var int
     */
    protected $totalCount;
    /**
     * Minimal Repository
     *
     * @var MinimalRepository
     */
    protected $repository;
    /**
     * 
     *
     * @var string
     */
    protected $commitUrl;
    /**
     * 
     *
     * @var string
     */
    protected $url;
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
     * @return SimpleCommitStatus[]
     */
    public function getStatuses() : array
    {
        return $this->statuses;
    }
    /**
     * 
     *
     * @param SimpleCommitStatus[] $statuses
     *
     * @return self
     */
    public function setStatuses(array $statuses) : self
    {
        $this->statuses = $statuses;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSha() : string
    {
        return $this->sha;
    }
    /**
     * 
     *
     * @param string $sha
     *
     * @return self
     */
    public function setSha(string $sha) : self
    {
        $this->sha = $sha;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalCount() : int
    {
        return $this->totalCount;
    }
    /**
     * 
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount) : self
    {
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * Minimal Repository
     *
     * @return MinimalRepository
     */
    public function getRepository() : MinimalRepository
    {
        return $this->repository;
    }
    /**
     * Minimal Repository
     *
     * @param MinimalRepository $repository
     *
     * @return self
     */
    public function setRepository(MinimalRepository $repository) : self
    {
        $this->repository = $repository;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommitUrl() : string
    {
        return $this->commitUrl;
    }
    /**
     * 
     *
     * @param string $commitUrl
     *
     * @return self
     */
    public function setCommitUrl(string $commitUrl) : self
    {
        $this->commitUrl = $commitUrl;
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
}