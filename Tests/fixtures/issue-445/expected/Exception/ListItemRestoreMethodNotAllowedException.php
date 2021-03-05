<?php

namespace PicturePark\API\Exception;

class ListItemRestoreMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}