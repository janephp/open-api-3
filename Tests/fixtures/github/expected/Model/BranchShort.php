<?php

namespace Github\Model;

class BranchShort
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
     * @var BranchShortCommit
     */
    protected $commit;
    /**
     * 
     *
     * @var bool
     */
    protected $protected;
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
     * @return BranchShortCommit
     */
    public function getCommit() : BranchShortCommit
    {
        return $this->commit;
    }
    /**
     * 
     *
     * @param BranchShortCommit $commit
     *
     * @return self
     */
    public function setCommit(BranchShortCommit $commit) : self
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
}