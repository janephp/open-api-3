<?php

namespace PicturePark\API\Exception;

class TransferDeleteUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}