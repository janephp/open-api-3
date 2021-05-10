<?php

namespace PicturePark\API\Exception;

class XmpMappingDeleteMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}