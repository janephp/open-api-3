<?php

namespace PicturePark\API\Exception;

class MetadataUpdateOutdatedUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}