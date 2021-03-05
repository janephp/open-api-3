<?php

namespace ApiPlatform\Demo\Exception;

class GetReviewItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}