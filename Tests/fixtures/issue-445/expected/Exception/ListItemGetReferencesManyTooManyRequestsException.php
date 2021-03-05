<?php

namespace PicturePark\API\Exception;

class ListItemGetReferencesManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}