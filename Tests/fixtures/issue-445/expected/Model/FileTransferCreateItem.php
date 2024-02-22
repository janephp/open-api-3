<?php

namespace PicturePark\API\Model;

class FileTransferCreateItem
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
    protected $fileId;
    /**
     * An optional id list of schemas with type layer.
     *
     * @var list<string>|null
     */
    protected $layerSchemaIds;
    /**
    * The metadata to be assigned to the imported content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
    by the LayerSchemaIds property.
    *
    * @var array<string, mixed>|null
    */
    protected $metadata;
    /**
     * An optional id list of content permission sets. Controls content accessibility outside of content ownership.
     *
     * @var list<string>|null
     */
    protected $contentPermissionSetIds;
    /**
     * 
     *
     * @return string
     */
    public function getFileId() : string
    {
        return $this->fileId;
    }
    /**
     * 
     *
     * @param string $fileId
     *
     * @return self
     */
    public function setFileId(string $fileId) : self
    {
        $this->initialized['fileId'] = true;
        $this->fileId = $fileId;
        return $this;
    }
    /**
     * An optional id list of schemas with type layer.
     *
     * @return list<string>|null
     */
    public function getLayerSchemaIds() : ?array
    {
        return $this->layerSchemaIds;
    }
    /**
     * An optional id list of schemas with type layer.
     *
     * @param list<string>|null $layerSchemaIds
     *
     * @return self
     */
    public function setLayerSchemaIds(?array $layerSchemaIds) : self
    {
        $this->initialized['layerSchemaIds'] = true;
        $this->layerSchemaIds = $layerSchemaIds;
        return $this;
    }
    /**
    * The metadata to be assigned to the imported content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
    by the LayerSchemaIds property.
    *
    * @return array<string, mixed>|null
    */
    public function getMetadata() : ?iterable
    {
        return $this->metadata;
    }
    /**
    * The metadata to be assigned to the imported content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
    by the LayerSchemaIds property.
    *
    * @param array<string, mixed>|null $metadata
    *
    * @return self
    */
    public function setMetadata(?iterable $metadata) : self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * An optional id list of content permission sets. Controls content accessibility outside of content ownership.
     *
     * @return list<string>|null
     */
    public function getContentPermissionSetIds() : ?array
    {
        return $this->contentPermissionSetIds;
    }
    /**
     * An optional id list of content permission sets. Controls content accessibility outside of content ownership.
     *
     * @param list<string>|null $contentPermissionSetIds
     *
     * @return self
     */
    public function setContentPermissionSetIds(?array $contentPermissionSetIds) : self
    {
        $this->initialized['contentPermissionSetIds'] = true;
        $this->contentPermissionSetIds = $contentPermissionSetIds;
        return $this;
    }
}