<?php

namespace PicturePark\API\Model;

class ImageMetadata
{
    /**
     * 
     *
     * @var mixed|null
     */
    protected $names;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $descriptions;
    /**
     * 
     *
     * @var string|null
     */
    protected $fileExtension;
    /**
     * 
     *
     * @var string|null
     */
    protected $fileName;
    /**
     * 
     *
     * @var string|null
     */
    protected $filePath;
    /**
     * 
     *
     * @var int|null
     */
    protected $fileSizeInBytes;
    /**
     * 
     *
     * @var string|null
     */
    protected $sha1Hash;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $xmpMetadata;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $exifMetadata;
    /**
     * 
     *
     * @var string|null
     */
    protected $language;
    /**
     * 
     *
     * @var int
     */
    protected $width;
    /**
     * 
     *
     * @var int
     */
    protected $height;
    /**
     * 
     *
     * @var float
     */
    protected $widthInInch;
    /**
     * 
     *
     * @var float
     */
    protected $heightInInch;
    /**
     * 
     *
     * @var float
     */
    protected $widthInCm;
    /**
     * 
     *
     * @var float
     */
    protected $heightInCm;
    /**
     * 
     *
     * @var string|null
     */
    protected $colorSpace;
    /**
     * 
     *
     * @var string|null
     */
    protected $colorProfile;
    /**
     * 
     *
     * @var int
     */
    protected $bitsPerPixel;
    /**
     * 
     *
     * @var int
     */
    protected $bitsPerChannel;
    /**
     * 
     *
     * @var string|null
     */
    protected $channels;
    /**
     * 
     *
     * @var string|null
     */
    protected $pixelFormat;
    /**
     * 
     *
     * @var bool
     */
    protected $hasAlpha;
    /**
     * 
     *
     * @var bool
     */
    protected $isIndexed;
    /**
     * 
     *
     * @var bool
     */
    protected $isExtended;
    /**
     * 
     *
     * @var float
     */
    protected $horizontalResolution;
    /**
     * 
     *
     * @var float
     */
    protected $verticalResolution;
    /**
     * 
     *
     * @var int
     */
    protected $totalFrames;
    /**
     * 
     *
     * @var int
     */
    protected $totalUnspecifiedTiffExtraChannels;
    /**
     * 
     *
     * @var bool
     */
    protected $hasExifData;
    /**
     * 
     *
     * @var bool
     */
    protected $hasIptcData;
    /**
     * 
     *
     * @var bool
     */
    protected $hasAdobeResourceData;
    /**
     * 
     *
     * @var bool
     */
    protected $hasXmpData;
    /**
     * 
     *
     * @var int
     */
    protected $uncompressedSizeInBytes;
    /**
     * 
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * 
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names) : self
    {
        $this->names = $names;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }
    /**
     * 
     *
     * @param mixed $descriptions
     *
     * @return self
     */
    public function setDescriptions($descriptions) : self
    {
        $this->descriptions = $descriptions;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFileExtension() : ?string
    {
        return $this->fileExtension;
    }
    /**
     * 
     *
     * @param string|null $fileExtension
     *
     * @return self
     */
    public function setFileExtension(?string $fileExtension) : self
    {
        $this->fileExtension = $fileExtension;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFileName() : ?string
    {
        return $this->fileName;
    }
    /**
     * 
     *
     * @param string|null $fileName
     *
     * @return self
     */
    public function setFileName(?string $fileName) : self
    {
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFilePath() : ?string
    {
        return $this->filePath;
    }
    /**
     * 
     *
     * @param string|null $filePath
     *
     * @return self
     */
    public function setFilePath(?string $filePath) : self
    {
        $this->filePath = $filePath;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFileSizeInBytes() : ?int
    {
        return $this->fileSizeInBytes;
    }
    /**
     * 
     *
     * @param int|null $fileSizeInBytes
     *
     * @return self
     */
    public function setFileSizeInBytes(?int $fileSizeInBytes) : self
    {
        $this->fileSizeInBytes = $fileSizeInBytes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSha1Hash() : ?string
    {
        return $this->sha1Hash;
    }
    /**
     * 
     *
     * @param string|null $sha1Hash
     *
     * @return self
     */
    public function setSha1Hash(?string $sha1Hash) : self
    {
        $this->sha1Hash = $sha1Hash;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getXmpMetadata()
    {
        return $this->xmpMetadata;
    }
    /**
     * 
     *
     * @param mixed $xmpMetadata
     *
     * @return self
     */
    public function setXmpMetadata($xmpMetadata) : self
    {
        $this->xmpMetadata = $xmpMetadata;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getExifMetadata()
    {
        return $this->exifMetadata;
    }
    /**
     * 
     *
     * @param mixed $exifMetadata
     *
     * @return self
     */
    public function setExifMetadata($exifMetadata) : self
    {
        $this->exifMetadata = $exifMetadata;
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
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }
    /**
     * 
     *
     * @param int $width
     *
     * @return self
     */
    public function setWidth(int $width) : self
    {
        $this->width = $width;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }
    /**
     * 
     *
     * @param int $height
     *
     * @return self
     */
    public function setHeight(int $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWidthInInch() : float
    {
        return $this->widthInInch;
    }
    /**
     * 
     *
     * @param float $widthInInch
     *
     * @return self
     */
    public function setWidthInInch(float $widthInInch) : self
    {
        $this->widthInInch = $widthInInch;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHeightInInch() : float
    {
        return $this->heightInInch;
    }
    /**
     * 
     *
     * @param float $heightInInch
     *
     * @return self
     */
    public function setHeightInInch(float $heightInInch) : self
    {
        $this->heightInInch = $heightInInch;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWidthInCm() : float
    {
        return $this->widthInCm;
    }
    /**
     * 
     *
     * @param float $widthInCm
     *
     * @return self
     */
    public function setWidthInCm(float $widthInCm) : self
    {
        $this->widthInCm = $widthInCm;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHeightInCm() : float
    {
        return $this->heightInCm;
    }
    /**
     * 
     *
     * @param float $heightInCm
     *
     * @return self
     */
    public function setHeightInCm(float $heightInCm) : self
    {
        $this->heightInCm = $heightInCm;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getColorSpace() : ?string
    {
        return $this->colorSpace;
    }
    /**
     * 
     *
     * @param string|null $colorSpace
     *
     * @return self
     */
    public function setColorSpace(?string $colorSpace) : self
    {
        $this->colorSpace = $colorSpace;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getColorProfile() : ?string
    {
        return $this->colorProfile;
    }
    /**
     * 
     *
     * @param string|null $colorProfile
     *
     * @return self
     */
    public function setColorProfile(?string $colorProfile) : self
    {
        $this->colorProfile = $colorProfile;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBitsPerPixel() : int
    {
        return $this->bitsPerPixel;
    }
    /**
     * 
     *
     * @param int $bitsPerPixel
     *
     * @return self
     */
    public function setBitsPerPixel(int $bitsPerPixel) : self
    {
        $this->bitsPerPixel = $bitsPerPixel;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBitsPerChannel() : int
    {
        return $this->bitsPerChannel;
    }
    /**
     * 
     *
     * @param int $bitsPerChannel
     *
     * @return self
     */
    public function setBitsPerChannel(int $bitsPerChannel) : self
    {
        $this->bitsPerChannel = $bitsPerChannel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getChannels() : ?string
    {
        return $this->channels;
    }
    /**
     * 
     *
     * @param string|null $channels
     *
     * @return self
     */
    public function setChannels(?string $channels) : self
    {
        $this->channels = $channels;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPixelFormat() : ?string
    {
        return $this->pixelFormat;
    }
    /**
     * 
     *
     * @param string|null $pixelFormat
     *
     * @return self
     */
    public function setPixelFormat(?string $pixelFormat) : self
    {
        $this->pixelFormat = $pixelFormat;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasAlpha() : bool
    {
        return $this->hasAlpha;
    }
    /**
     * 
     *
     * @param bool $hasAlpha
     *
     * @return self
     */
    public function setHasAlpha(bool $hasAlpha) : self
    {
        $this->hasAlpha = $hasAlpha;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsIndexed() : bool
    {
        return $this->isIndexed;
    }
    /**
     * 
     *
     * @param bool $isIndexed
     *
     * @return self
     */
    public function setIsIndexed(bool $isIndexed) : self
    {
        $this->isIndexed = $isIndexed;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsExtended() : bool
    {
        return $this->isExtended;
    }
    /**
     * 
     *
     * @param bool $isExtended
     *
     * @return self
     */
    public function setIsExtended(bool $isExtended) : self
    {
        $this->isExtended = $isExtended;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHorizontalResolution() : float
    {
        return $this->horizontalResolution;
    }
    /**
     * 
     *
     * @param float $horizontalResolution
     *
     * @return self
     */
    public function setHorizontalResolution(float $horizontalResolution) : self
    {
        $this->horizontalResolution = $horizontalResolution;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getVerticalResolution() : float
    {
        return $this->verticalResolution;
    }
    /**
     * 
     *
     * @param float $verticalResolution
     *
     * @return self
     */
    public function setVerticalResolution(float $verticalResolution) : self
    {
        $this->verticalResolution = $verticalResolution;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalFrames() : int
    {
        return $this->totalFrames;
    }
    /**
     * 
     *
     * @param int $totalFrames
     *
     * @return self
     */
    public function setTotalFrames(int $totalFrames) : self
    {
        $this->totalFrames = $totalFrames;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalUnspecifiedTiffExtraChannels() : int
    {
        return $this->totalUnspecifiedTiffExtraChannels;
    }
    /**
     * 
     *
     * @param int $totalUnspecifiedTiffExtraChannels
     *
     * @return self
     */
    public function setTotalUnspecifiedTiffExtraChannels(int $totalUnspecifiedTiffExtraChannels) : self
    {
        $this->totalUnspecifiedTiffExtraChannels = $totalUnspecifiedTiffExtraChannels;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasExifData() : bool
    {
        return $this->hasExifData;
    }
    /**
     * 
     *
     * @param bool $hasExifData
     *
     * @return self
     */
    public function setHasExifData(bool $hasExifData) : self
    {
        $this->hasExifData = $hasExifData;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasIptcData() : bool
    {
        return $this->hasIptcData;
    }
    /**
     * 
     *
     * @param bool $hasIptcData
     *
     * @return self
     */
    public function setHasIptcData(bool $hasIptcData) : self
    {
        $this->hasIptcData = $hasIptcData;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasAdobeResourceData() : bool
    {
        return $this->hasAdobeResourceData;
    }
    /**
     * 
     *
     * @param bool $hasAdobeResourceData
     *
     * @return self
     */
    public function setHasAdobeResourceData(bool $hasAdobeResourceData) : self
    {
        $this->hasAdobeResourceData = $hasAdobeResourceData;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasXmpData() : bool
    {
        return $this->hasXmpData;
    }
    /**
     * 
     *
     * @param bool $hasXmpData
     *
     * @return self
     */
    public function setHasXmpData(bool $hasXmpData) : self
    {
        $this->hasXmpData = $hasXmpData;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUncompressedSizeInBytes() : int
    {
        return $this->uncompressedSizeInBytes;
    }
    /**
     * 
     *
     * @param int $uncompressedSizeInBytes
     *
     * @return self
     */
    public function setUncompressedSizeInBytes(int $uncompressedSizeInBytes) : self
    {
        $this->uncompressedSizeInBytes = $uncompressedSizeInBytes;
        return $this;
    }
}