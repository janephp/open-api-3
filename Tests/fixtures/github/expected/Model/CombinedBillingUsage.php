<?php

namespace Github\Model;

class CombinedBillingUsage
{
    /**
     * Numbers of days left in billing cycle.
     *
     * @var int
     */
    protected $daysLeftInBillingCycle;
    /**
     * Estimated storage space (GB) used in billing cycle.
     *
     * @var int
     */
    protected $estimatedPaidStorageForMonth;
    /**
     * Estimated sum of free and paid storage space (GB) used in billing cycle.
     *
     * @var int
     */
    protected $estimatedStorageForMonth;
    /**
     * Numbers of days left in billing cycle.
     *
     * @return int
     */
    public function getDaysLeftInBillingCycle() : int
    {
        return $this->daysLeftInBillingCycle;
    }
    /**
     * Numbers of days left in billing cycle.
     *
     * @param int $daysLeftInBillingCycle
     *
     * @return self
     */
    public function setDaysLeftInBillingCycle(int $daysLeftInBillingCycle) : self
    {
        $this->daysLeftInBillingCycle = $daysLeftInBillingCycle;
        return $this;
    }
    /**
     * Estimated storage space (GB) used in billing cycle.
     *
     * @return int
     */
    public function getEstimatedPaidStorageForMonth() : int
    {
        return $this->estimatedPaidStorageForMonth;
    }
    /**
     * Estimated storage space (GB) used in billing cycle.
     *
     * @param int $estimatedPaidStorageForMonth
     *
     * @return self
     */
    public function setEstimatedPaidStorageForMonth(int $estimatedPaidStorageForMonth) : self
    {
        $this->estimatedPaidStorageForMonth = $estimatedPaidStorageForMonth;
        return $this;
    }
    /**
     * Estimated sum of free and paid storage space (GB) used in billing cycle.
     *
     * @return int
     */
    public function getEstimatedStorageForMonth() : int
    {
        return $this->estimatedStorageForMonth;
    }
    /**
     * Estimated sum of free and paid storage space (GB) used in billing cycle.
     *
     * @param int $estimatedStorageForMonth
     *
     * @return self
     */
    public function setEstimatedStorageForMonth(int $estimatedStorageForMonth) : self
    {
        $this->estimatedStorageForMonth = $estimatedStorageForMonth;
        return $this;
    }
}