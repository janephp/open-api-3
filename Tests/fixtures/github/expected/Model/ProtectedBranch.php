<?php

namespace Github\Model;

class ProtectedBranch
{
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * Status Check Policy
     *
     * @var StatusCheckPolicy
     */
    protected $requiredStatusChecks;
    /**
     * 
     *
     * @var ProtectedBranchRequiredPullRequestReviews
     */
    protected $requiredPullRequestReviews;
    /**
     * 
     *
     * @var ProtectedBranchRequiredSignatures
     */
    protected $requiredSignatures;
    /**
     * 
     *
     * @var ProtectedBranchEnforceAdmins
     */
    protected $enforceAdmins;
    /**
     * 
     *
     * @var ProtectedBranchRequiredLinearHistory
     */
    protected $requiredLinearHistory;
    /**
     * 
     *
     * @var ProtectedBranchAllowForcePushes
     */
    protected $allowForcePushes;
    /**
     * 
     *
     * @var ProtectedBranchAllowDeletions
     */
    protected $allowDeletions;
    /**
     * Branch Restriction Policy
     *
     * @var BranchRestrictionPolicy
     */
    protected $restrictions;
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * Status Check Policy
     *
     * @return StatusCheckPolicy
     */
    public function getRequiredStatusChecks() : StatusCheckPolicy
    {
        return $this->requiredStatusChecks;
    }
    /**
     * Status Check Policy
     *
     * @param StatusCheckPolicy $requiredStatusChecks
     *
     * @return self
     */
    public function setRequiredStatusChecks(StatusCheckPolicy $requiredStatusChecks) : self
    {
        $this->requiredStatusChecks = $requiredStatusChecks;
        return $this;
    }
    /**
     * 
     *
     * @return ProtectedBranchRequiredPullRequestReviews
     */
    public function getRequiredPullRequestReviews() : ProtectedBranchRequiredPullRequestReviews
    {
        return $this->requiredPullRequestReviews;
    }
    /**
     * 
     *
     * @param ProtectedBranchRequiredPullRequestReviews $requiredPullRequestReviews
     *
     * @return self
     */
    public function setRequiredPullRequestReviews(ProtectedBranchRequiredPullRequestReviews $requiredPullRequestReviews) : self
    {
        $this->requiredPullRequestReviews = $requiredPullRequestReviews;
        return $this;
    }
    /**
     * 
     *
     * @return ProtectedBranchRequiredSignatures
     */
    public function getRequiredSignatures() : ProtectedBranchRequiredSignatures
    {
        return $this->requiredSignatures;
    }
    /**
     * 
     *
     * @param ProtectedBranchRequiredSignatures $requiredSignatures
     *
     * @return self
     */
    public function setRequiredSignatures(ProtectedBranchRequiredSignatures $requiredSignatures) : self
    {
        $this->requiredSignatures = $requiredSignatures;
        return $this;
    }
    /**
     * 
     *
     * @return ProtectedBranchEnforceAdmins
     */
    public function getEnforceAdmins() : ProtectedBranchEnforceAdmins
    {
        return $this->enforceAdmins;
    }
    /**
     * 
     *
     * @param ProtectedBranchEnforceAdmins $enforceAdmins
     *
     * @return self
     */
    public function setEnforceAdmins(ProtectedBranchEnforceAdmins $enforceAdmins) : self
    {
        $this->enforceAdmins = $enforceAdmins;
        return $this;
    }
    /**
     * 
     *
     * @return ProtectedBranchRequiredLinearHistory
     */
    public function getRequiredLinearHistory() : ProtectedBranchRequiredLinearHistory
    {
        return $this->requiredLinearHistory;
    }
    /**
     * 
     *
     * @param ProtectedBranchRequiredLinearHistory $requiredLinearHistory
     *
     * @return self
     */
    public function setRequiredLinearHistory(ProtectedBranchRequiredLinearHistory $requiredLinearHistory) : self
    {
        $this->requiredLinearHistory = $requiredLinearHistory;
        return $this;
    }
    /**
     * 
     *
     * @return ProtectedBranchAllowForcePushes
     */
    public function getAllowForcePushes() : ProtectedBranchAllowForcePushes
    {
        return $this->allowForcePushes;
    }
    /**
     * 
     *
     * @param ProtectedBranchAllowForcePushes $allowForcePushes
     *
     * @return self
     */
    public function setAllowForcePushes(ProtectedBranchAllowForcePushes $allowForcePushes) : self
    {
        $this->allowForcePushes = $allowForcePushes;
        return $this;
    }
    /**
     * 
     *
     * @return ProtectedBranchAllowDeletions
     */
    public function getAllowDeletions() : ProtectedBranchAllowDeletions
    {
        return $this->allowDeletions;
    }
    /**
     * 
     *
     * @param ProtectedBranchAllowDeletions $allowDeletions
     *
     * @return self
     */
    public function setAllowDeletions(ProtectedBranchAllowDeletions $allowDeletions) : self
    {
        $this->allowDeletions = $allowDeletions;
        return $this;
    }
    /**
     * Branch Restriction Policy
     *
     * @return BranchRestrictionPolicy
     */
    public function getRestrictions() : BranchRestrictionPolicy
    {
        return $this->restrictions;
    }
    /**
     * Branch Restriction Policy
     *
     * @param BranchRestrictionPolicy $restrictions
     *
     * @return self
     */
    public function setRestrictions(BranchRestrictionPolicy $restrictions) : self
    {
        $this->restrictions = $restrictions;
        return $this;
    }
}