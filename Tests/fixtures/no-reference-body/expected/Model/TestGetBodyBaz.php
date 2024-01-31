<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class TestGetBodyBaz extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $baz;
    /**
     * 
     *
     * @return string
     */
    public function getBaz() : string
    {
        return $this->baz;
    }
    /**
     * 
     *
     * @param string $baz
     *
     * @return self
     */
    public function setBaz(string $baz) : self
    {
        $this->initialized['baz'] = true;
        $this->baz = $baz;
        return $this;
    }
}