<?php

namespace PicturePark\API\Model;

class SchemaUpdateResult
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
     * The details of the updated schema.
     *
     * @var mixed|null
     */
    protected $schema;
    /**
     * The details of the updated schema.
     *
     * @return mixed
     */
    public function getSchema()
    {
        return $this->schema;
    }
    /**
     * The details of the updated schema.
     *
     * @param mixed $schema
     *
     * @return self
     */
    public function setSchema($schema) : self
    {
        $this->initialized['schema'] = true;
        $this->schema = $schema;
        return $this;
    }
}