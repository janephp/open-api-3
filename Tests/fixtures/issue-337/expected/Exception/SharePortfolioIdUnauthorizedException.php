<?php

namespace CreditSafe\API\Exception;

class SharePortfolioIdUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}