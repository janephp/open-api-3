<?php

namespace Github\Exception;

class UsersCheckPersonIsFollowedByAuthenticatedNotFoundException extends NotFoundException
{
    private $basicError;
    public function __construct(\Github\Model\BasicError $basicError)
    {
        parent::__construct('Response if the person is not followed by the authenticated user', 404);
        $this->basicError = $basicError;
    }
    public function getBasicError()
    {
        return $this->basicError;
    }
}