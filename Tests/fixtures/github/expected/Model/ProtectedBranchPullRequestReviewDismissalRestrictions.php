<?php

namespace Github\Model;

class ProtectedBranchPullRequestReviewDismissalRestrictions
{
    /**
     * The list of users with review dismissal access.
     *
     * @var SimpleUser[]
     */
    protected $users;
    /**
     * The list of teams with review dismissal access.
     *
     * @var Team[]
     */
    protected $teams;
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
    protected $usersUrl;
    /**
     * 
     *
     * @var string
     */
    protected $teamsUrl;
    /**
     * The list of users with review dismissal access.
     *
     * @return SimpleUser[]
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * The list of users with review dismissal access.
     *
     * @param SimpleUser[] $users
     *
     * @return self
     */
    public function setUsers(array $users) : self
    {
        $this->users = $users;
        return $this;
    }
    /**
     * The list of teams with review dismissal access.
     *
     * @return Team[]
     */
    public function getTeams() : array
    {
        return $this->teams;
    }
    /**
     * The list of teams with review dismissal access.
     *
     * @param Team[] $teams
     *
     * @return self
     */
    public function setTeams(array $teams) : self
    {
        $this->teams = $teams;
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
    public function getUsersUrl() : string
    {
        return $this->usersUrl;
    }
    /**
     * 
     *
     * @param string $usersUrl
     *
     * @return self
     */
    public function setUsersUrl(string $usersUrl) : self
    {
        $this->usersUrl = $usersUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeamsUrl() : string
    {
        return $this->teamsUrl;
    }
    /**
     * 
     *
     * @param string $teamsUrl
     *
     * @return self
     */
    public function setTeamsUrl(string $teamsUrl) : self
    {
        $this->teamsUrl = $teamsUrl;
        return $this;
    }
}