<?php

namespace Github\Model;

class ReferrerTraffic
{
    /**
     * 
     *
     * @var string
     */
    protected $referrer;
    /**
     * 
     *
     * @var int
     */
    protected $count;
    /**
     * 
     *
     * @var int
     */
    protected $uniques;
    /**
     * 
     *
     * @return string
     */
    public function getReferrer() : string
    {
        return $this->referrer;
    }
    /**
     * 
     *
     * @param string $referrer
     *
     * @return self
     */
    public function setReferrer(string $referrer) : self
    {
        $this->referrer = $referrer;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * 
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count) : self
    {
        $this->count = $count;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUniques() : int
    {
        return $this->uniques;
    }
    /**
     * 
     *
     * @param int $uniques
     *
     * @return self
     */
    public function setUniques(int $uniques) : self
    {
        $this->uniques = $uniques;
        return $this;
    }
}