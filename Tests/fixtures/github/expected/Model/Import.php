<?php

namespace Github\Model;

class Import
{
    /**
     * 
     *
     * @var string|null
     */
    protected $vcs;
    /**
     * 
     *
     * @var string
     */
    protected $useLfs;
    /**
     * The URL of the originating repository.
     *
     * @var string
     */
    protected $vcsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $svcRoot;
    /**
     * 
     *
     * @var string
     */
    protected $tfvcProject;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $statusText;
    /**
     * 
     *
     * @var string|null
     */
    protected $failedStep;
    /**
     * 
     *
     * @var string|null
     */
    protected $errorMessage;
    /**
     * 
     *
     * @var int|null
     */
    protected $importPercent;
    /**
     * 
     *
     * @var int|null
     */
    protected $commitCount;
    /**
     * 
     *
     * @var int|null
     */
    protected $pushPercent;
    /**
     * 
     *
     * @var bool
     */
    protected $hasLargeFiles;
    /**
     * 
     *
     * @var int
     */
    protected $largeFilesSize;
    /**
     * 
     *
     * @var int
     */
    protected $largeFilesCount;
    /**
     * 
     *
     * @var ImportProjectChoicesItem[]
     */
    protected $projectChoices;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var int|null
     */
    protected $authorsCount;
    /**
     * 
     *
     * @var string
     */
    protected $url;
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
    protected $authorsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $repositoryUrl;
    /**
     * 
     *
     * @var string
     */
    protected $svnRoot;
    /**
     * 
     *
     * @return string|null
     */
    public function getVcs() : ?string
    {
        return $this->vcs;
    }
    /**
     * 
     *
     * @param string|null $vcs
     *
     * @return self
     */
    public function setVcs(?string $vcs) : self
    {
        $this->vcs = $vcs;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUseLfs() : string
    {
        return $this->useLfs;
    }
    /**
     * 
     *
     * @param string $useLfs
     *
     * @return self
     */
    public function setUseLfs(string $useLfs) : self
    {
        $this->useLfs = $useLfs;
        return $this;
    }
    /**
     * The URL of the originating repository.
     *
     * @return string
     */
    public function getVcsUrl() : string
    {
        return $this->vcsUrl;
    }
    /**
     * The URL of the originating repository.
     *
     * @param string $vcsUrl
     *
     * @return self
     */
    public function setVcsUrl(string $vcsUrl) : self
    {
        $this->vcsUrl = $vcsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSvcRoot() : string
    {
        return $this->svcRoot;
    }
    /**
     * 
     *
     * @param string $svcRoot
     *
     * @return self
     */
    public function setSvcRoot(string $svcRoot) : self
    {
        $this->svcRoot = $svcRoot;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTfvcProject() : string
    {
        return $this->tfvcProject;
    }
    /**
     * 
     *
     * @param string $tfvcProject
     *
     * @return self
     */
    public function setTfvcProject(string $tfvcProject) : self
    {
        $this->tfvcProject = $tfvcProject;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatusText() : ?string
    {
        return $this->statusText;
    }
    /**
     * 
     *
     * @param string|null $statusText
     *
     * @return self
     */
    public function setStatusText(?string $statusText) : self
    {
        $this->statusText = $statusText;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFailedStep() : ?string
    {
        return $this->failedStep;
    }
    /**
     * 
     *
     * @param string|null $failedStep
     *
     * @return self
     */
    public function setFailedStep(?string $failedStep) : self
    {
        $this->failedStep = $failedStep;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getErrorMessage() : ?string
    {
        return $this->errorMessage;
    }
    /**
     * 
     *
     * @param string|null $errorMessage
     *
     * @return self
     */
    public function setErrorMessage(?string $errorMessage) : self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getImportPercent() : ?int
    {
        return $this->importPercent;
    }
    /**
     * 
     *
     * @param int|null $importPercent
     *
     * @return self
     */
    public function setImportPercent(?int $importPercent) : self
    {
        $this->importPercent = $importPercent;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCommitCount() : ?int
    {
        return $this->commitCount;
    }
    /**
     * 
     *
     * @param int|null $commitCount
     *
     * @return self
     */
    public function setCommitCount(?int $commitCount) : self
    {
        $this->commitCount = $commitCount;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPushPercent() : ?int
    {
        return $this->pushPercent;
    }
    /**
     * 
     *
     * @param int|null $pushPercent
     *
     * @return self
     */
    public function setPushPercent(?int $pushPercent) : self
    {
        $this->pushPercent = $pushPercent;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasLargeFiles() : bool
    {
        return $this->hasLargeFiles;
    }
    /**
     * 
     *
     * @param bool $hasLargeFiles
     *
     * @return self
     */
    public function setHasLargeFiles(bool $hasLargeFiles) : self
    {
        $this->hasLargeFiles = $hasLargeFiles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLargeFilesSize() : int
    {
        return $this->largeFilesSize;
    }
    /**
     * 
     *
     * @param int $largeFilesSize
     *
     * @return self
     */
    public function setLargeFilesSize(int $largeFilesSize) : self
    {
        $this->largeFilesSize = $largeFilesSize;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLargeFilesCount() : int
    {
        return $this->largeFilesCount;
    }
    /**
     * 
     *
     * @param int $largeFilesCount
     *
     * @return self
     */
    public function setLargeFilesCount(int $largeFilesCount) : self
    {
        $this->largeFilesCount = $largeFilesCount;
        return $this;
    }
    /**
     * 
     *
     * @return ImportProjectChoicesItem[]
     */
    public function getProjectChoices() : array
    {
        return $this->projectChoices;
    }
    /**
     * 
     *
     * @param ImportProjectChoicesItem[] $projectChoices
     *
     * @return self
     */
    public function setProjectChoices(array $projectChoices) : self
    {
        $this->projectChoices = $projectChoices;
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
     * @return int|null
     */
    public function getAuthorsCount() : ?int
    {
        return $this->authorsCount;
    }
    /**
     * 
     *
     * @param int|null $authorsCount
     *
     * @return self
     */
    public function setAuthorsCount(?int $authorsCount) : self
    {
        $this->authorsCount = $authorsCount;
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
    public function getAuthorsUrl() : string
    {
        return $this->authorsUrl;
    }
    /**
     * 
     *
     * @param string $authorsUrl
     *
     * @return self
     */
    public function setAuthorsUrl(string $authorsUrl) : self
    {
        $this->authorsUrl = $authorsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRepositoryUrl() : string
    {
        return $this->repositoryUrl;
    }
    /**
     * 
     *
     * @param string $repositoryUrl
     *
     * @return self
     */
    public function setRepositoryUrl(string $repositoryUrl) : self
    {
        $this->repositoryUrl = $repositoryUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSvnRoot() : string
    {
        return $this->svnRoot;
    }
    /**
     * 
     *
     * @param string $svnRoot
     *
     * @return self
     */
    public function setSvnRoot(string $svnRoot) : self
    {
        $this->svnRoot = $svnRoot;
        return $this;
    }
}