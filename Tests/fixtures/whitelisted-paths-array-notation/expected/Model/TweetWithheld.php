<?php

namespace Jane\OpenApi3\Tests\Expected\Model;

class TweetWithheld
{
    /**
     * Indicates if the content is being withheld for on the basis of copyright infringement.
     *
     * @var bool
     */
    protected $copyright;
    /**
     * Provides a list of countries where this content is not available.
     *
     * @var string[]
     */
    protected $countryCodes;
    /**
     * Indicates whether the content being withheld is the `tweet` or a `user`.
     *
     * @var string
     */
    protected $scope;
    /**
     * Indicates if the content is being withheld for on the basis of copyright infringement.
     *
     * @return bool
     */
    public function getCopyright() : bool
    {
        return $this->copyright;
    }
    /**
     * Indicates if the content is being withheld for on the basis of copyright infringement.
     *
     * @param bool $copyright
     *
     * @return self
     */
    public function setCopyright(bool $copyright) : self
    {
        $this->copyright = $copyright;
        return $this;
    }
    /**
     * Provides a list of countries where this content is not available.
     *
     * @return string[]
     */
    public function getCountryCodes() : array
    {
        return $this->countryCodes;
    }
    /**
     * Provides a list of countries where this content is not available.
     *
     * @param string[] $countryCodes
     *
     * @return self
     */
    public function setCountryCodes(array $countryCodes) : self
    {
        $this->countryCodes = $countryCodes;
        return $this;
    }
    /**
     * Indicates whether the content being withheld is the `tweet` or a `user`.
     *
     * @return string
     */
    public function getScope() : string
    {
        return $this->scope;
    }
    /**
     * Indicates whether the content being withheld is the `tweet` or a `user`.
     *
     * @param string $scope
     *
     * @return self
     */
    public function setScope(string $scope) : self
    {
        $this->scope = $scope;
        return $this;
    }
}