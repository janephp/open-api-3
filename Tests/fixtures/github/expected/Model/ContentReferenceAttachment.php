<?php

namespace Github\Model;

class ContentReferenceAttachment
{
    /**
     * The ID of the attachment
     *
     * @var int
     */
    protected $id;
    /**
     * The title of the attachment
     *
     * @var string
     */
    protected $title;
    /**
     * The body of the attachment
     *
     * @var string
     */
    protected $body;
    /**
     * The node_id of the content attachment
     *
     * @var string
     */
    protected $nodeId;
    /**
     * The ID of the attachment
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The ID of the attachment
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
     * The title of the attachment
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title of the attachment
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
     * The body of the attachment
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The body of the attachment
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
     * The node_id of the content attachment
     *
     * @return string
     */
    public function getNodeId() : string
    {
        return $this->nodeId;
    }
    /**
     * The node_id of the content attachment
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
}