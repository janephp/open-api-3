<?php

namespace PicturePark\API\Model;

class AssignContentPermissionSetsAction
{
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @var string|null
     */
    protected $traceRefId;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * IDs of the permission sets to assign.
     *
     * @var mixed|null
     */
    protected $permissionSetIds;
    /**
     * Indicates whether the already assigned permissions should be replaced or merged.
     *
     * @var bool
     */
    protected $replace;
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @return string|null
     */
    public function getTraceRefId() : ?string
    {
        return $this->traceRefId;
    }
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @param string|null $traceRefId
     *
     * @return self
     */
    public function setTraceRefId(?string $traceRefId) : self
    {
        $this->traceRefId = $traceRefId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * IDs of the permission sets to assign.
     *
     * @return mixed
     */
    public function getPermissionSetIds()
    {
        return $this->permissionSetIds;
    }
    /**
     * IDs of the permission sets to assign.
     *
     * @param mixed $permissionSetIds
     *
     * @return self
     */
    public function setPermissionSetIds($permissionSetIds) : self
    {
        $this->permissionSetIds = $permissionSetIds;
        return $this;
    }
    /**
     * Indicates whether the already assigned permissions should be replaced or merged.
     *
     * @return bool
     */
    public function getReplace() : bool
    {
        return $this->replace;
    }
    /**
     * Indicates whether the already assigned permissions should be replaced or merged.
     *
     * @param bool $replace
     *
     * @return self
     */
    public function setReplace(bool $replace) : self
    {
        $this->replace = $replace;
        return $this;
    }
}