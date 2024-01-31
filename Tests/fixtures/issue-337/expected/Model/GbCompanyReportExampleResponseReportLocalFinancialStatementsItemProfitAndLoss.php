<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var float
     */
    protected $turnover;
    /**
     * 
     *
     * @var float
     */
    protected $costOfSales;
    /**
     * 
     *
     * @var float
     */
    protected $grossProfit;
    /**
     * 
     *
     * @var float
     */
    protected $depreciation;
    /**
     * 
     *
     * @var float
     */
    protected $auditFees;
    /**
     * 
     *
     * @var float
     */
    protected $wagesAndSalaries;
    /**
     * 
     *
     * @var float
     */
    protected $directorsRemuneration;
    /**
     * 
     *
     * @var float
     */
    protected $operatingProfit;
    /**
     * 
     *
     * @var float
     */
    protected $interestExpense;
    /**
     * 
     *
     * @var float
     */
    protected $profitBeforeTax;
    /**
     * 
     *
     * @var float
     */
    protected $taxation;
    /**
     * 
     *
     * @var float
     */
    protected $profitAfterTax;
    /**
     * 
     *
     * @var float
     */
    protected $dividends;
    /**
     * 
     *
     * @var float
     */
    protected $retainedProfit;
    /**
     * 
     *
     * @return float
     */
    public function getTurnover() : float
    {
        return $this->turnover;
    }
    /**
     * 
     *
     * @param float $turnover
     *
     * @return self
     */
    public function setTurnover(float $turnover) : self
    {
        $this->initialized['turnover'] = true;
        $this->turnover = $turnover;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCostOfSales() : float
    {
        return $this->costOfSales;
    }
    /**
     * 
     *
     * @param float $costOfSales
     *
     * @return self
     */
    public function setCostOfSales(float $costOfSales) : self
    {
        $this->initialized['costOfSales'] = true;
        $this->costOfSales = $costOfSales;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGrossProfit() : float
    {
        return $this->grossProfit;
    }
    /**
     * 
     *
     * @param float $grossProfit
     *
     * @return self
     */
    public function setGrossProfit(float $grossProfit) : self
    {
        $this->initialized['grossProfit'] = true;
        $this->grossProfit = $grossProfit;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDepreciation() : float
    {
        return $this->depreciation;
    }
    /**
     * 
     *
     * @param float $depreciation
     *
     * @return self
     */
    public function setDepreciation(float $depreciation) : self
    {
        $this->initialized['depreciation'] = true;
        $this->depreciation = $depreciation;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAuditFees() : float
    {
        return $this->auditFees;
    }
    /**
     * 
     *
     * @param float $auditFees
     *
     * @return self
     */
    public function setAuditFees(float $auditFees) : self
    {
        $this->initialized['auditFees'] = true;
        $this->auditFees = $auditFees;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWagesAndSalaries() : float
    {
        return $this->wagesAndSalaries;
    }
    /**
     * 
     *
     * @param float $wagesAndSalaries
     *
     * @return self
     */
    public function setWagesAndSalaries(float $wagesAndSalaries) : self
    {
        $this->initialized['wagesAndSalaries'] = true;
        $this->wagesAndSalaries = $wagesAndSalaries;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDirectorsRemuneration() : float
    {
        return $this->directorsRemuneration;
    }
    /**
     * 
     *
     * @param float $directorsRemuneration
     *
     * @return self
     */
    public function setDirectorsRemuneration(float $directorsRemuneration) : self
    {
        $this->initialized['directorsRemuneration'] = true;
        $this->directorsRemuneration = $directorsRemuneration;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOperatingProfit() : float
    {
        return $this->operatingProfit;
    }
    /**
     * 
     *
     * @param float $operatingProfit
     *
     * @return self
     */
    public function setOperatingProfit(float $operatingProfit) : self
    {
        $this->initialized['operatingProfit'] = true;
        $this->operatingProfit = $operatingProfit;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getInterestExpense() : float
    {
        return $this->interestExpense;
    }
    /**
     * 
     *
     * @param float $interestExpense
     *
     * @return self
     */
    public function setInterestExpense(float $interestExpense) : self
    {
        $this->initialized['interestExpense'] = true;
        $this->interestExpense = $interestExpense;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getProfitBeforeTax() : float
    {
        return $this->profitBeforeTax;
    }
    /**
     * 
     *
     * @param float $profitBeforeTax
     *
     * @return self
     */
    public function setProfitBeforeTax(float $profitBeforeTax) : self
    {
        $this->initialized['profitBeforeTax'] = true;
        $this->profitBeforeTax = $profitBeforeTax;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTaxation() : float
    {
        return $this->taxation;
    }
    /**
     * 
     *
     * @param float $taxation
     *
     * @return self
     */
    public function setTaxation(float $taxation) : self
    {
        $this->initialized['taxation'] = true;
        $this->taxation = $taxation;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getProfitAfterTax() : float
    {
        return $this->profitAfterTax;
    }
    /**
     * 
     *
     * @param float $profitAfterTax
     *
     * @return self
     */
    public function setProfitAfterTax(float $profitAfterTax) : self
    {
        $this->initialized['profitAfterTax'] = true;
        $this->profitAfterTax = $profitAfterTax;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDividends() : float
    {
        return $this->dividends;
    }
    /**
     * 
     *
     * @param float $dividends
     *
     * @return self
     */
    public function setDividends(float $dividends) : self
    {
        $this->initialized['dividends'] = true;
        $this->dividends = $dividends;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRetainedProfit() : float
    {
        return $this->retainedProfit;
    }
    /**
     * 
     *
     * @param float $retainedProfit
     *
     * @return self
     */
    public function setRetainedProfit(float $retainedProfit) : self
    {
        $this->initialized['retainedProfit'] = true;
        $this->retainedProfit = $retainedProfit;
        return $this;
    }
}