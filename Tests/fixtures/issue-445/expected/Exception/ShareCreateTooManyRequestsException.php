<?php

namespace PicturePark\API\Exception;

class ShareCreateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}