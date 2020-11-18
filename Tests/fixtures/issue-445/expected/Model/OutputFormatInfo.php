<?php

namespace PicturePark\API\Model;

class OutputFormatInfo
{
    /**
     * Output ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Output translations.
     *
     * @var mixed
     */
    protected $names;
    /**
     * Output ID.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Output ID.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Output translations.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Output translations.
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
}