<?php

namespace PicturePark\API\Model;

class BusinessProcessStateChangeRequest
{
    /**
     * The new state of the business process.
     *
     * @var string
     */
    protected $state;
    /**
     * The new life cycle of the business process.
     *
     * @var mixed
     */
    protected $lifeCycle;
    /**
     * An optional notification update to be posted together with the transition.
     *
     * @var mixed|null
     */
    protected $notification;
    /**
     * The new state of the business process.
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * The new state of the business process.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * The new life cycle of the business process.
     *
     * @return mixed
     */
    public function getLifeCycle()
    {
        return $this->lifeCycle;
    }
    /**
     * The new life cycle of the business process.
     *
     * @param mixed $lifeCycle
     *
     * @return self
     */
    public function setLifeCycle($lifeCycle) : self
    {
        $this->lifeCycle = $lifeCycle;
        return $this;
    }
    /**
     * An optional notification update to be posted together with the transition.
     *
     * @return mixed
     */
    public function getNotification()
    {
        return $this->notification;
    }
    /**
     * An optional notification update to be posted together with the transition.
     *
     * @param mixed $notification
     *
     * @return self
     */
    public function setNotification($notification) : self
    {
        $this->notification = $notification;
        return $this;
    }
}