<?php

namespace PicturePark\API\Exception;

class BusinessProcessChangeStateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}