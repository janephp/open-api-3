<?php

namespace Jane\OpenApi3\Tests\Expected\One\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;
interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}