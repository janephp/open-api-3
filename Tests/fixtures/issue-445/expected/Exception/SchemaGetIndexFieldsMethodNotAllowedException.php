<?php

namespace PicturePark\API\Exception;

class SchemaGetIndexFieldsMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}