<?php

namespace Github\Model;

class IssueEventForIssue
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * Simple User
     *
     * @var SimpleUser|null
     */
    protected $actor;
    /**
     * 
     *
     * @var string
     */
    protected $event;
    /**
     * 
     *
     * @var string|null
     */
    protected $commitId;
    /**
     * 
     *
     * @var string|null
     */
    protected $commitUrl;
    /**
     * 
     *
     * @var string
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string
     */
    protected $sha;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var string
     */
    protected $issueUrl;
    /**
     * 
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var string
     */
    protected $authorAssociation;
    /**
     * 
     *
     * @var string
     */
    protected $body;
    /**
     * 
     *
     * @var string
     */
    protected $lockReason;
    /**
     * 
     *
     * @var string
     */
    protected $submittedAt;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var string
     */
    protected $pullRequestUrl;
    /**
     * 
     *
     * @var string
     */
    protected $bodyHtml;
    /**
     * 
     *
     * @var string
     */
    protected $bodyText;
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
     * 
     *
     * @return string
     */
    public function getNodeId() : string
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId) : self
    {
        $this->nodeId = $nodeId;
        return $this;
    }
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
     * Simple User
     *
     * @return SimpleUser|null
     */
    public function getActor() : ?SimpleUser
    {
        return $this->actor;
    }
    /**
     * Simple User
     *
     * @param SimpleUser|null $actor
     *
     * @return self
     */
    public function setActor(?SimpleUser $actor) : self
    {
        $this->actor = $actor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEvent() : string
    {
        return $this->event;
    }
    /**
     * 
     *
     * @param string $event
     *
     * @return self
     */
    public function setEvent(string $event) : self
    {
        $this->event = $event;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCommitId() : ?string
    {
        return $this->commitId;
    }
    /**
     * 
     *
     * @param string|null $commitId
     *
     * @return self
     */
    public function setCommitId(?string $commitId) : self
    {
        $this->commitId = $commitId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCommitUrl() : ?string
    {
        return $this->commitUrl;
    }
    /**
     * 
     *
     * @param string|null $commitUrl
     *
     * @return self
     */
    public function setCommitUrl(?string $commitUrl) : self
    {
        $this->commitUrl = $commitUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSha() : string
    {
        return $this->sha;
    }
    /**
     * 
     *
     * @param string $sha
     *
     * @return self
     */
    public function setSha(string $sha) : self
    {
        $this->sha = $sha;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHtmlUrl() : string
    {
        return $this->htmlUrl;
    }
    /**
     * 
     *
     * @param string $htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl(string $htmlUrl) : self
    {
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIssueUrl() : string
    {
        return $this->issueUrl;
    }
    /**
     * 
     *
     * @param string $issueUrl
     *
     * @return self
     */
    public function setIssueUrl(string $issueUrl) : self
    {
        $this->issueUrl = $issueUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpdatedAt() : string
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthorAssociation() : string
    {
        return $this->authorAssociation;
    }
    /**
     * 
     *
     * @param string $authorAssociation
     *
     * @return self
     */
    public function setAuthorAssociation(string $authorAssociation) : self
    {
        $this->authorAssociation = $authorAssociation;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * 
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body) : self
    {
        $this->body = $body;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLockReason() : string
    {
        return $this->lockReason;
    }
    /**
     * 
     *
     * @param string $lockReason
     *
     * @return self
     */
    public function setLockReason(string $lockReason) : self
    {
        $this->lockReason = $lockReason;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSubmittedAt() : string
    {
        return $this->submittedAt;
    }
    /**
     * 
     *
     * @param string $submittedAt
     *
     * @return self
     */
    public function setSubmittedAt(string $submittedAt) : self
    {
        $this->submittedAt = $submittedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPullRequestUrl() : string
    {
        return $this->pullRequestUrl;
    }
    /**
     * 
     *
     * @param string $pullRequestUrl
     *
     * @return self
     */
    public function setPullRequestUrl(string $pullRequestUrl) : self
    {
        $this->pullRequestUrl = $pullRequestUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBodyHtml() : string
    {
        return $this->bodyHtml;
    }
    /**
     * 
     *
     * @param string $bodyHtml
     *
     * @return self
     */
    public function setBodyHtml(string $bodyHtml) : self
    {
        $this->bodyHtml = $bodyHtml;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBodyText() : string
    {
        return $this->bodyText;
    }
    /**
     * 
     *
     * @param string $bodyText
     *
     * @return self
     */
    public function setBodyText(string $bodyText) : self
    {
        $this->bodyText = $bodyText;
        return $this;
    }
}