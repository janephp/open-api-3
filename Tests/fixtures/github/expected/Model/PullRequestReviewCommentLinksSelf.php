<?php

namespace Github\Model;

class PullRequestReviewCommentLinksSelf
{
    /**
     * 
     *
     * @var string
     */
    protected $href;
    /**
     * 
     *
     * @return string
     */
    public function getHref() : string
    {
        return $this->href;
    }
    /**
     * 
     *
     * @param string $href
     *
     * @return self
     */
    public function setHref(string $href) : self
    {
        $this->href = $href;
        return $this;
    }
}