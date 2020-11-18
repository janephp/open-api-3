<?php

namespace PicturePark\API\Model;

class CustomerApp
{
    /**
     * 
     *
     * @var string|null
     */
    protected $appId;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $name;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $icon;
    /**
     * 
     *
     * @return string|null
     */
    public function getAppId() : ?string
    {
        return $this->appId;
    }
    /**
     * 
     *
     * @param string|null $appId
     *
     * @return self
     */
    public function setAppId(?string $appId) : self
    {
        $this->appId = $appId;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param mixed $description
     *
     * @return self
     */
    public function setDescription($description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIcon() : ?string
    {
        return $this->icon;
    }
    /**
     * 
     *
     * @param string|null $icon
     *
     * @return self
     */
    public function setIcon(?string $icon) : self
    {
        $this->icon = $icon;
        return $this;
    }
}