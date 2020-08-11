<?php

namespace Github\Model;

class GistsGistIdPatchBodyFilesItem
{
    /**
     * The new content of the file
     *
     * @var string
     */
    protected $content;
    /**
     * The new filename for the file
     *
     * @var string|null
     */
    protected $filename;
    /**
     * The new content of the file
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }
    /**
     * The new content of the file
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content) : self
    {
        $this->content = $content;
        return $this;
    }
    /**
     * The new filename for the file
     *
     * @return string|null
     */
    public function getFilename() : ?string
    {
        return $this->filename;
    }
    /**
     * The new filename for the file
     *
     * @param string|null $filename
     *
     * @return self
     */
    public function setFilename(?string $filename) : self
    {
        $this->filename = $filename;
        return $this;
    }
}