<?php

namespace PicturePark\API\Model;

class ContentPermissionsUpdateManyRequest
{
    /**
     * Content permissions update items
     *
     * @var ContentPermissionsUpdateItem[]
     */
    protected $items;
    /**
     * Content permissions update items
     *
     * @return ContentPermissionsUpdateItem[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * Content permissions update items
     *
     * @param ContentPermissionsUpdateItem[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}