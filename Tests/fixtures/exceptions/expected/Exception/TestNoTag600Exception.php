<?php

namespace Jane\OpenApi3\Tests\Expected\Exception;

class TestNoTag600Exception extends \RuntimeException implements ServerException
{
    public function __construct()
    {
        parent::__construct('New update available', 600);
    }
}