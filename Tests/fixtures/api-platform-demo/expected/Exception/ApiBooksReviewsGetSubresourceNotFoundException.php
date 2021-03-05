<?php

namespace ApiPlatform\Demo\Exception;

class ApiBooksReviewsGetSubresourceNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}