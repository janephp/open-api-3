<?php

namespace PicturePark\API\Model;

class ShareUser
{
    /**
     * Name of user
     *
     * @var string
     */
    protected $displayName;
    /**
     * MD5 hash of email address. Can be used to display gravatar image
     *
     * @var string
     */
    protected $emailHash;
    /**
     * Name of user
     *
     * @return string
     */
    public function getDisplayName() : string
    {
        return $this->displayName;
    }
    /**
     * Name of user
     *
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName) : self
    {
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * MD5 hash of email address. Can be used to display gravatar image
     *
     * @return string
     */
    public function getEmailHash() : string
    {
        return $this->emailHash;
    }
    /**
     * MD5 hash of email address. Can be used to display gravatar image
     *
     * @param string $emailHash
     *
     * @return self
     */
    public function setEmailHash(string $emailHash) : self
    {
        $this->emailHash = $emailHash;
        return $this;
    }
}