<?php

namespace PicturePark\API\Model;

class RedisDatabaseExceededException
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
    protected $customerId;
    /**
     * 
     *
     * @var int
     */
    protected $customerCount;
    /**
     * 
     *
     * @var int
     */
    protected $maxCount;
    /**
     * 
     *
     * @var int
     */
    protected $startIndex;
    /**
     * 
     *
     * @var int
     */
    protected $redisDatabaseCount;
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
    public function getCustomerId() : ?string
    {
        return $this->customerId;
    }
    /**
     * 
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId) : self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCustomerCount() : int
    {
        return $this->customerCount;
    }
    /**
     * 
     *
     * @param int $customerCount
     *
     * @return self
     */
    public function setCustomerCount(int $customerCount) : self
    {
        $this->customerCount = $customerCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxCount() : int
    {
        return $this->maxCount;
    }
    /**
     * 
     *
     * @param int $maxCount
     *
     * @return self
     */
    public function setMaxCount(int $maxCount) : self
    {
        $this->maxCount = $maxCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStartIndex() : int
    {
        return $this->startIndex;
    }
    /**
     * 
     *
     * @param int $startIndex
     *
     * @return self
     */
    public function setStartIndex(int $startIndex) : self
    {
        $this->startIndex = $startIndex;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRedisDatabaseCount() : int
    {
        return $this->redisDatabaseCount;
    }
    /**
     * 
     *
     * @param int $redisDatabaseCount
     *
     * @return self
     */
    public function setRedisDatabaseCount(int $redisDatabaseCount) : self
    {
        $this->redisDatabaseCount = $redisDatabaseCount;
        return $this;
    }
}