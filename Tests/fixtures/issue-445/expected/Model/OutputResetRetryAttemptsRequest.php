<?php

namespace PicturePark\API\Model;

class OutputResetRetryAttemptsRequest
{
    /**
     * List of output IDs you want to filter on. If this field is not empty, the other will be ignored.
     *
     * @var string[]|null
     */
    protected $outputIds;
    /**
     * List of Content IDs you want to filter on.
     *
     * @var string[]|null
     */
    protected $contentIds;
    /**
     * The file extension of the outputs you want to filter on.
     *
     * @var string[]|null
     */
    protected $fileExtensions;
    /**
     * The IDs of the output formats you want to filter on.
     *
     * @var string[]|null
     */
    protected $outputFormatIds;
    /**
     * Should the successful filter results also be reset (and subsequently re-rendered)?
     *
     * @var bool
     */
    protected $includeCompleted;
    /**
     * List of output IDs you want to filter on. If this field is not empty, the other will be ignored.
     *
     * @return string[]|null
     */
    public function getOutputIds() : ?array
    {
        return $this->outputIds;
    }
    /**
     * List of output IDs you want to filter on. If this field is not empty, the other will be ignored.
     *
     * @param string[]|null $outputIds
     *
     * @return self
     */
    public function setOutputIds(?array $outputIds) : self
    {
        $this->outputIds = $outputIds;
        return $this;
    }
    /**
     * List of Content IDs you want to filter on.
     *
     * @return string[]|null
     */
    public function getContentIds() : ?array
    {
        return $this->contentIds;
    }
    /**
     * List of Content IDs you want to filter on.
     *
     * @param string[]|null $contentIds
     *
     * @return self
     */
    public function setContentIds(?array $contentIds) : self
    {
        $this->contentIds = $contentIds;
        return $this;
    }
    /**
     * The file extension of the outputs you want to filter on.
     *
     * @return string[]|null
     */
    public function getFileExtensions() : ?array
    {
        return $this->fileExtensions;
    }
    /**
     * The file extension of the outputs you want to filter on.
     *
     * @param string[]|null $fileExtensions
     *
     * @return self
     */
    public function setFileExtensions(?array $fileExtensions) : self
    {
        $this->fileExtensions = $fileExtensions;
        return $this;
    }
    /**
     * The IDs of the output formats you want to filter on.
     *
     * @return string[]|null
     */
    public function getOutputFormatIds() : ?array
    {
        return $this->outputFormatIds;
    }
    /**
     * The IDs of the output formats you want to filter on.
     *
     * @param string[]|null $outputFormatIds
     *
     * @return self
     */
    public function setOutputFormatIds(?array $outputFormatIds) : self
    {
        $this->outputFormatIds = $outputFormatIds;
        return $this;
    }
    /**
     * Should the successful filter results also be reset (and subsequently re-rendered)?
     *
     * @return bool
     */
    public function getIncludeCompleted() : bool
    {
        return $this->includeCompleted;
    }
    /**
     * Should the successful filter results also be reset (and subsequently re-rendered)?
     *
     * @param bool $includeCompleted
     *
     * @return self
     */
    public function setIncludeCompleted(bool $includeCompleted) : self
    {
        $this->includeCompleted = $includeCompleted;
        return $this;
    }
}