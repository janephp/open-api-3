<?php

namespace PicturePark\API\Model;

class NumericRangeAggregator extends AggregatorBase
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
     * The field's ID to execute the aggregation on.
     *
     * @var string|null
     */
    protected $field;
    /**
     * A list of numeric ranges on which aggregate.
     *
     * @var list<NumericRangeForAggregator>
     */
    protected $ranges;
    /**
     * The field's ID to execute the aggregation on.
     *
     * @return string|null
     */
    public function getField() : ?string
    {
        return $this->field;
    }
    /**
     * The field's ID to execute the aggregation on.
     *
     * @param string|null $field
     *
     * @return self
     */
    public function setField(?string $field) : self
    {
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
    /**
     * A list of numeric ranges on which aggregate.
     *
     * @return list<NumericRangeForAggregator>
     */
    public function getRanges() : array
    {
        return $this->ranges;
    }
    /**
     * A list of numeric ranges on which aggregate.
     *
     * @param list<NumericRangeForAggregator> $ranges
     *
     * @return self
     */
    public function setRanges(array $ranges) : self
    {
        $this->initialized['ranges'] = true;
        $this->ranges = $ranges;
        return $this;
    }
}