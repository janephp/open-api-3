<?php

namespace Github\Model;

class MarketplacePurchaseMarketplacePendingChange
{
    /**
     * 
     *
     * @var bool
     */
    protected $isInstalled;
    /**
     * 
     *
     * @var string
     */
    protected $effectiveDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $unitCount;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * Marketplace Listing Plan
     *
     * @var MarketplaceListingPlan
     */
    protected $plan;
    /**
     * 
     *
     * @return bool
     */
    public function getIsInstalled() : bool
    {
        return $this->isInstalled;
    }
    /**
     * 
     *
     * @param bool $isInstalled
     *
     * @return self
     */
    public function setIsInstalled(bool $isInstalled) : self
    {
        $this->isInstalled = $isInstalled;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEffectiveDate() : string
    {
        return $this->effectiveDate;
    }
    /**
     * 
     *
     * @param string $effectiveDate
     *
     * @return self
     */
    public function setEffectiveDate(string $effectiveDate) : self
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUnitCount() : ?int
    {
        return $this->unitCount;
    }
    /**
     * 
     *
     * @param int|null $unitCount
     *
     * @return self
     */
    public function setUnitCount(?int $unitCount) : self
    {
        $this->unitCount = $unitCount;
        return $this;
    }
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
     * Marketplace Listing Plan
     *
     * @return MarketplaceListingPlan
     */
    public function getPlan() : MarketplaceListingPlan
    {
        return $this->plan;
    }
    /**
     * Marketplace Listing Plan
     *
     * @param MarketplaceListingPlan $plan
     *
     * @return self
     */
    public function setPlan(MarketplaceListingPlan $plan) : self
    {
        $this->plan = $plan;
        return $this;
    }
}