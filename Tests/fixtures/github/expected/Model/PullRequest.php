<?php

namespace Github\Model;

class PullRequest
{
    /**
     * 
     *
     * @var string
     */
    protected $url;
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
    protected $htmlUrl;
    /**
     * 
     *
     * @var string
     */
    protected $diffUrl;
    /**
     * 
     *
     * @var string
     */
    protected $patchUrl;
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
    protected $commitsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $reviewCommentsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $reviewCommentUrl;
    /**
     * 
     *
     * @var string
     */
    protected $commentsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $statusesUrl;
    /**
     * Number uniquely identifying the pull request within its repository.
     *
     * @var int
     */
    protected $number;
    /**
     * State of this Pull Request. Either `open` or `closed`.
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var bool
     */
    protected $locked;
    /**
     * The title of the pull request.
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var PullRequestUser|null
     */
    protected $user;
    /**
     * 
     *
     * @var string|null
     */
    protected $body;
    /**
     * 
     *
     * @var PullRequestLabelsItem[]
     */
    protected $labels;
    /**
     * 
     *
     * @var PullRequestMilestone|null
     */
    protected $milestone;
    /**
     * 
     *
     * @var string|null
     */
    protected $activeLockReason;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $closedAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $mergedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $mergeCommitSha;
    /**
     * 
     *
     * @var PullRequestAssignee|null
     */
    protected $assignee;
    /**
     * 
     *
     * @var SimpleUser[]|null
     */
    protected $assignees;
    /**
     * 
     *
     * @var SimpleUser[]|null
     */
    protected $requestedReviewers;
    /**
     * 
     *
     * @var TeamSimple[]|null
     */
    protected $requestedTeams;
    /**
     * 
     *
     * @var PullRequestHead
     */
    protected $head;
    /**
     * 
     *
     * @var PullRequestBase
     */
    protected $base;
    /**
     * 
     *
     * @var PullRequestLinks
     */
    protected $links;
    /**
     * 
     *
     * @var string
     */
    protected $authorAssociation;
    /**
     * Indicates whether or not the pull request is a draft.
     *
     * @var bool
     */
    protected $draft;
    /**
     * 
     *
     * @var bool
     */
    protected $merged;
    /**
     * 
     *
     * @var bool|null
     */
    protected $mergeable;
    /**
     * 
     *
     * @var bool|null
     */
    protected $rebaseable;
    /**
     * 
     *
     * @var string
     */
    protected $mergeableState;
    /**
     * 
     *
     * @var PullRequestMergedBy|null
     */
    protected $mergedBy;
    /**
     * 
     *
     * @var int
     */
    protected $comments;
    /**
     * 
     *
     * @var int
     */
    protected $reviewComments;
    /**
     * Indicates whether maintainers can modify the pull request.
     *
     * @var bool
     */
    protected $maintainerCanModify;
    /**
     * 
     *
     * @var int
     */
    protected $commits;
    /**
     * 
     *
     * @var int
     */
    protected $additions;
    /**
     * 
     *
     * @var int
     */
    protected $deletions;
    /**
     * 
     *
     * @var int
     */
    protected $changedFiles;
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
    public function getDiffUrl() : string
    {
        return $this->diffUrl;
    }
    /**
     * 
     *
     * @param string $diffUrl
     *
     * @return self
     */
    public function setDiffUrl(string $diffUrl) : self
    {
        $this->diffUrl = $diffUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPatchUrl() : string
    {
        return $this->patchUrl;
    }
    /**
     * 
     *
     * @param string $patchUrl
     *
     * @return self
     */
    public function setPatchUrl(string $patchUrl) : self
    {
        $this->patchUrl = $patchUrl;
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
    public function getCommitsUrl() : string
    {
        return $this->commitsUrl;
    }
    /**
     * 
     *
     * @param string $commitsUrl
     *
     * @return self
     */
    public function setCommitsUrl(string $commitsUrl) : self
    {
        $this->commitsUrl = $commitsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReviewCommentsUrl() : string
    {
        return $this->reviewCommentsUrl;
    }
    /**
     * 
     *
     * @param string $reviewCommentsUrl
     *
     * @return self
     */
    public function setReviewCommentsUrl(string $reviewCommentsUrl) : self
    {
        $this->reviewCommentsUrl = $reviewCommentsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReviewCommentUrl() : string
    {
        return $this->reviewCommentUrl;
    }
    /**
     * 
     *
     * @param string $reviewCommentUrl
     *
     * @return self
     */
    public function setReviewCommentUrl(string $reviewCommentUrl) : self
    {
        $this->reviewCommentUrl = $reviewCommentUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommentsUrl() : string
    {
        return $this->commentsUrl;
    }
    /**
     * 
     *
     * @param string $commentsUrl
     *
     * @return self
     */
    public function setCommentsUrl(string $commentsUrl) : self
    {
        $this->commentsUrl = $commentsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatusesUrl() : string
    {
        return $this->statusesUrl;
    }
    /**
     * 
     *
     * @param string $statusesUrl
     *
     * @return self
     */
    public function setStatusesUrl(string $statusesUrl) : self
    {
        $this->statusesUrl = $statusesUrl;
        return $this;
    }
    /**
     * Number uniquely identifying the pull request within its repository.
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * Number uniquely identifying the pull request within its repository.
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * State of this Pull Request. Either `open` or `closed`.
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * State of this Pull Request. Either `open` or `closed`.
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
     * @return bool
     */
    public function getLocked() : bool
    {
        return $this->locked;
    }
    /**
     * 
     *
     * @param bool $locked
     *
     * @return self
     */
    public function setLocked(bool $locked) : self
    {
        $this->locked = $locked;
        return $this;
    }
    /**
     * The title of the pull request.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title of the pull request.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestUser|null
     */
    public function getUser() : ?PullRequestUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param PullRequestUser|null $user
     *
     * @return self
     */
    public function setUser(?PullRequestUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBody() : ?string
    {
        return $this->body;
    }
    /**
     * 
     *
     * @param string|null $body
     *
     * @return self
     */
    public function setBody(?string $body) : self
    {
        $this->body = $body;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestLabelsItem[]
     */
    public function getLabels() : array
    {
        return $this->labels;
    }
    /**
     * 
     *
     * @param PullRequestLabelsItem[] $labels
     *
     * @return self
     */
    public function setLabels(array $labels) : self
    {
        $this->labels = $labels;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestMilestone|null
     */
    public function getMilestone() : ?PullRequestMilestone
    {
        return $this->milestone;
    }
    /**
     * 
     *
     * @param PullRequestMilestone|null $milestone
     *
     * @return self
     */
    public function setMilestone(?PullRequestMilestone $milestone) : self
    {
        $this->milestone = $milestone;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getActiveLockReason() : ?string
    {
        return $this->activeLockReason;
    }
    /**
     * 
     *
     * @param string|null $activeLockReason
     *
     * @return self
     */
    public function setActiveLockReason(?string $activeLockReason) : self
    {
        $this->activeLockReason = $activeLockReason;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getClosedAt() : ?\DateTime
    {
        return $this->closedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $closedAt
     *
     * @return self
     */
    public function setClosedAt(?\DateTime $closedAt) : self
    {
        $this->closedAt = $closedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getMergedAt() : ?\DateTime
    {
        return $this->mergedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $mergedAt
     *
     * @return self
     */
    public function setMergedAt(?\DateTime $mergedAt) : self
    {
        $this->mergedAt = $mergedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMergeCommitSha() : ?string
    {
        return $this->mergeCommitSha;
    }
    /**
     * 
     *
     * @param string|null $mergeCommitSha
     *
     * @return self
     */
    public function setMergeCommitSha(?string $mergeCommitSha) : self
    {
        $this->mergeCommitSha = $mergeCommitSha;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestAssignee|null
     */
    public function getAssignee() : ?PullRequestAssignee
    {
        return $this->assignee;
    }
    /**
     * 
     *
     * @param PullRequestAssignee|null $assignee
     *
     * @return self
     */
    public function setAssignee(?PullRequestAssignee $assignee) : self
    {
        $this->assignee = $assignee;
        return $this;
    }
    /**
     * 
     *
     * @return SimpleUser[]|null
     */
    public function getAssignees() : ?array
    {
        return $this->assignees;
    }
    /**
     * 
     *
     * @param SimpleUser[]|null $assignees
     *
     * @return self
     */
    public function setAssignees(?array $assignees) : self
    {
        $this->assignees = $assignees;
        return $this;
    }
    /**
     * 
     *
     * @return SimpleUser[]|null
     */
    public function getRequestedReviewers() : ?array
    {
        return $this->requestedReviewers;
    }
    /**
     * 
     *
     * @param SimpleUser[]|null $requestedReviewers
     *
     * @return self
     */
    public function setRequestedReviewers(?array $requestedReviewers) : self
    {
        $this->requestedReviewers = $requestedReviewers;
        return $this;
    }
    /**
     * 
     *
     * @return TeamSimple[]|null
     */
    public function getRequestedTeams() : ?array
    {
        return $this->requestedTeams;
    }
    /**
     * 
     *
     * @param TeamSimple[]|null $requestedTeams
     *
     * @return self
     */
    public function setRequestedTeams(?array $requestedTeams) : self
    {
        $this->requestedTeams = $requestedTeams;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestHead
     */
    public function getHead() : PullRequestHead
    {
        return $this->head;
    }
    /**
     * 
     *
     * @param PullRequestHead $head
     *
     * @return self
     */
    public function setHead(PullRequestHead $head) : self
    {
        $this->head = $head;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestBase
     */
    public function getBase() : PullRequestBase
    {
        return $this->base;
    }
    /**
     * 
     *
     * @param PullRequestBase $base
     *
     * @return self
     */
    public function setBase(PullRequestBase $base) : self
    {
        $this->base = $base;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestLinks
     */
    public function getLinks() : PullRequestLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param PullRequestLinks $links
     *
     * @return self
     */
    public function setLinks(PullRequestLinks $links) : self
    {
        $this->links = $links;
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
     * Indicates whether or not the pull request is a draft.
     *
     * @return bool
     */
    public function getDraft() : bool
    {
        return $this->draft;
    }
    /**
     * Indicates whether or not the pull request is a draft.
     *
     * @param bool $draft
     *
     * @return self
     */
    public function setDraft(bool $draft) : self
    {
        $this->draft = $draft;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getMerged() : bool
    {
        return $this->merged;
    }
    /**
     * 
     *
     * @param bool $merged
     *
     * @return self
     */
    public function setMerged(bool $merged) : self
    {
        $this->merged = $merged;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getMergeable() : ?bool
    {
        return $this->mergeable;
    }
    /**
     * 
     *
     * @param bool|null $mergeable
     *
     * @return self
     */
    public function setMergeable(?bool $mergeable) : self
    {
        $this->mergeable = $mergeable;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getRebaseable() : ?bool
    {
        return $this->rebaseable;
    }
    /**
     * 
     *
     * @param bool|null $rebaseable
     *
     * @return self
     */
    public function setRebaseable(?bool $rebaseable) : self
    {
        $this->rebaseable = $rebaseable;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMergeableState() : string
    {
        return $this->mergeableState;
    }
    /**
     * 
     *
     * @param string $mergeableState
     *
     * @return self
     */
    public function setMergeableState(string $mergeableState) : self
    {
        $this->mergeableState = $mergeableState;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestMergedBy|null
     */
    public function getMergedBy() : ?PullRequestMergedBy
    {
        return $this->mergedBy;
    }
    /**
     * 
     *
     * @param PullRequestMergedBy|null $mergedBy
     *
     * @return self
     */
    public function setMergedBy(?PullRequestMergedBy $mergedBy) : self
    {
        $this->mergedBy = $mergedBy;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getComments() : int
    {
        return $this->comments;
    }
    /**
     * 
     *
     * @param int $comments
     *
     * @return self
     */
    public function setComments(int $comments) : self
    {
        $this->comments = $comments;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReviewComments() : int
    {
        return $this->reviewComments;
    }
    /**
     * 
     *
     * @param int $reviewComments
     *
     * @return self
     */
    public function setReviewComments(int $reviewComments) : self
    {
        $this->reviewComments = $reviewComments;
        return $this;
    }
    /**
     * Indicates whether maintainers can modify the pull request.
     *
     * @return bool
     */
    public function getMaintainerCanModify() : bool
    {
        return $this->maintainerCanModify;
    }
    /**
     * Indicates whether maintainers can modify the pull request.
     *
     * @param bool $maintainerCanModify
     *
     * @return self
     */
    public function setMaintainerCanModify(bool $maintainerCanModify) : self
    {
        $this->maintainerCanModify = $maintainerCanModify;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCommits() : int
    {
        return $this->commits;
    }
    /**
     * 
     *
     * @param int $commits
     *
     * @return self
     */
    public function setCommits(int $commits) : self
    {
        $this->commits = $commits;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAdditions() : int
    {
        return $this->additions;
    }
    /**
     * 
     *
     * @param int $additions
     *
     * @return self
     */
    public function setAdditions(int $additions) : self
    {
        $this->additions = $additions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDeletions() : int
    {
        return $this->deletions;
    }
    /**
     * 
     *
     * @param int $deletions
     *
     * @return self
     */
    public function setDeletions(int $deletions) : self
    {
        $this->deletions = $deletions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getChangedFiles() : int
    {
        return $this->changedFiles;
    }
    /**
     * 
     *
     * @param int $changedFiles
     *
     * @return self
     */
    public function setChangedFiles(int $changedFiles) : self
    {
        $this->changedFiles = $changedFiles;
        return $this;
    }
}