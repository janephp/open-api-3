<?php

namespace PicturePark\API\Model;

class QueryDebugInformation
{
    /**
     * 
     *
     * @var string|null
     */
    protected $general;
    /**
     * 
     *
     * @var string|null
     */
    protected $auditTrail;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $request;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $response;
    /**
     * 
     *
     * @return string|null
     */
    public function getGeneral() : ?string
    {
        return $this->general;
    }
    /**
     * 
     *
     * @param string|null $general
     *
     * @return self
     */
    public function setGeneral(?string $general) : self
    {
        $this->general = $general;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuditTrail() : ?string
    {
        return $this->auditTrail;
    }
    /**
     * 
     *
     * @param string|null $auditTrail
     *
     * @return self
     */
    public function setAuditTrail(?string $auditTrail) : self
    {
        $this->auditTrail = $auditTrail;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * 
     *
     * @param mixed $request
     *
     * @return self
     */
    public function setRequest($request) : self
    {
        $this->request = $request;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param mixed $response
     *
     * @return self
     */
    public function setResponse($response) : self
    {
        $this->response = $response;
        return $this;
    }
}