<?php

namespace ApiPlatform\Demo\Exception;

class PostReviewCollectionNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}