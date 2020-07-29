<?php

namespace Github\Model;

class ShortBranch
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var ShortBranchCommit
     */
    protected $commit;
    /**
     * 
     *
     * @var bool
     */
    protected $protected;
    /**
     * Branch Protection
     *
     * @var BranchProtection
     */
    protected $protection;
    /**
     * 
     *
     * @var string
     */
    protected $protectionUrl;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return ShortBranchCommit
     */
    public function getCommit() : ShortBranchCommit
    {
        return $this->commit;
    }
    /**
     * 
     *
     * @param ShortBranchCommit $commit
     *
     * @return self
     */
    public function setCommit(ShortBranchCommit $commit) : self
    {
        $this->commit = $commit;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getProtected() : bool
    {
        return $this->protected;
    }
    /**
     * 
     *
     * @param bool $protected
     *
     * @return self
     */
    public function setProtected(bool $protected) : self
    {
        $this->protected = $protected;
        return $this;
    }
    /**
     * Branch Protection
     *
     * @return BranchProtection
     */
    public function getProtection() : BranchProtection
    {
        return $this->protection;
    }
    /**
     * Branch Protection
     *
     * @param BranchProtection $protection
     *
     * @return self
     */
    public function setProtection(BranchProtection $protection) : self
    {
        $this->protection = $protection;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProtectionUrl() : string
    {
        return $this->protectionUrl;
    }
    /**
     * 
     *
     * @param string $protectionUrl
     *
     * @return self
     */
    public function setProtectionUrl(string $protectionUrl) : self
    {
        $this->protectionUrl = $protectionUrl;
        return $this;
    }
}