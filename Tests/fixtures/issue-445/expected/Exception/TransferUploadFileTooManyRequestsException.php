<?php

namespace PicturePark\API\Exception;

class TransferUploadFileTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}