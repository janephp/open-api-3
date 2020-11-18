<?php

namespace PicturePark\API\Model;

class TransferWebLink
{
    /**
     * Replaced in favor of RequestId. Client generated identifier of the item.
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $identifier;
    /**
     * Client generated identifier of the item.
     *
     * @var string|null
     */
    protected $requestId;
    /**
     * URL of the item.
     *
     * @var string
     */
    protected $url;
    /**
     * Optional target filename of the file.
     *
     * @var string|null
     */
    protected $fileName;
    /**
     * Replaced in favor of RequestId. Client generated identifier of the item.
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
     * Replaced in favor of RequestId. Client generated identifier of the item.
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
     * Client generated identifier of the item.
     *
     * @return string|null
     */
    public function getRequestId() : ?string
    {
        return $this->requestId;
    }
    /**
     * Client generated identifier of the item.
     *
     * @param string|null $requestId
     *
     * @return self
     */
    public function setRequestId(?string $requestId) : self
    {
        $this->requestId = $requestId;
        return $this;
    }
    /**
     * URL of the item.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * URL of the item.
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
     * Optional target filename of the file.
     *
     * @return string|null
     */
    public function getFileName() : ?string
    {
        return $this->fileName;
    }
    /**
     * Optional target filename of the file.
     *
     * @param string|null $fileName
     *
     * @return self
     */
    public function setFileName(?string $fileName) : self
    {
        $this->fileName = $fileName;
        return $this;
    }
}