<?php

namespace Github\Model;

class HookConfig
{
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $password;
    /**
     * 
     *
     * @var string
     */
    protected $room;
    /**
     * 
     *
     * @var string
     */
    protected $subdomain;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $insecureSsl;
    /**
     * 
     *
     * @var string
     */
    protected $contentType;
    /**
     * 
     *
     * @var string
     */
    protected $digest;
    /**
     * 
     *
     * @var string
     */
    protected $secret;
    /**
     * 
     *
     * @var string
     */
    protected $token;
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }
    /**
     * 
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password) : self
    {
        $this->password = $password;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRoom() : string
    {
        return $this->room;
    }
    /**
     * 
     *
     * @param string $room
     *
     * @return self
     */
    public function setRoom(string $room) : self
    {
        $this->room = $room;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSubdomain() : string
    {
        return $this->subdomain;
    }
    /**
     * 
     *
     * @param string $subdomain
     *
     * @return self
     */
    public function setSubdomain(string $subdomain) : self
    {
        $this->subdomain = $subdomain;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInsecureSsl() : string
    {
        return $this->insecureSsl;
    }
    /**
     * 
     *
     * @param string $insecureSsl
     *
     * @return self
     */
    public function setInsecureSsl(string $insecureSsl) : self
    {
        $this->insecureSsl = $insecureSsl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContentType() : string
    {
        return $this->contentType;
    }
    /**
     * 
     *
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(string $contentType) : self
    {
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDigest() : string
    {
        return $this->digest;
    }
    /**
     * 
     *
     * @param string $digest
     *
     * @return self
     */
    public function setDigest(string $digest) : self
    {
        $this->digest = $digest;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSecret() : string
    {
        return $this->secret;
    }
    /**
     * 
     *
     * @param string $secret
     *
     * @return self
     */
    public function setSecret(string $secret) : self
    {
        $this->secret = $secret;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }
    /**
     * 
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token) : self
    {
        $this->token = $token;
        return $this;
    }
}