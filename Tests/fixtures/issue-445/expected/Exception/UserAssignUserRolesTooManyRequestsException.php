<?php

namespace PicturePark\API\Exception;

class UserAssignUserRolesTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}