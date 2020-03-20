<?php

namespace Jane\OpenApi3\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi3\JsonSchema\Model\MediaType;
use PhpParser\Node;

interface RequestBodyContentGeneratorInterface
{
    public function getTypes(MediaType $content, string $reference, Context $context): array;

    public function getTypeCondition(MediaType $content, string $reference, Context $context): Node;

    public function getSerializeStatements(MediaType $content, string $contentType, string $reference, Context $context): array;
}
