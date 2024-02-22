<?php

namespace PicturePark\API\Model;

class UserSearchRequest extends \ArrayObject
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
     * Limits the search by using a query string filter. The Lucene query string syntax is supported.
     *
     * @var string|null
     */
    protected $searchString;
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied.
     *
     * @var list<string>|null
     */
    protected $searchBehaviors;
    /**
     * An optional search filter. Limits the document result set.
     *
     * @var mixed|null
     */
    protected $filter;
    /**
     * Return only users in certain life cycle state(s).
     *
     * @var mixed
     */
    protected $lifeCycleFilter;
    /**
     * Return only users with certain user rights.
     *
     * @var list<string>|null
     */
    protected $userRightsFilter;
    /**
    * Special filters used to filter down independently the aggregations' values and the search results on specific conditions.
    For the search results, the aggregation filters are used to create a Filter that is put in AND with the eventual existing Filter of the search request to nail down the search results. The filters generated
    by the aggregation filters are put in OR each other if they have the same AggregationName, and then such groups are put in AND.
    For the aggregation values, only the original Filter of the search request is used to nail down the data to be considered for the aggregations. Then, on top of that, for each aggregator in the search request, a Filter is created to filter down the
    aggregation results of that aggregation: depending if the AggregationName of the AggregationFilter matches the AggregationName of the Aggregator, the filter is put in OR (if it matches) or in AND (if it does not match it).
    Moreover, an AggregationFilter ensures that the related value is returned in the AggregationResults also if the top aggregation values returned by default do not contain it.
    *
    * @var list<AggregationFilter>|null
    */
    protected $aggregationFilters;
    /**
     * Includes the service user in result.
     *
     * @var bool
     */
    protected $includeServiceUser;
    /**
    * Restricts the results to users that are editable for calling user.
    If set to true, IncludeServiceUser is ignored.
    *
    * @var bool
    */
    protected $editableOnly;
    /**
     * Fields and respective directions requested to sort the search results. Sorting on a not indexed field will throw an exception.
     *
     * @var list<SortInfo>|null
     */
    protected $sort;
    /**
     * Limits the document count of the result set.
     *
     * @var int
     */
    protected $limit = 30;
    /**
     * The token used to retrieve the next page of results. It must be null on first request and only filled with the returned pageToken to request next page of results.
     *
     * @var string|null
     */
    protected $pageToken;
    /**
     * Enable debug mode to get as result of the Searched additional debug information. Warning! Severely affects performance.
     *
     * @var bool
     */
    protected $debugMode = false;
    /**
     * List of aggregators that defines how the items should be aggregated.
     *
     * @var list<AggregatorBase>|null
     */
    protected $aggregators;
    /**
     * Limits the search by using a query string filter. The Lucene query string syntax is supported.
     *
     * @return string|null
     */
    public function getSearchString() : ?string
    {
        return $this->searchString;
    }
    /**
     * Limits the search by using a query string filter. The Lucene query string syntax is supported.
     *
     * @param string|null $searchString
     *
     * @return self
     */
    public function setSearchString(?string $searchString) : self
    {
        $this->initialized['searchString'] = true;
        $this->searchString = $searchString;
        return $this;
    }
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied.
     *
     * @return list<string>|null
     */
    public function getSearchBehaviors() : ?array
    {
        return $this->searchBehaviors;
    }
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied.
     *
     * @param list<string>|null $searchBehaviors
     *
     * @return self
     */
    public function setSearchBehaviors(?array $searchBehaviors) : self
    {
        $this->initialized['searchBehaviors'] = true;
        $this->searchBehaviors = $searchBehaviors;
        return $this;
    }
    /**
     * An optional search filter. Limits the document result set.
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * An optional search filter. Limits the document result set.
     *
     * @param mixed $filter
     *
     * @return self
     */
    public function setFilter($filter) : self
    {
        $this->initialized['filter'] = true;
        $this->filter = $filter;
        return $this;
    }
    /**
     * Return only users in certain life cycle state(s).
     *
     * @return mixed
     */
    public function getLifeCycleFilter()
    {
        return $this->lifeCycleFilter;
    }
    /**
     * Return only users in certain life cycle state(s).
     *
     * @param mixed $lifeCycleFilter
     *
     * @return self
     */
    public function setLifeCycleFilter($lifeCycleFilter) : self
    {
        $this->initialized['lifeCycleFilter'] = true;
        $this->lifeCycleFilter = $lifeCycleFilter;
        return $this;
    }
    /**
     * Return only users with certain user rights.
     *
     * @return list<string>|null
     */
    public function getUserRightsFilter() : ?array
    {
        return $this->userRightsFilter;
    }
    /**
     * Return only users with certain user rights.
     *
     * @param list<string>|null $userRightsFilter
     *
     * @return self
     */
    public function setUserRightsFilter(?array $userRightsFilter) : self
    {
        $this->initialized['userRightsFilter'] = true;
        $this->userRightsFilter = $userRightsFilter;
        return $this;
    }
    /**
    * Special filters used to filter down independently the aggregations' values and the search results on specific conditions.
    For the search results, the aggregation filters are used to create a Filter that is put in AND with the eventual existing Filter of the search request to nail down the search results. The filters generated
    by the aggregation filters are put in OR each other if they have the same AggregationName, and then such groups are put in AND.
    For the aggregation values, only the original Filter of the search request is used to nail down the data to be considered for the aggregations. Then, on top of that, for each aggregator in the search request, a Filter is created to filter down the
    aggregation results of that aggregation: depending if the AggregationName of the AggregationFilter matches the AggregationName of the Aggregator, the filter is put in OR (if it matches) or in AND (if it does not match it).
    Moreover, an AggregationFilter ensures that the related value is returned in the AggregationResults also if the top aggregation values returned by default do not contain it.
    *
    * @return list<AggregationFilter>|null
    */
    public function getAggregationFilters() : ?array
    {
        return $this->aggregationFilters;
    }
    /**
    * Special filters used to filter down independently the aggregations' values and the search results on specific conditions.
    For the search results, the aggregation filters are used to create a Filter that is put in AND with the eventual existing Filter of the search request to nail down the search results. The filters generated
    by the aggregation filters are put in OR each other if they have the same AggregationName, and then such groups are put in AND.
    For the aggregation values, only the original Filter of the search request is used to nail down the data to be considered for the aggregations. Then, on top of that, for each aggregator in the search request, a Filter is created to filter down the
    aggregation results of that aggregation: depending if the AggregationName of the AggregationFilter matches the AggregationName of the Aggregator, the filter is put in OR (if it matches) or in AND (if it does not match it).
    Moreover, an AggregationFilter ensures that the related value is returned in the AggregationResults also if the top aggregation values returned by default do not contain it.
    *
    * @param list<AggregationFilter>|null $aggregationFilters
    *
    * @return self
    */
    public function setAggregationFilters(?array $aggregationFilters) : self
    {
        $this->initialized['aggregationFilters'] = true;
        $this->aggregationFilters = $aggregationFilters;
        return $this;
    }
    /**
     * Includes the service user in result.
     *
     * @return bool
     */
    public function getIncludeServiceUser() : bool
    {
        return $this->includeServiceUser;
    }
    /**
     * Includes the service user in result.
     *
     * @param bool $includeServiceUser
     *
     * @return self
     */
    public function setIncludeServiceUser(bool $includeServiceUser) : self
    {
        $this->initialized['includeServiceUser'] = true;
        $this->includeServiceUser = $includeServiceUser;
        return $this;
    }
    /**
    * Restricts the results to users that are editable for calling user.
    If set to true, IncludeServiceUser is ignored.
    *
    * @return bool
    */
    public function getEditableOnly() : bool
    {
        return $this->editableOnly;
    }
    /**
    * Restricts the results to users that are editable for calling user.
    If set to true, IncludeServiceUser is ignored.
    *
    * @param bool $editableOnly
    *
    * @return self
    */
    public function setEditableOnly(bool $editableOnly) : self
    {
        $this->initialized['editableOnly'] = true;
        $this->editableOnly = $editableOnly;
        return $this;
    }
    /**
     * Fields and respective directions requested to sort the search results. Sorting on a not indexed field will throw an exception.
     *
     * @return list<SortInfo>|null
     */
    public function getSort() : ?array
    {
        return $this->sort;
    }
    /**
     * Fields and respective directions requested to sort the search results. Sorting on a not indexed field will throw an exception.
     *
     * @param list<SortInfo>|null $sort
     *
     * @return self
     */
    public function setSort(?array $sort) : self
    {
        $this->initialized['sort'] = true;
        $this->sort = $sort;
        return $this;
    }
    /**
     * Limits the document count of the result set.
     *
     * @return int
     */
    public function getLimit() : int
    {
        return $this->limit;
    }
    /**
     * Limits the document count of the result set.
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit) : self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
    /**
     * The token used to retrieve the next page of results. It must be null on first request and only filled with the returned pageToken to request next page of results.
     *
     * @return string|null
     */
    public function getPageToken() : ?string
    {
        return $this->pageToken;
    }
    /**
     * The token used to retrieve the next page of results. It must be null on first request and only filled with the returned pageToken to request next page of results.
     *
     * @param string|null $pageToken
     *
     * @return self
     */
    public function setPageToken(?string $pageToken) : self
    {
        $this->initialized['pageToken'] = true;
        $this->pageToken = $pageToken;
        return $this;
    }
    /**
     * Enable debug mode to get as result of the Searched additional debug information. Warning! Severely affects performance.
     *
     * @return bool
     */
    public function getDebugMode() : bool
    {
        return $this->debugMode;
    }
    /**
     * Enable debug mode to get as result of the Searched additional debug information. Warning! Severely affects performance.
     *
     * @param bool $debugMode
     *
     * @return self
     */
    public function setDebugMode(bool $debugMode) : self
    {
        $this->initialized['debugMode'] = true;
        $this->debugMode = $debugMode;
        return $this;
    }
    /**
     * List of aggregators that defines how the items should be aggregated.
     *
     * @return list<AggregatorBase>|null
     */
    public function getAggregators() : ?array
    {
        return $this->aggregators;
    }
    /**
     * List of aggregators that defines how the items should be aggregated.
     *
     * @param list<AggregatorBase>|null $aggregators
     *
     * @return self
     */
    public function setAggregators(?array $aggregators) : self
    {
        $this->initialized['aggregators'] = true;
        $this->aggregators = $aggregators;
        return $this;
    }
}