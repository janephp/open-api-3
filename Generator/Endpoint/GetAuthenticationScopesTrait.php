<?php

namespace Jane\OpenApi3\Generator\Endpoint;

use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

trait GetAuthenticationScopesTrait
{
    public function getAuthenticationScopesMethod(OperationGuess $operation): Stmt\ClassMethod
    {
        $securityScopes = [];
        foreach ($operation->getSecurityScopes() as $scope) {
            $securityScopes[] = new Expr\ArrayItem(new Scalar\String_($scope));
        }

        return new Stmt\ClassMethod('getAuthenticationScopes', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'returnType' => new Name('array'),
            'stmts' => [new Stmt\Return_(new Expr\Array_($securityScopes))],
        ]);
    }
}
