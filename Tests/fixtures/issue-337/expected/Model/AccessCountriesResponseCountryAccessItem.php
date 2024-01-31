<?php

namespace CreditSafe\API\Model;

class AccessCountriesResponseCountryAccessItem extends \ArrayObject
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
     * Country usage for Company Reports service
     *
     * @var AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem[]
     */
    protected $creditsafeConnectOnlineReports;
    /**
     * 
     *
     * @var AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItem[]
     */
    protected $creditsafeConnectOfflineReports;
    /**
     * 
     *
     * @var AccessCountriesResponseCountryAccessItemCreditsafeConnectMonitoringItem[]
     */
    protected $creditsafeConnectMonitoring;
    /**
     * 
     *
     * @var AccessCountriesResponseCountryAccessItemCreditsafeConnectDirectorReportsItem[]
     */
    protected $creditsafeConnectDirectorReports;
    /**
     * 
     *
     * @var AccessCountriesResponseCountryAccessItemCreditsafeConnectImageDocumentsItem[]
     */
    protected $creditsafeConnectImageDocuments;
    /**
     * 
     *
     * @var AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItem[]
     */
    protected $creditsafeConnectBankValidation;
    /**
     * 
     *
     * @var AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem[]
     */
    protected $creditsafeConnectBankVerification;
    /**
     * Country usage for Company Reports service
     *
     * @return AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem[]
     */
    public function getCreditsafeConnectOnlineReports() : array
    {
        return $this->creditsafeConnectOnlineReports;
    }
    /**
     * Country usage for Company Reports service
     *
     * @param AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem[] $creditsafeConnectOnlineReports
     *
     * @return self
     */
    public function setCreditsafeConnectOnlineReports(array $creditsafeConnectOnlineReports) : self
    {
        $this->initialized['creditsafeConnectOnlineReports'] = true;
        $this->creditsafeConnectOnlineReports = $creditsafeConnectOnlineReports;
        return $this;
    }
    /**
     * 
     *
     * @return AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItem[]
     */
    public function getCreditsafeConnectOfflineReports() : array
    {
        return $this->creditsafeConnectOfflineReports;
    }
    /**
     * 
     *
     * @param AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItem[] $creditsafeConnectOfflineReports
     *
     * @return self
     */
    public function setCreditsafeConnectOfflineReports(array $creditsafeConnectOfflineReports) : self
    {
        $this->initialized['creditsafeConnectOfflineReports'] = true;
        $this->creditsafeConnectOfflineReports = $creditsafeConnectOfflineReports;
        return $this;
    }
    /**
     * 
     *
     * @return AccessCountriesResponseCountryAccessItemCreditsafeConnectMonitoringItem[]
     */
    public function getCreditsafeConnectMonitoring() : array
    {
        return $this->creditsafeConnectMonitoring;
    }
    /**
     * 
     *
     * @param AccessCountriesResponseCountryAccessItemCreditsafeConnectMonitoringItem[] $creditsafeConnectMonitoring
     *
     * @return self
     */
    public function setCreditsafeConnectMonitoring(array $creditsafeConnectMonitoring) : self
    {
        $this->initialized['creditsafeConnectMonitoring'] = true;
        $this->creditsafeConnectMonitoring = $creditsafeConnectMonitoring;
        return $this;
    }
    /**
     * 
     *
     * @return AccessCountriesResponseCountryAccessItemCreditsafeConnectDirectorReportsItem[]
     */
    public function getCreditsafeConnectDirectorReports() : array
    {
        return $this->creditsafeConnectDirectorReports;
    }
    /**
     * 
     *
     * @param AccessCountriesResponseCountryAccessItemCreditsafeConnectDirectorReportsItem[] $creditsafeConnectDirectorReports
     *
     * @return self
     */
    public function setCreditsafeConnectDirectorReports(array $creditsafeConnectDirectorReports) : self
    {
        $this->initialized['creditsafeConnectDirectorReports'] = true;
        $this->creditsafeConnectDirectorReports = $creditsafeConnectDirectorReports;
        return $this;
    }
    /**
     * 
     *
     * @return AccessCountriesResponseCountryAccessItemCreditsafeConnectImageDocumentsItem[]
     */
    public function getCreditsafeConnectImageDocuments() : array
    {
        return $this->creditsafeConnectImageDocuments;
    }
    /**
     * 
     *
     * @param AccessCountriesResponseCountryAccessItemCreditsafeConnectImageDocumentsItem[] $creditsafeConnectImageDocuments
     *
     * @return self
     */
    public function setCreditsafeConnectImageDocuments(array $creditsafeConnectImageDocuments) : self
    {
        $this->initialized['creditsafeConnectImageDocuments'] = true;
        $this->creditsafeConnectImageDocuments = $creditsafeConnectImageDocuments;
        return $this;
    }
    /**
     * 
     *
     * @return AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItem[]
     */
    public function getCreditsafeConnectBankValidation() : array
    {
        return $this->creditsafeConnectBankValidation;
    }
    /**
     * 
     *
     * @param AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItem[] $creditsafeConnectBankValidation
     *
     * @return self
     */
    public function setCreditsafeConnectBankValidation(array $creditsafeConnectBankValidation) : self
    {
        $this->initialized['creditsafeConnectBankValidation'] = true;
        $this->creditsafeConnectBankValidation = $creditsafeConnectBankValidation;
        return $this;
    }
    /**
     * 
     *
     * @return AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem[]
     */
    public function getCreditsafeConnectBankVerification() : array
    {
        return $this->creditsafeConnectBankVerification;
    }
    /**
     * 
     *
     * @param AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem[] $creditsafeConnectBankVerification
     *
     * @return self
     */
    public function setCreditsafeConnectBankVerification(array $creditsafeConnectBankVerification) : self
    {
        $this->initialized['creditsafeConnectBankVerification'] = true;
        $this->creditsafeConnectBankVerification = $creditsafeConnectBankVerification;
        return $this;
    }
}