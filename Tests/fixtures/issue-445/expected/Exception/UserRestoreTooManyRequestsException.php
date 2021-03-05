<?php

namespace PicturePark\API\Exception;

class UserRestoreTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}