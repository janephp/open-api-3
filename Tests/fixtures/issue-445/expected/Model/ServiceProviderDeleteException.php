<?php

namespace PicturePark\API\Model;

class ServiceProviderDeleteException
{
    /**
     * 
     *
     * @var string
     */
    protected $traceLevel;
    /**
     * 
     *
     * @var string|null
     */
    protected $traceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $traceJobId;
    /**
     * 
     *
     * @var int
     */
    protected $httpStatusCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $exceptionMessage;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * 
     *
     * @var string|null
     */
    protected $serviceProviderId;
    /**
     * 
     *
     * @var string|null
     */
    protected $detailedErrorMessage;
    /**
     * 
     *
     * @return string
     */
    public function getTraceLevel() : string
    {
        return $this->traceLevel;
    }
    /**
     * 
     *
     * @param string $traceLevel
     *
     * @return self
     */
    public function setTraceLevel(string $traceLevel) : self
    {
        $this->traceLevel = $traceLevel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTraceId() : ?string
    {
        return $this->traceId;
    }
    /**
     * 
     *
     * @param string|null $traceId
     *
     * @return self
     */
    public function setTraceId(?string $traceId) : self
    {
        $this->traceId = $traceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTraceJobId() : ?string
    {
        return $this->traceJobId;
    }
    /**
     * 
     *
     * @param string|null $traceJobId
     *
     * @return self
     */
    public function setTraceJobId(?string $traceJobId) : self
    {
        $this->traceJobId = $traceJobId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHttpStatusCode() : int
    {
        return $this->httpStatusCode;
    }
    /**
     * 
     *
     * @param int $httpStatusCode
     *
     * @return self
     */
    public function setHttpStatusCode(int $httpStatusCode) : self
    {
        $this->httpStatusCode = $httpStatusCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExceptionMessage() : ?string
    {
        return $this->exceptionMessage;
    }
    /**
     * 
     *
     * @param string|null $exceptionMessage
     *
     * @return self
     */
    public function setExceptionMessage(?string $exceptionMessage) : self
    {
        $this->exceptionMessage = $exceptionMessage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getServiceProviderId() : ?string
    {
        return $this->serviceProviderId;
    }
    /**
     * 
     *
     * @param string|null $serviceProviderId
     *
     * @return self
     */
    public function setServiceProviderId(?string $serviceProviderId) : self
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDetailedErrorMessage() : ?string
    {
        return $this->detailedErrorMessage;
    }
    /**
     * 
     *
     * @param string|null $detailedErrorMessage
     *
     * @return self
     */
    public function setDetailedErrorMessage(?string $detailedErrorMessage) : self
    {
        $this->detailedErrorMessage = $detailedErrorMessage;
        return $this;
    }
}