<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItem
{
    /**
     * 
     *
     * @var int
     */
    protected $matchID;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return int
     */
    public function getMatchID() : int
    {
        return $this->matchID;
    }
    /**
     * 
     *
     * @param int $matchID
     *
     * @return self
     */
    public function setMatchID(int $matchID) : self
    {
        $this->matchID = $matchID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}