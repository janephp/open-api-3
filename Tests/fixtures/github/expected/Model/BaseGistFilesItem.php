<?php

namespace Github\Model;

class BaseGistFilesItem
{
    /**
     * 
     *
     * @var string
     */
    protected $filename;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $language;
    /**
     * 
     *
     * @var string
     */
    protected $rawUrl;
    /**
     * 
     *
     * @var int
     */
    protected $size;
    /**
     * 
     *
     * @return string
     */
    public function getFilename() : string
    {
        return $this->filename;
    }
    /**
     * 
     *
     * @param string $filename
     *
     * @return self
     */
    public function setFilename(string $filename) : self
    {
        $this->filename = $filename;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLanguage() : string
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language) : self
    {
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRawUrl() : string
    {
        return $this->rawUrl;
    }
    /**
     * 
     *
     * @param string $rawUrl
     *
     * @return self
     */
    public function setRawUrl(string $rawUrl) : self
    {
        $this->rawUrl = $rawUrl;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }
    /**
     * 
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size) : self
    {
        $this->size = $size;
        return $this;
    }
}