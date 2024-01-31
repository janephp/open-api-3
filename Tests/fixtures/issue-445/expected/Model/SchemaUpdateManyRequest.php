<?php

namespace PicturePark\API\Model;

class SchemaUpdateManyRequest
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
     * The schemas to update.
     *
     * @var SchemaUpdateItem[]
     */
    protected $schemas;
    /**
     * The schemas to update.
     *
     * @return SchemaUpdateItem[]
     */
    public function getSchemas() : array
    {
        return $this->schemas;
    }
    /**
     * The schemas to update.
     *
     * @param SchemaUpdateItem[] $schemas
     *
     * @return self
     */
    public function setSchemas(array $schemas) : self
    {
        $this->initialized['schemas'] = true;
        $this->schemas = $schemas;
        return $this;
    }
}