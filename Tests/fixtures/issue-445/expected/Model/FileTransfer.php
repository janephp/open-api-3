<?php

namespace PicturePark\API\Model;

class FileTransfer
{
    /**
     * ID of file transfer.
     *
     * @var string
     */
    protected $id;
    /**
     * Name of file transfer.
     *
     * @var string
     */
    protected $name;
    /**
     * Replaced in favor of RequestId. Client provided identifier.
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $identifier;
    /**
     * Client provided identifier.
     *
     * @var string
     */
    protected $requestId;
    /**
     * ID of transfer.
     *
     * @var string
     */
    protected $transferId;
    /**
     * State of file transfer.
     *
     * @var mixed
     */
    protected $state;
    /**
     * ID of Content created for file.
     *
     * @var string|null
     */
    protected $contentId;
    /**
     * ID of file transfer.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * ID of file transfer.
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
     * Name of file transfer.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of file transfer.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Replaced in favor of RequestId. Client provided identifier.
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getIdentifier() : ?string
    {
        return $this->identifier;
    }
    /**
     * Replaced in favor of RequestId. Client provided identifier.
     *
     * @param string|null $identifier
     *
     * @deprecated
     *
     * @return self
     */
    public function setIdentifier(?string $identifier) : self
    {
        $this->identifier = $identifier;
        return $this;
    }
    /**
     * Client provided identifier.
     *
     * @return string
     */
    public function getRequestId() : string
    {
        return $this->requestId;
    }
    /**
     * Client provided identifier.
     *
     * @param string $requestId
     *
     * @return self
     */
    public function setRequestId(string $requestId) : self
    {
        $this->requestId = $requestId;
        return $this;
    }
    /**
     * ID of transfer.
     *
     * @return string
     */
    public function getTransferId() : string
    {
        return $this->transferId;
    }
    /**
     * ID of transfer.
     *
     * @param string $transferId
     *
     * @return self
     */
    public function setTransferId(string $transferId) : self
    {
        $this->transferId = $transferId;
        return $this;
    }
    /**
     * State of file transfer.
     *
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * State of file transfer.
     *
     * @param mixed $state
     *
     * @return self
     */
    public function setState($state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * ID of Content created for file.
     *
     * @return string|null
     */
    public function getContentId() : ?string
    {
        return $this->contentId;
    }
    /**
     * ID of Content created for file.
     *
     * @param string|null $contentId
     *
     * @return self
     */
    public function setContentId(?string $contentId) : self
    {
        $this->contentId = $contentId;
        return $this;
    }
}