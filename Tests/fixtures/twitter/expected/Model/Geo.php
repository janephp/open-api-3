<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Geo extends \ArrayObject
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
    protected $type;
    /**
     * 
     *
     * @var float[]
     */
    protected $bbox;
    /**
     * A [GeoJson Point](https://tools.ietf.org/html/rfc7946#section-3.1.2) geometry object.
     *
     * @var Point
     */
    protected $geometry;
    /**
     * 
     *
     * @var array<string, mixed>
     */
    protected $properties;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return float[]
     */
    public function getBbox() : array
    {
        return $this->bbox;
    }
    /**
     * 
     *
     * @param float[] $bbox
     *
     * @return self
     */
    public function setBbox(array $bbox) : self
    {
        $this->initialized['bbox'] = true;
        $this->bbox = $bbox;
        return $this;
    }
    /**
     * A [GeoJson Point](https://tools.ietf.org/html/rfc7946#section-3.1.2) geometry object.
     *
     * @return Point
     */
    public function getGeometry() : Point
    {
        return $this->geometry;
    }
    /**
     * A [GeoJson Point](https://tools.ietf.org/html/rfc7946#section-3.1.2) geometry object.
     *
     * @param Point $geometry
     *
     * @return self
     */
    public function setGeometry(Point $geometry) : self
    {
        $this->initialized['geometry'] = true;
        $this->geometry = $geometry;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>
     */
    public function getProperties() : iterable
    {
        return $this->properties;
    }
    /**
     * 
     *
     * @param array<string, mixed> $properties
     *
     * @return self
     */
    public function setProperties(iterable $properties) : self
    {
        $this->initialized['properties'] = true;
        $this->properties = $properties;
        return $this;
    }
}