<?php

namespace PicturePark\API\Model;

class GeoDistanceAggregator
{
    /**
     * The slug name of the aggregation. It must be unique per aggregation request.
     *
     * @var string
     */
    protected $name;
    /**
     * Language specific field names.
     *
     * @var mixed|null
     */
    protected $names;
    /**
     * An optional aggregator list for nested aggregations.
     *
     * @var AggregatorBase[]|null
     */
    protected $aggregators;
    /**
     * An optional filter to limit the data set the aggregation is operation on.
     *
     * @var mixed|null
     */
    protected $filter;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * The field's ID to execute the aggregation on.
     *
     * @var string
     */
    protected $field;
    /**
     * The point of origin to calculate the distance from (latitude/longitude).
     *
     * @var mixed
     */
    protected $location;
    /**
     * A list of distance ranges.
     *
     * @var GeoDistance[]
     */
    protected $ranges;
    /**
     * The slug name of the aggregation. It must be unique per aggregation request.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The slug name of the aggregation. It must be unique per aggregation request.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Language specific field names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific field names.
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
     * An optional aggregator list for nested aggregations.
     *
     * @return AggregatorBase[]|null
     */
    public function getAggregators() : ?array
    {
        return $this->aggregators;
    }
    /**
     * An optional aggregator list for nested aggregations.
     *
     * @param AggregatorBase[]|null $aggregators
     *
     * @return self
     */
    public function setAggregators(?array $aggregators) : self
    {
        $this->aggregators = $aggregators;
        return $this;
    }
    /**
     * An optional filter to limit the data set the aggregation is operation on.
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * An optional filter to limit the data set the aggregation is operation on.
     *
     * @param mixed $filter
     *
     * @return self
     */
    public function setFilter($filter) : self
    {
        $this->filter = $filter;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * The field's ID to execute the aggregation on.
     *
     * @return string
     */
    public function getField() : string
    {
        return $this->field;
    }
    /**
     * The field's ID to execute the aggregation on.
     *
     * @param string $field
     *
     * @return self
     */
    public function setField(string $field) : self
    {
        $this->field = $field;
        return $this;
    }
    /**
     * The point of origin to calculate the distance from (latitude/longitude).
     *
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * The point of origin to calculate the distance from (latitude/longitude).
     *
     * @param mixed $location
     *
     * @return self
     */
    public function setLocation($location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * A list of distance ranges.
     *
     * @return GeoDistance[]
     */
    public function getRanges() : array
    {
        return $this->ranges;
    }
    /**
     * A list of distance ranges.
     *
     * @param GeoDistance[] $ranges
     *
     * @return self
     */
    public function setRanges(array $ranges) : self
    {
        $this->ranges = $ranges;
        return $this;
    }
}