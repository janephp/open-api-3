<?php

namespace PicturePark\API\Exception;

class IdentityProviderGetAllBasicInfosMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}