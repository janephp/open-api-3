<?php

namespace CreditSafe\API\Exception;

class CompanyEventsBadRequestException extends \RuntimeException implements ClientException
{
    private $badRequestError;
    public function __construct(\CreditSafe\API\Model\BadRequestError $badRequestError)
    {
        parent::__construct('Bad Request - specific error information is provided in the `details` field. </br> Most common causes of this response are incorrect, missing or unexpected parameters in the request e.g. missing the `Authorization Header`, invalid search criteria or providing an invalid `connectId` for a report).', 400);
        $this->badRequestError = $badRequestError;
    }
    public function getBadRequestError()
    {
        return $this->badRequestError;
    }
}