<?php

namespace PicturePark\API\Model;

class UserRole
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
     * User role ID.
     *
     * @var string
     */
    protected $id;
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
    /**
     * User role ID.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * User role ID.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
}