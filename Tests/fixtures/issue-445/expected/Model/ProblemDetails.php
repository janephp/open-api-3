<?php

namespace PicturePark\API\Model;

class ProblemDetails
{
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @var int|null
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $detail;
    /**
     * 
     *
     * @var string|null
     */
    protected $instance;
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $extensions;
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
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
     * @return int|null
     */
    public function getStatus() : ?int
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param int|null $status
     *
     * @return self
     */
    public function setStatus(?int $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDetail() : ?string
    {
        return $this->detail;
    }
    /**
     * 
     *
     * @param string|null $detail
     *
     * @return self
     */
    public function setDetail(?string $detail) : self
    {
        $this->detail = $detail;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInstance() : ?string
    {
        return $this->instance;
    }
    /**
     * 
     *
     * @param string|null $instance
     *
     * @return self
     */
    public function setInstance(?string $instance) : self
    {
        $this->instance = $instance;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]|null
     */
    public function getExtensions() : ?iterable
    {
        return $this->extensions;
    }
    /**
     * 
     *
     * @param mixed[]|null $extensions
     *
     * @return self
     */
    public function setExtensions(?iterable $extensions) : self
    {
        $this->extensions = $extensions;
        return $this;
    }
}