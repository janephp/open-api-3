<?php

namespace Github\Model;

class PullRequestSimpleHead
{
    /**
     * 
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @var string
     */
    protected $ref;
    /**
     * A git repository
     *
     * @var Repository
     */
    protected $repo;
    /**
     * 
     *
     * @var string
     */
    protected $sha;
    /**
     * 
     *
     * @var PullRequestSimpleHeadUser|null
     */
    protected $user;
    /**
     * 
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRef() : string
    {
        return $this->ref;
    }
    /**
     * 
     *
     * @param string $ref
     *
     * @return self
     */
    public function setRef(string $ref) : self
    {
        $this->ref = $ref;
        return $this;
    }
    /**
     * A git repository
     *
     * @return Repository
     */
    public function getRepo() : Repository
    {
        return $this->repo;
    }
    /**
     * A git repository
     *
     * @param Repository $repo
     *
     * @return self
     */
    public function setRepo(Repository $repo) : self
    {
        $this->repo = $repo;
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
     * @return PullRequestSimpleHeadUser|null
     */
    public function getUser() : ?PullRequestSimpleHeadUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param PullRequestSimpleHeadUser|null $user
     *
     * @return self
     */
    public function setUser(?PullRequestSimpleHeadUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
}