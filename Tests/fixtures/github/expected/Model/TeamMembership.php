<?php

namespace Github\Model;

class TeamMembership
{
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * The role of the user in the team.
     *
     * @var string
     */
    protected $role = 'member';
    /**
     * 
     *
     * @var string
     */
    protected $state;
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
     * The role of the user in the team.
     *
     * @return string
     */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
     * The role of the user in the team.
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role) : self
    {
        $this->role = $role;
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
}