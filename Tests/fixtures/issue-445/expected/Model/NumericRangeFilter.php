<?php

namespace PicturePark\API\Model;

class NumericRangeFilter
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
    * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
    (i.e. personLayer.address.street).
    *
    * @var string
    */
    protected $field;
    /**
     * The numeric range on which filtering.
     *
     * @var mixed
     */
    protected $range;
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
    * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
    (i.e. personLayer.address.street).
    *
    * @return string
    */
    public function getField() : string
    {
        return $this->field;
    }
    /**
    * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
    (i.e. personLayer.address.street).
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
     * The numeric range on which filtering.
     *
     * @return mixed
     */
    public function getRange()
    {
        return $this->range;
    }
    /**
     * The numeric range on which filtering.
     *
     * @param mixed $range
     *
     * @return self
     */
    public function setRange($range) : self
    {
        $this->range = $range;
        return $this;
    }
}