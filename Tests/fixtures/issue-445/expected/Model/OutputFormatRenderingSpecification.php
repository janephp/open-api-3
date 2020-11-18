<?php

namespace PicturePark\API\Model;

class OutputFormatRenderingSpecification
{
    /**
     * Which output format should be used as a source of data.
     *
     * @var mixed|null
     */
    protected $sourceOutputFormats;
    /**
     * Information about the technical format of the data, e.g. JPEG, AAC or video still.
     *
     * @var mixed|null
     */
    protected $format;
    /**
     * Which output format should be used as a source of data.
     *
     * @return mixed
     */
    public function getSourceOutputFormats()
    {
        return $this->sourceOutputFormats;
    }
    /**
     * Which output format should be used as a source of data.
     *
     * @param mixed $sourceOutputFormats
     *
     * @return self
     */
    public function setSourceOutputFormats($sourceOutputFormats) : self
    {
        $this->sourceOutputFormats = $sourceOutputFormats;
        return $this;
    }
    /**
     * Information about the technical format of the data, e.g. JPEG, AAC or video still.
     *
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }
    /**
     * Information about the technical format of the data, e.g. JPEG, AAC or video still.
     *
     * @param mixed $format
     *
     * @return self
     */
    public function setFormat($format) : self
    {
        $this->format = $format;
        return $this;
    }
}