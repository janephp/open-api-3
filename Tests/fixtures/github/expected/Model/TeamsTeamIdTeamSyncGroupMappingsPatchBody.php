<?php

namespace Github\Model;

class TeamsTeamIdTeamSyncGroupMappingsPatchBody
{
    /**
     * The IdP groups you want to connect to a GitHub team. When updating, the new `groups` object will replace the original one. You must include any existing groups that you don't want to remove.
     *
     * @var TeamsTeamIdTeamSyncGroupMappingsPatchBodyGroupsItem[]
     */
    protected $groups;
    /**
     * 
     *
     * @var string
     */
    protected $syncedAt;
    /**
     * The IdP groups you want to connect to a GitHub team. When updating, the new `groups` object will replace the original one. You must include any existing groups that you don't want to remove.
     *
     * @return TeamsTeamIdTeamSyncGroupMappingsPatchBodyGroupsItem[]
     */
    public function getGroups() : array
    {
        return $this->groups;
    }
    /**
     * The IdP groups you want to connect to a GitHub team. When updating, the new `groups` object will replace the original one. You must include any existing groups that you don't want to remove.
     *
     * @param TeamsTeamIdTeamSyncGroupMappingsPatchBodyGroupsItem[] $groups
     *
     * @return self
     */
    public function setGroups(array $groups) : self
    {
        $this->groups = $groups;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSyncedAt() : string
    {
        return $this->syncedAt;
    }
    /**
     * 
     *
     * @param string $syncedAt
     *
     * @return self
     */
    public function setSyncedAt(string $syncedAt) : self
    {
        $this->syncedAt = $syncedAt;
        return $this;
    }
}