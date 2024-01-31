<?php

namespace PicturePark\API\Model;

class ClarifaiTaggingOptions extends TaggingOptionsBase
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Override for the model to use
     *
     * @var string|null
     */
    protected $model;
    /**
     * Override for the language to use
     *
     * @var string|null
     */
    protected $language;
    /**
     * Minimum value a concept must have to be considered
     *
     * @var string|null
     */
    protected $minimumValue;
    /**
     * Override for the model to use
     *
     * @return string|null
     */
    public function getModel() : ?string
    {
        return $this->model;
    }
    /**
     * Override for the model to use
     *
     * @param string|null $model
     *
     * @return self
     */
    public function setModel(?string $model) : self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }
    /**
     * Override for the language to use
     *
     * @return string|null
     */
    public function getLanguage() : ?string
    {
        return $this->language;
    }
    /**
     * Override for the language to use
     *
     * @param string|null $language
     *
     * @return self
     */
    public function setLanguage(?string $language) : self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * Minimum value a concept must have to be considered
     *
     * @return string|null
     */
    public function getMinimumValue() : ?string
    {
        return $this->minimumValue;
    }
    /**
     * Minimum value a concept must have to be considered
     *
     * @param string|null $minimumValue
     *
     * @return self
     */
    public function setMinimumValue(?string $minimumValue) : self
    {
        $this->initialized['minimumValue'] = true;
        $this->minimumValue = $minimumValue;
        return $this;
    }
}