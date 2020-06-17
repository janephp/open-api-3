<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportCreditScore
{
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating
     */
    protected $currentCreditRating;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCreditScoreCurrentContractLimit
     */
    protected $currentContractLimit;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating
     */
    protected $previousCreditRating;
    /**
     * 
     *
     * @var string
     */
    protected $latestRatingChangeDate;
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating
     */
    public function getCurrentCreditRating() : GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating
    {
        return $this->currentCreditRating;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating $currentCreditRating
     *
     * @return self
     */
    public function setCurrentCreditRating(GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating $currentCreditRating) : self
    {
        $this->currentCreditRating = $currentCreditRating;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCreditScoreCurrentContractLimit
     */
    public function getCurrentContractLimit() : GbCompanyReportExampleResponseReportCreditScoreCurrentContractLimit
    {
        return $this->currentContractLimit;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCreditScoreCurrentContractLimit $currentContractLimit
     *
     * @return self
     */
    public function setCurrentContractLimit(GbCompanyReportExampleResponseReportCreditScoreCurrentContractLimit $currentContractLimit) : self
    {
        $this->currentContractLimit = $currentContractLimit;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating
     */
    public function getPreviousCreditRating() : GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating
    {
        return $this->previousCreditRating;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating $previousCreditRating
     *
     * @return self
     */
    public function setPreviousCreditRating(GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating $previousCreditRating) : self
    {
        $this->previousCreditRating = $previousCreditRating;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLatestRatingChangeDate() : string
    {
        return $this->latestRatingChangeDate;
    }
    /**
     * 
     *
     * @param string $latestRatingChangeDate
     *
     * @return self
     */
    public function setLatestRatingChangeDate(string $latestRatingChangeDate) : self
    {
        $this->latestRatingChangeDate = $latestRatingChangeDate;
        return $this;
    }
}