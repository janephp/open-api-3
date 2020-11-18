<?php

namespace PicturePark\API\Model;

class BusinessRuleTracedEvaluationCondition
{
    /**
     * Trace reference ID of condition.
     *
     * @var string|null
     */
    protected $traceRefId;
    /**
     * Indicates if this condition evaluated to true.
     *
     * @var bool
     */
    protected $satisfied;
    /**
     * Additional reason why condition evaluated to given result.
     *
     * @var string|null
     */
    protected $reason;
    /**
     * Trace reference ID of condition.
     *
     * @return string|null
     */
    public function getTraceRefId() : ?string
    {
        return $this->traceRefId;
    }
    /**
     * Trace reference ID of condition.
     *
     * @param string|null $traceRefId
     *
     * @return self
     */
    public function setTraceRefId(?string $traceRefId) : self
    {
        $this->traceRefId = $traceRefId;
        return $this;
    }
    /**
     * Indicates if this condition evaluated to true.
     *
     * @return bool
     */
    public function getSatisfied() : bool
    {
        return $this->satisfied;
    }
    /**
     * Indicates if this condition evaluated to true.
     *
     * @param bool $satisfied
     *
     * @return self
     */
    public function setSatisfied(bool $satisfied) : self
    {
        $this->satisfied = $satisfied;
        return $this;
    }
    /**
     * Additional reason why condition evaluated to given result.
     *
     * @return string|null
     */
    public function getReason() : ?string
    {
        return $this->reason;
    }
    /**
     * Additional reason why condition evaluated to given result.
     *
     * @param string|null $reason
     *
     * @return self
     */
    public function setReason(?string $reason) : self
    {
        $this->reason = $reason;
        return $this;
    }
}