<?php

namespace PicturePark\API\Model;

class UserRoleEditable
{
    /**
     * Language specific user role names.
     *
     * @var mixed
     */
    protected $names;
    /**
     * All user rights for this user role.
     *
     * @var string[]
     */
    protected $userRights;
    /**
     * Language specific user role names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific user role names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names) : self
    {
        $this->names = $names;
        return $this;
    }
    /**
     * All user rights for this user role.
     *
     * @return string[]
     */
    public function getUserRights() : array
    {
        return $this->userRights;
    }
    /**
     * All user rights for this user role.
     *
     * @param string[] $userRights
     *
     * @return self
     */
    public function setUserRights(array $userRights) : self
    {
        $this->userRights = $userRights;
        return $this;
    }
}