<?php

namespace Github\Model;

class OrgsOrgHooksPostBodyConfig
{
    /**
     * The URL to which the payloads will be delivered.
     *
     * @var string
     */
    protected $url;
    /**
     * The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     *
     * @var string
     */
    protected $contentType;
    /**
     * If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value in the [`X-Hub-Signature`](https://developer.github.com/webhooks/event-payloads/#delivery-headers) header.
     *
     * @var string
     */
    protected $secret;
    /**
     * Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**
     *
     * @var string
     */
    protected $insecureSsl;
    /**
     * 
     *
     * @var string
     */
    protected $username;
    /**
     * 
     *
     * @var string
     */
    protected $password;
    /**
     * The URL to which the payloads will be delivered.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The URL to which the payloads will be delivered.
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
     * The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     *
     * @return string
     */
    public function getContentType() : string
    {
        return $this->contentType;
    }
    /**
     * The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
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
     * If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value in the [`X-Hub-Signature`](https://developer.github.com/webhooks/event-payloads/#delivery-headers) header.
     *
     * @return string
     */
    public function getSecret() : string
    {
        return $this->secret;
    }
    /**
     * If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value in the [`X-Hub-Signature`](https://developer.github.com/webhooks/event-payloads/#delivery-headers) header.
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
     * Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**
     *
     * @return string
     */
    public function getInsecureSsl() : string
    {
        return $this->insecureSsl;
    }
    /**
     * Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**
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
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username) : self
    {
        $this->username = $username;
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
}