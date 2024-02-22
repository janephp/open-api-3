<?php

namespace Github\Model;

class ReposOwnerRepoHooksPostBody extends \ArrayObject
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
     * Use `web` to create a webhook. Default: `web`. This parameter only accepts the value `web`.
     *
     * @var string
     */
    protected $name;
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://developer.github.com/v3/repos/hooks/#create-hook-config-params).
     *
     * @var ReposOwnerRepoHooksPostBodyConfig
     */
    protected $config;
    /**
     * Determines what [events](https://developer.github.com/webhooks/event-payloads) the hook is triggered for.
     *
     * @var list<string>
     */
    protected $events = array(0 => 'push');
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     *
     * @var bool
     */
    protected $active = true;
    /**
     * Use `web` to create a webhook. Default: `web`. This parameter only accepts the value `web`.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Use `web` to create a webhook. Default: `web`. This parameter only accepts the value `web`.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://developer.github.com/v3/repos/hooks/#create-hook-config-params).
     *
     * @return ReposOwnerRepoHooksPostBodyConfig
     */
    public function getConfig() : ReposOwnerRepoHooksPostBodyConfig
    {
        return $this->config;
    }
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://developer.github.com/v3/repos/hooks/#create-hook-config-params).
     *
     * @param ReposOwnerRepoHooksPostBodyConfig $config
     *
     * @return self
     */
    public function setConfig(ReposOwnerRepoHooksPostBodyConfig $config) : self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
    /**
     * Determines what [events](https://developer.github.com/webhooks/event-payloads) the hook is triggered for.
     *
     * @return list<string>
     */
    public function getEvents() : array
    {
        return $this->events;
    }
    /**
     * Determines what [events](https://developer.github.com/webhooks/event-payloads) the hook is triggered for.
     *
     * @param list<string> $events
     *
     * @return self
     */
    public function setEvents(array $events) : self
    {
        $this->initialized['events'] = true;
        $this->events = $events;
        return $this;
    }
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
}