<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetDeleteManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}