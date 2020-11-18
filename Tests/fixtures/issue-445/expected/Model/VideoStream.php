<?php

namespace PicturePark\API\Model;

class VideoStream
{
    /**
     * 
     *
     * @var string|null
     */
    protected $bitRate;
    /**
     * 
     *
     * @var string|null
     */
    protected $codec;
    /**
     * 
     *
     * @var string|null
     */
    protected $displayAspectRatio;
    /**
     * 
     *
     * @var float
     */
    protected $durationInSeconds;
    /**
     * 
     *
     * @var string|null
     */
    protected $format;
    /**
     * 
     *
     * @var int|null
     */
    protected $frameCount;
    /**
     * 
     *
     * @var float|null
     */
    protected $frameRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $height;
    /**
     * 
     *
     * @var string|null
     */
    protected $language;
    /**
     * 
     *
     * @var float|null
     */
    protected $pixelAspectRatio;
    /**
     * 
     *
     * @var int|null
     */
    protected $resolution;
    /**
     * 
     *
     * @var int|null
     */
    protected $streamSize;
    /**
     * 
     *
     * @var int|null
     */
    protected $width;
    /**
     * 
     *
     * @var float|null
     */
    protected $rotation;
    /**
     * 
     *
     * @return string|null
     */
    public function getBitRate() : ?string
    {
        return $this->bitRate;
    }
    /**
     * 
     *
     * @param string|null $bitRate
     *
     * @return self
     */
    public function setBitRate(?string $bitRate) : self
    {
        $this->bitRate = $bitRate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCodec() : ?string
    {
        return $this->codec;
    }
    /**
     * 
     *
     * @param string|null $codec
     *
     * @return self
     */
    public function setCodec(?string $codec) : self
    {
        $this->codec = $codec;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDisplayAspectRatio() : ?string
    {
        return $this->displayAspectRatio;
    }
    /**
     * 
     *
     * @param string|null $displayAspectRatio
     *
     * @return self
     */
    public function setDisplayAspectRatio(?string $displayAspectRatio) : self
    {
        $this->displayAspectRatio = $displayAspectRatio;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDurationInSeconds() : float
    {
        return $this->durationInSeconds;
    }
    /**
     * 
     *
     * @param float $durationInSeconds
     *
     * @return self
     */
    public function setDurationInSeconds(float $durationInSeconds) : self
    {
        $this->durationInSeconds = $durationInSeconds;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFormat() : ?string
    {
        return $this->format;
    }
    /**
     * 
     *
     * @param string|null $format
     *
     * @return self
     */
    public function setFormat(?string $format) : self
    {
        $this->format = $format;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFrameCount() : ?int
    {
        return $this->frameCount;
    }
    /**
     * 
     *
     * @param int|null $frameCount
     *
     * @return self
     */
    public function setFrameCount(?int $frameCount) : self
    {
        $this->frameCount = $frameCount;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFrameRate() : ?float
    {
        return $this->frameRate;
    }
    /**
     * 
     *
     * @param float|null $frameRate
     *
     * @return self
     */
    public function setFrameRate(?float $frameRate) : self
    {
        $this->frameRate = $frameRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHeight() : ?int
    {
        return $this->height;
    }
    /**
     * 
     *
     * @param int|null $height
     *
     * @return self
     */
    public function setHeight(?int $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLanguage() : ?string
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string|null $language
     *
     * @return self
     */
    public function setLanguage(?string $language) : self
    {
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPixelAspectRatio() : ?float
    {
        return $this->pixelAspectRatio;
    }
    /**
     * 
     *
     * @param float|null $pixelAspectRatio
     *
     * @return self
     */
    public function setPixelAspectRatio(?float $pixelAspectRatio) : self
    {
        $this->pixelAspectRatio = $pixelAspectRatio;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getResolution() : ?int
    {
        return $this->resolution;
    }
    /**
     * 
     *
     * @param int|null $resolution
     *
     * @return self
     */
    public function setResolution(?int $resolution) : self
    {
        $this->resolution = $resolution;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStreamSize() : ?int
    {
        return $this->streamSize;
    }
    /**
     * 
     *
     * @param int|null $streamSize
     *
     * @return self
     */
    public function setStreamSize(?int $streamSize) : self
    {
        $this->streamSize = $streamSize;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWidth() : ?int
    {
        return $this->width;
    }
    /**
     * 
     *
     * @param int|null $width
     *
     * @return self
     */
    public function setWidth(?int $width) : self
    {
        $this->width = $width;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRotation() : ?float
    {
        return $this->rotation;
    }
    /**
     * 
     *
     * @param float|null $rotation
     *
     * @return self
     */
    public function setRotation(?float $rotation) : self
    {
        $this->rotation = $rotation;
        return $this;
    }
}