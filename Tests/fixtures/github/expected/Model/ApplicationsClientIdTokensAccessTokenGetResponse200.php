<?php

namespace Github\Model;

class ApplicationsClientIdTokensAccessTokenGetResponse200
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * A list of scopes that this authorization is in.
     *
     * @var string[]|null
     */
    protected $scopes;
    /**
     * 
     *
     * @var string
     */
    protected $token;
    /**
     * 
     *
     * @var string|null
     */
    protected $tokenLastEight;
    /**
     * 
     *
     * @var string|null
     */
    protected $hashedToken;
    /**
     * 
     *
     * @var AuthorizationApp
     */
    protected $app;
    /**
     * 
     *
     * @var string|null
     */
    protected $note;
    /**
     * 
     *
     * @var string|null
     */
    protected $noteUrl;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $fingerprint;
    /**
     * 
     *
     * @var AuthorizationUser|null
     */
    protected $user;
    /**
     * 
     *
     * @var AuthorizationInstallation|null
     */
    protected $installation;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
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
     * A list of scopes that this authorization is in.
     *
     * @return string[]|null
     */
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    /**
     * A list of scopes that this authorization is in.
     *
     * @param string[]|null $scopes
     *
     * @return self
     */
    public function setScopes(?array $scopes) : self
    {
        $this->scopes = $scopes;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getTokenLastEight() : ?string
    {
        return $this->tokenLastEight;
    }
    /**
     * 
     *
     * @param string|null $tokenLastEight
     *
     * @return self
     */
    public function setTokenLastEight(?string $tokenLastEight) : self
    {
        $this->tokenLastEight = $tokenLastEight;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHashedToken() : ?string
    {
        return $this->hashedToken;
    }
    /**
     * 
     *
     * @param string|null $hashedToken
     *
     * @return self
     */
    public function setHashedToken(?string $hashedToken) : self
    {
        $this->hashedToken = $hashedToken;
        return $this;
    }
    /**
     * 
     *
     * @return AuthorizationApp
     */
    public function getApp() : AuthorizationApp
    {
        return $this->app;
    }
    /**
     * 
     *
     * @param AuthorizationApp $app
     *
     * @return self
     */
    public function setApp(AuthorizationApp $app) : self
    {
        $this->app = $app;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNote() : ?string
    {
        return $this->note;
    }
    /**
     * 
     *
     * @param string|null $note
     *
     * @return self
     */
    public function setNote(?string $note) : self
    {
        $this->note = $note;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNoteUrl() : ?string
    {
        return $this->noteUrl;
    }
    /**
     * 
     *
     * @param string|null $noteUrl
     *
     * @return self
     */
    public function setNoteUrl(?string $noteUrl) : self
    {
        $this->noteUrl = $noteUrl;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFingerprint() : ?string
    {
        return $this->fingerprint;
    }
    /**
     * 
     *
     * @param string|null $fingerprint
     *
     * @return self
     */
    public function setFingerprint(?string $fingerprint) : self
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }
    /**
     * 
     *
     * @return AuthorizationUser|null
     */
    public function getUser() : ?AuthorizationUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param AuthorizationUser|null $user
     *
     * @return self
     */
    public function setUser(?AuthorizationUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return AuthorizationInstallation|null
     */
    public function getInstallation() : ?AuthorizationInstallation
    {
        return $this->installation;
    }
    /**
     * 
     *
     * @param AuthorizationInstallation|null $installation
     *
     * @return self
     */
    public function setInstallation(?AuthorizationInstallation $installation) : self
    {
        $this->installation = $installation;
        return $this;
    }
}