<?php

namespace Jane\OpenApi3\Tests\Expected\Model;

class MessageM700PostBody
{
    /**
     * 
     *
     * @var string
     */
    protected $bar;
    /**
     * 
     *
     * @return string
     */
    public function getBar() : string
    {
        return $this->bar;
    }
    /**
     * 
     *
     * @param string $bar
     *
     * @return self
     */
    public function setBar(string $bar) : self
    {
        $this->bar = $bar;
        return $this;
    }
}