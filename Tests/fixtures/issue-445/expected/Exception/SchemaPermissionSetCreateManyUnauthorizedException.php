<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetCreateManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}