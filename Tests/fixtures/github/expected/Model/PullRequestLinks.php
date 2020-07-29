<?php

namespace Github\Model;

class PullRequestLinks
{
    /**
     * Hypermedia Link
     *
     * @var Link
     */
    protected $comments;
    /**
     * Hypermedia Link
     *
     * @var Link
     */
    protected $commits;
    /**
     * Hypermedia Link
     *
     * @var Link
     */
    protected $statuses;
    /**
     * Hypermedia Link
     *
     * @var Link
     */
    protected $html;
    /**
     * Hypermedia Link
     *
     * @var Link
     */
    protected $issue;
    /**
     * Hypermedia Link
     *
     * @var Link
     */
    protected $reviewComments;
    /**
     * Hypermedia Link
     *
     * @var Link
     */
    protected $reviewComment;
    /**
     * Hypermedia Link
     *
     * @var Link
     */
    protected $self;
    /**
     * Hypermedia Link
     *
     * @return Link
     */
    public function getComments() : Link
    {
        return $this->comments;
    }
    /**
     * Hypermedia Link
     *
     * @param Link $comments
     *
     * @return self
     */
    public function setComments(Link $comments) : self
    {
        $this->comments = $comments;
        return $this;
    }
    /**
     * Hypermedia Link
     *
     * @return Link
     */
    public function getCommits() : Link
    {
        return $this->commits;
    }
    /**
     * Hypermedia Link
     *
     * @param Link $commits
     *
     * @return self
     */
    public function setCommits(Link $commits) : self
    {
        $this->commits = $commits;
        return $this;
    }
    /**
     * Hypermedia Link
     *
     * @return Link
     */
    public function getStatuses() : Link
    {
        return $this->statuses;
    }
    /**
     * Hypermedia Link
     *
     * @param Link $statuses
     *
     * @return self
     */
    public function setStatuses(Link $statuses) : self
    {
        $this->statuses = $statuses;
        return $this;
    }
    /**
     * Hypermedia Link
     *
     * @return Link
     */
    public function getHtml() : Link
    {
        return $this->html;
    }
    /**
     * Hypermedia Link
     *
     * @param Link $html
     *
     * @return self
     */
    public function setHtml(Link $html) : self
    {
        $this->html = $html;
        return $this;
    }
    /**
     * Hypermedia Link
     *
     * @return Link
     */
    public function getIssue() : Link
    {
        return $this->issue;
    }
    /**
     * Hypermedia Link
     *
     * @param Link $issue
     *
     * @return self
     */
    public function setIssue(Link $issue) : self
    {
        $this->issue = $issue;
        return $this;
    }
    /**
     * Hypermedia Link
     *
     * @return Link
     */
    public function getReviewComments() : Link
    {
        return $this->reviewComments;
    }
    /**
     * Hypermedia Link
     *
     * @param Link $reviewComments
     *
     * @return self
     */
    public function setReviewComments(Link $reviewComments) : self
    {
        $this->reviewComments = $reviewComments;
        return $this;
    }
    /**
     * Hypermedia Link
     *
     * @return Link
     */
    public function getReviewComment() : Link
    {
        return $this->reviewComment;
    }
    /**
     * Hypermedia Link
     *
     * @param Link $reviewComment
     *
     * @return self
     */
    public function setReviewComment(Link $reviewComment) : self
    {
        $this->reviewComment = $reviewComment;
        return $this;
    }
    /**
     * Hypermedia Link
     *
     * @return Link
     */
    public function getSelf() : Link
    {
        return $this->self;
    }
    /**
     * Hypermedia Link
     *
     * @param Link $self
     *
     * @return self
     */
    public function setSelf(Link $self) : self
    {
        $this->self = $self;
        return $this;
    }
}