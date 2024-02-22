<?php

namespace PicturePark\API\Model;

class ContentDeleteManyRequest
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
     * IDs of the contents to delete.
     *
     * @var list<string>
     */
    protected $contentIds;
    /**
     * A value indicating whether references to the contents should be removed.
     *
     * @var bool
     */
    protected $forceReferenceRemoval;
    /**
     * Create a progress notification and notify on progress. Notifications are shown in the UI only to the same use who triggered the delete request.
     *
     * @var bool
     */
    protected $notifyProgress;
    /**
     * IDs of the contents to delete.
     *
     * @return list<string>
     */
    public function getContentIds() : array
    {
        return $this->contentIds;
    }
    /**
     * IDs of the contents to delete.
     *
     * @param list<string> $contentIds
     *
     * @return self
     */
    public function setContentIds(array $contentIds) : self
    {
        $this->initialized['contentIds'] = true;
        $this->contentIds = $contentIds;
        return $this;
    }
    /**
     * A value indicating whether references to the contents should be removed.
     *
     * @return bool
     */
    public function getForceReferenceRemoval() : bool
    {
        return $this->forceReferenceRemoval;
    }
    /**
     * A value indicating whether references to the contents should be removed.
     *
     * @param bool $forceReferenceRemoval
     *
     * @return self
     */
    public function setForceReferenceRemoval(bool $forceReferenceRemoval) : self
    {
        $this->initialized['forceReferenceRemoval'] = true;
        $this->forceReferenceRemoval = $forceReferenceRemoval;
        return $this;
    }
    /**
     * Create a progress notification and notify on progress. Notifications are shown in the UI only to the same use who triggered the delete request.
     *
     * @return bool
     */
    public function getNotifyProgress() : bool
    {
        return $this->notifyProgress;
    }
    /**
     * Create a progress notification and notify on progress. Notifications are shown in the UI only to the same use who triggered the delete request.
     *
     * @param bool $notifyProgress
     *
     * @return self
     */
    public function setNotifyProgress(bool $notifyProgress) : self
    {
        $this->initialized['notifyProgress'] = true;
        $this->notifyProgress = $notifyProgress;
        return $this;
    }
}