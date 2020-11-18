<?php

namespace PicturePark\API\Model;

class PermissionSetDetailOfContentRight
{
    /**
     * The permission set ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Language specific permission set names.
     *
     * @var mixed
     */
    protected $names;
    /**
     * A list of content or metadata rights authorizing operations on Content Items or List Items.
     *
     * @var PermissionUserRoleRightsOfContentRight[]|null
     */
    protected $userRolesRights;
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @var PermissionUserRoleRightsOfPermissionSetRight[]|null
     */
    protected $userRolesPermissionSetRights;
    /**
     * When true this permission set will derogate all other configured permission sets on the Content Item or List Item.
     *
     * @var bool
     */
    protected $exclusive;
    /**
     * The owner token ID. Defines the permission set owner.
     *
     * @var string
     */
    protected $ownerTokenId;
    /**
     * Audit information.
     *
     * @var mixed|null
     */
    protected $audit;
    /**
     * The permission set ID.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The permission set ID.
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
    /**
     * Language specific permission set names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific permission set names.
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
     * A list of content or metadata rights authorizing operations on Content Items or List Items.
     *
     * @return PermissionUserRoleRightsOfContentRight[]|null
     */
    public function getUserRolesRights() : ?array
    {
        return $this->userRolesRights;
    }
    /**
     * A list of content or metadata rights authorizing operations on Content Items or List Items.
     *
     * @param PermissionUserRoleRightsOfContentRight[]|null $userRolesRights
     *
     * @return self
     */
    public function setUserRolesRights(?array $userRolesRights) : self
    {
        $this->userRolesRights = $userRolesRights;
        return $this;
    }
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @return PermissionUserRoleRightsOfPermissionSetRight[]|null
     */
    public function getUserRolesPermissionSetRights() : ?array
    {
        return $this->userRolesPermissionSetRights;
    }
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @param PermissionUserRoleRightsOfPermissionSetRight[]|null $userRolesPermissionSetRights
     *
     * @return self
     */
    public function setUserRolesPermissionSetRights(?array $userRolesPermissionSetRights) : self
    {
        $this->userRolesPermissionSetRights = $userRolesPermissionSetRights;
        return $this;
    }
    /**
     * When true this permission set will derogate all other configured permission sets on the Content Item or List Item.
     *
     * @return bool
     */
    public function getExclusive() : bool
    {
        return $this->exclusive;
    }
    /**
     * When true this permission set will derogate all other configured permission sets on the Content Item or List Item.
     *
     * @param bool $exclusive
     *
     * @return self
     */
    public function setExclusive(bool $exclusive) : self
    {
        $this->exclusive = $exclusive;
        return $this;
    }
    /**
     * The owner token ID. Defines the permission set owner.
     *
     * @return string
     */
    public function getOwnerTokenId() : string
    {
        return $this->ownerTokenId;
    }
    /**
     * The owner token ID. Defines the permission set owner.
     *
     * @param string $ownerTokenId
     *
     * @return self
     */
    public function setOwnerTokenId(string $ownerTokenId) : self
    {
        $this->ownerTokenId = $ownerTokenId;
        return $this;
    }
    /**
     * Audit information.
     *
     * @return mixed
     */
    public function getAudit()
    {
        return $this->audit;
    }
    /**
     * Audit information.
     *
     * @param mixed $audit
     *
     * @return self
     */
    public function setAudit($audit) : self
    {
        $this->audit = $audit;
        return $this;
    }
}