<?php

namespace PicturePark\API\Model;

class ChannelUpdateRequest
{
    /**
     * Default sort order specified for the channel to sort the results of a content search.
     *
     * @var SortInfo[]|null
     */
    protected $sort;
    /**
     * Order in which the channels should be displayed.
     *
     * @var int
     */
    protected $sortOrder;
    /**
     * Fields to be used for sorting in content browser when displaying the channel. The information is only set and consumed by the client, not by the server.
     *
     * @var SortField[]
     */
    protected $sortFields;
    /**
     * A custom dictionary type to distinguish language specific class properties.
     *
     * @var string[]
     */
    protected $names;
    /**
     * Language specific names.
     *
     * @var string|null
     */
    protected $searchIndexId;
    /**
     * User roles granted access to the channel.
     *
     * @var string[]|null
     */
    protected $grantedUserRoleIds;
    /**
     * An optional list of aggregators. These aggregations are added by default on each aggregation requests.
     *
     * @var AggregatorBase[]|null
     */
    protected $aggregations;
    /**
     * An optional search filter. Limits the content document result set on each search and aggregation request.
     *
     * @var mixed|null
     */
    protected $filter;
    /**
     * An Optional list of fields. These fields extend the list of simple search fields outside the bounds of any schema field configuration.
     *
     * @var string[]|null
     */
    protected $extendedSimpleSearchFields;
    /**
     * Display pattern to use for rendering details when 0 results are returned
     *
     * @var mixed|null
     */
    protected $missingResultsDisplayPatterns;
    /**
     * Grants rights to all the users to view the channel.
     *
     * @var bool
     */
    protected $viewForAll;
    /**
     * Default sort order specified for the channel to sort the results of a content search.
     *
     * @return SortInfo[]|null
     */
    public function getSort() : ?array
    {
        return $this->sort;
    }
    /**
     * Default sort order specified for the channel to sort the results of a content search.
     *
     * @param SortInfo[]|null $sort
     *
     * @return self
     */
    public function setSort(?array $sort) : self
    {
        $this->sort = $sort;
        return $this;
    }
    /**
     * Order in which the channels should be displayed.
     *
     * @return int
     */
    public function getSortOrder() : int
    {
        return $this->sortOrder;
    }
    /**
     * Order in which the channels should be displayed.
     *
     * @param int $sortOrder
     *
     * @return self
     */
    public function setSortOrder(int $sortOrder) : self
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Fields to be used for sorting in content browser when displaying the channel. The information is only set and consumed by the client, not by the server.
     *
     * @return SortField[]
     */
    public function getSortFields() : array
    {
        return $this->sortFields;
    }
    /**
     * Fields to be used for sorting in content browser when displaying the channel. The information is only set and consumed by the client, not by the server.
     *
     * @param SortField[] $sortFields
     *
     * @return self
     */
    public function setSortFields(array $sortFields) : self
    {
        $this->sortFields = $sortFields;
        return $this;
    }
    /**
     * A custom dictionary type to distinguish language specific class properties.
     *
     * @return string[]
     */
    public function getNames() : iterable
    {
        return $this->names;
    }
    /**
     * A custom dictionary type to distinguish language specific class properties.
     *
     * @param string[] $names
     *
     * @return self
     */
    public function setNames(iterable $names) : self
    {
        $this->names = $names;
        return $this;
    }
    /**
     * Language specific names.
     *
     * @return string|null
     */
    public function getSearchIndexId() : ?string
    {
        return $this->searchIndexId;
    }
    /**
     * Language specific names.
     *
     * @param string|null $searchIndexId
     *
     * @return self
     */
    public function setSearchIndexId(?string $searchIndexId) : self
    {
        $this->searchIndexId = $searchIndexId;
        return $this;
    }
    /**
     * User roles granted access to the channel.
     *
     * @return string[]|null
     */
    public function getGrantedUserRoleIds() : ?array
    {
        return $this->grantedUserRoleIds;
    }
    /**
     * User roles granted access to the channel.
     *
     * @param string[]|null $grantedUserRoleIds
     *
     * @return self
     */
    public function setGrantedUserRoleIds(?array $grantedUserRoleIds) : self
    {
        $this->grantedUserRoleIds = $grantedUserRoleIds;
        return $this;
    }
    /**
     * An optional list of aggregators. These aggregations are added by default on each aggregation requests.
     *
     * @return AggregatorBase[]|null
     */
    public function getAggregations() : ?array
    {
        return $this->aggregations;
    }
    /**
     * An optional list of aggregators. These aggregations are added by default on each aggregation requests.
     *
     * @param AggregatorBase[]|null $aggregations
     *
     * @return self
     */
    public function setAggregations(?array $aggregations) : self
    {
        $this->aggregations = $aggregations;
        return $this;
    }
    /**
     * An optional search filter. Limits the content document result set on each search and aggregation request.
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * An optional search filter. Limits the content document result set on each search and aggregation request.
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
     * An Optional list of fields. These fields extend the list of simple search fields outside the bounds of any schema field configuration.
     *
     * @return string[]|null
     */
    public function getExtendedSimpleSearchFields() : ?array
    {
        return $this->extendedSimpleSearchFields;
    }
    /**
     * An Optional list of fields. These fields extend the list of simple search fields outside the bounds of any schema field configuration.
     *
     * @param string[]|null $extendedSimpleSearchFields
     *
     * @return self
     */
    public function setExtendedSimpleSearchFields(?array $extendedSimpleSearchFields) : self
    {
        $this->extendedSimpleSearchFields = $extendedSimpleSearchFields;
        return $this;
    }
    /**
     * Display pattern to use for rendering details when 0 results are returned
     *
     * @return mixed
     */
    public function getMissingResultsDisplayPatterns()
    {
        return $this->missingResultsDisplayPatterns;
    }
    /**
     * Display pattern to use for rendering details when 0 results are returned
     *
     * @param mixed $missingResultsDisplayPatterns
     *
     * @return self
     */
    public function setMissingResultsDisplayPatterns($missingResultsDisplayPatterns) : self
    {
        $this->missingResultsDisplayPatterns = $missingResultsDisplayPatterns;
        return $this;
    }
    /**
     * Grants rights to all the users to view the channel.
     *
     * @return bool
     */
    public function getViewForAll() : bool
    {
        return $this->viewForAll;
    }
    /**
     * Grants rights to all the users to view the channel.
     *
     * @param bool $viewForAll
     *
     * @return self
     */
    public function setViewForAll(bool $viewForAll) : self
    {
        $this->viewForAll = $viewForAll;
        return $this;
    }
}