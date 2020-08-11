<?php

namespace Github\Model;

class TeamsTeamIdMembersUsernamePutResponse422
{
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var TeamsTeamIdMembersUsernamePutResponse422ErrorsItem[]
     */
    protected $errors;
    /**
     * 
     *
     * @var string
     */
    protected $documentationUrl;
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return TeamsTeamIdMembersUsernamePutResponse422ErrorsItem[]
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param TeamsTeamIdMembersUsernamePutResponse422ErrorsItem[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDocumentationUrl() : string
    {
        return $this->documentationUrl;
    }
    /**
     * 
     *
     * @param string $documentationUrl
     *
     * @return self
     */
    public function setDocumentationUrl(string $documentationUrl) : self
    {
        $this->documentationUrl = $documentationUrl;
        return $this;
    }
}