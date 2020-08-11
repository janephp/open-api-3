<?php

namespace Github\Model;

class CheckAnnotation
{
    /**
     * 
     *
     * @var string
     */
    protected $path;
    /**
     * 
     *
     * @var int
     */
    protected $startLine;
    /**
     * 
     *
     * @var int
     */
    protected $endLine;
    /**
     * 
     *
     * @var int|null
     */
    protected $startColumn;
    /**
     * 
     *
     * @var int|null
     */
    protected $endColumn;
    /**
     * 
     *
     * @var string|null
     */
    protected $annotationLevel;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @var string|null
     */
    protected $message;
    /**
     * 
     *
     * @var string|null
     */
    protected $rawDetails;
    /**
     * 
     *
     * @var string
     */
    protected $blobHref;
    /**
     * 
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * 
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->path = $path;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStartLine() : int
    {
        return $this->startLine;
    }
    /**
     * 
     *
     * @param int $startLine
     *
     * @return self
     */
    public function setStartLine(int $startLine) : self
    {
        $this->startLine = $startLine;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getEndLine() : int
    {
        return $this->endLine;
    }
    /**
     * 
     *
     * @param int $endLine
     *
     * @return self
     */
    public function setEndLine(int $endLine) : self
    {
        $this->endLine = $endLine;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStartColumn() : ?int
    {
        return $this->startColumn;
    }
    /**
     * 
     *
     * @param int|null $startColumn
     *
     * @return self
     */
    public function setStartColumn(?int $startColumn) : self
    {
        $this->startColumn = $startColumn;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEndColumn() : ?int
    {
        return $this->endColumn;
    }
    /**
     * 
     *
     * @param int|null $endColumn
     *
     * @return self
     */
    public function setEndColumn(?int $endColumn) : self
    {
        $this->endColumn = $endColumn;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAnnotationLevel() : ?string
    {
        return $this->annotationLevel;
    }
    /**
     * 
     *
     * @param string|null $annotationLevel
     *
     * @return self
     */
    public function setAnnotationLevel(?string $annotationLevel) : self
    {
        $this->annotationLevel = $annotationLevel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRawDetails() : ?string
    {
        return $this->rawDetails;
    }
    /**
     * 
     *
     * @param string|null $rawDetails
     *
     * @return self
     */
    public function setRawDetails(?string $rawDetails) : self
    {
        $this->rawDetails = $rawDetails;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBlobHref() : string
    {
        return $this->blobHref;
    }
    /**
     * 
     *
     * @param string $blobHref
     *
     * @return self
     */
    public function setBlobHref(string $blobHref) : self
    {
        $this->blobHref = $blobHref;
        return $this;
    }
}