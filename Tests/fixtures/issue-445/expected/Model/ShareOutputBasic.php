<?php

namespace PicturePark\API\Model;

class ShareOutputBasic extends ShareOutputBase
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
}