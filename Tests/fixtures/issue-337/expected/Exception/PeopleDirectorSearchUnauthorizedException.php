<?php

namespace CreditSafe\API\Exception;

class PeopleDirectorSearchUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}