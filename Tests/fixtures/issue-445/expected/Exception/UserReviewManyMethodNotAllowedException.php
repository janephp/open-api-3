<?php

namespace PicturePark\API\Exception;

class UserReviewManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}