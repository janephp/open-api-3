<?php

namespace Jane\OpenApi3\Tests\Expected\Exception;

final class UnexpectedStatusCodeException extends \RuntimeException implements ClientException
{
    public function __construct($status)
    {
        parent::__construct('', $status);
    }
}