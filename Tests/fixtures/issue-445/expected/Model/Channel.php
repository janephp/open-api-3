<?php

namespace PicturePark\API\Model;

class Channel
{
    /**
     * ID of channel.
     *
     * @var string
     */
    protected $id;
    /**
     * Numeric sort order of the channel. Channels are returned ordered by this field.
     *
     * @var int
     */
    protected $sortOrder;
    /**
     * The search index ID where the channel requests the content from. Only RootContentSearchIndex is supported.
     *
     * @var string
     */
    protected $searchIndexId;
    /**
     * An optional search filter. Limits the content document result set on each search and aggregation request.
     *
     * @var mixed|null
     */
    protected $filter;
    /**
     * Language specific names.
     *
     * @var mixed
     */
    protected $names;
    /**
     * Default sort order specified for the channel to sort the results of a content search.
     *
     * @var SortInfo[]
     */
    protected $sort;
    /**
     * Fields to be used for sorting in content browser when displaying the channel. The information is only set and consumed by the client, not by the server.
     *
     * @var SortField[]
     */
    protected $sortFields;
    /**
     * An optional list of aggregators. These aggregations are added by default on each aggregation requests.
     *
     * @var AggregatorBase[]
     */
    protected $aggregations;
    /**
     * An Optional list of fields. These fields extend the list of simple search fields outside the bounds of any schema field configuration.
     *
     * @var string[]
     */
    protected $extendedSimpleSearchFields;
    /**
     * User roles granted access to the channel.
     *
     * @var string[]
     */
    protected $grantedUserRoleIds;
    /**
     * Display pattern to use for rendering details when 0 results are returned
     *
     * @var mixed
     */
    protected $missingResultsDisplayPatterns;
    /**
     * Audit information.
     *
     * @var mixed
     */
    protected $audit;
    /**
     * Grants rights to all the users to view the channel.
     *
     * @var bool
     */
    protected $viewForAll;
    /**
     * ID of channel.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * ID of channel.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Numeric sort order of the channel. Channels are returned ordered by this field.
     *
     * @return int
     */
    public function getSortOrder() : int
    {
        return $this->sortOrder;
    }
    /**
     * Numeric sort order of the channel. Channels are returned ordered by this field.
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
     * The search index ID where the channel requests the content from. Only RootContentSearchIndex is supported.
     *
     * @return string
     */
    public function getSearchIndexId() : string
    {
        return $this->searchIndexId;
    }
    /**
     * The search index ID where the channel requests the content from. Only RootContentSearchIndex is supported.
     *
     * @param string $searchIndexId
     *
     * @return self
     */
    public function setSearchIndexId(string $searchIndexId) : self
    {
        $this->searchIndexId = $searchIndexId;
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
     * Language specific names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names) : self
    {
        $this->names = $names;
        return $this;
    }
    /**
     * Default sort order specified for the channel to sort the results of a content search.
     *
     * @return SortInfo[]
     */
    public function getSort() : array
    {
        return $this->sort;
    }
    /**
     * Default sort order specified for the channel to sort the results of a content search.
     *
     * @param SortInfo[] $sort
     *
     * @return self
     */
    public function setSort(array $sort) : self
    {
        $this->sort = $sort;
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
     * An optional list of aggregators. These aggregations are added by default on each aggregation requests.
     *
     * @return AggregatorBase[]
     */
    public function getAggregations() : array
    {
        return $this->aggregations;
    }
    /**
     * An optional list of aggregators. These aggregations are added by default on each aggregation requests.
     *
     * @param AggregatorBase[] $aggregations
     *
     * @return self
     */
    public function setAggregations(array $aggregations) : self
    {
        $this->aggregations = $aggregations;
        return $this;
    }
    /**
     * An Optional list of fields. These fields extend the list of simple search fields outside the bounds of any schema field configuration.
     *
     * @return string[]
     */
    public function getExtendedSimpleSearchFields() : array
    {
        return $this->extendedSimpleSearchFields;
    }
    /**
     * An Optional list of fields. These fields extend the list of simple search fields outside the bounds of any schema field configuration.
     *
     * @param string[] $extendedSimpleSearchFields
     *
     * @return self
     */
    public function setExtendedSimpleSearchFields(array $extendedSimpleSearchFields) : self
    {
        $this->extendedSimpleSearchFields = $extendedSimpleSearchFields;
        return $this;
    }
    /**
     * User roles granted access to the channel.
     *
     * @return string[]
     */
    public function getGrantedUserRoleIds() : array
    {
        return $this->grantedUserRoleIds;
    }
    /**
     * User roles granted access to the channel.
     *
     * @param string[] $grantedUserRoleIds
     *
     * @return self
     */
    public function setGrantedUserRoleIds(array $grantedUserRoleIds) : self
    {
        $this->grantedUserRoleIds = $grantedUserRoleIds;
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
     * Audit information.
     *
     * @return mixed
     */
    public function getAudit()
    {
        return $this->audit;
    }
    /**
     * Audit information.
     *
     * @param mixed $audit
     *
     * @return self
     */
    public function setAudit($audit) : self
    {
        $this->audit = $audit;
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