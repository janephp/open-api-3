<?php

namespace PicturePark\API\Model;

class UserLockRequest
{
    /**
    * Indicates the requested lock state of the user.
    If _true_ was specified, the user will be _locked_. _False_ will unlock the previously _locked_ user.
    If User is already in desired state, this will be returned as error.
    *
    * @var bool
    */
    protected $lock;
    /**
    * Indicates the requested lock state of the user.
    If _true_ was specified, the user will be _locked_. _False_ will unlock the previously _locked_ user.
    If User is already in desired state, this will be returned as error.
    *
    * @return bool
    */
    public function getLock() : bool
    {
        return $this->lock;
    }
    /**
    * Indicates the requested lock state of the user.
    If _true_ was specified, the user will be _locked_. _False_ will unlock the previously _locked_ user.
    If User is already in desired state, this will be returned as error.
    *
    * @param bool $lock
    *
    * @return self
    */
    public function setLock(bool $lock) : self
    {
        $this->lock = $lock;
        return $this;
    }
}