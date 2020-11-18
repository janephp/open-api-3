<?php

namespace PicturePark\API\Model;

class Share
{
    /**
     * Share ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Name of share.
     *
     * @var string|null
     */
    protected $name;
    /**
     * List of shared content IDs.
     *
     * @var string[]
     */
    protected $contentIds;
    /**
     * Audit information.
     *
     * @var mixed
     */
    protected $audit;
    /**
     * Date when share expires and cannot be accessed anymore.
     *
     * @var \DateTime|null
     */
    protected $expirationDate;
    /**
     * Type of share.
     *
     * @var mixed
     */
    protected $shareType;
    /**
     * Share is readonly if the current user is not the creator but only the recipient.
     *
     * @var bool
     */
    protected $isReadOnly;
    /**
     * Share ID.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Share ID.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Name of share.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name of share.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * List of shared content IDs.
     *
     * @return string[]
     */
    public function getContentIds() : array
    {
        return $this->contentIds;
    }
    /**
     * List of shared content IDs.
     *
     * @param string[] $contentIds
     *
     * @return self
     */
    public function setContentIds(array $contentIds) : self
    {
        $this->contentIds = $contentIds;
        return $this;
    }
    /**
     * Audit information.
     *
     * @return mixed
     */
    public function getAudit()
    {
        return $this->audit;
    }
    /**
     * Audit information.
     *
     * @param mixed $audit
     *
     * @return self
     */
    public function setAudit($audit) : self
    {
        $this->audit = $audit;
        return $this;
    }
    /**
     * Date when share expires and cannot be accessed anymore.
     *
     * @return \DateTime|null
     */
    public function getExpirationDate() : ?\DateTime
    {
        return $this->expirationDate;
    }
    /**
     * Date when share expires and cannot be accessed anymore.
     *
     * @param \DateTime|null $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(?\DateTime $expirationDate) : self
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * Type of share.
     *
     * @return mixed
     */
    public function getShareType()
    {
        return $this->shareType;
    }
    /**
     * Type of share.
     *
     * @param mixed $shareType
     *
     * @return self
     */
    public function setShareType($shareType) : self
    {
        $this->shareType = $shareType;
        return $this;
    }
    /**
     * Share is readonly if the current user is not the creator but only the recipient.
     *
     * @return bool
     */
    public function getIsReadOnly() : bool
    {
        return $this->isReadOnly;
    }
    /**
     * Share is readonly if the current user is not the creator but only the recipient.
     *
     * @param bool $isReadOnly
     *
     * @return self
     */
    public function setIsReadOnly(bool $isReadOnly) : self
    {
        $this->isReadOnly = $isReadOnly;
        return $this;
    }
}