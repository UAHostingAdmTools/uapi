<?php

namespace AdmTools\UApi\Response\Hosting\Account;

use AdmTools\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class PlanChange
 * AdmTools\UApi\Response\Hosting\Account
 */
class PlanChange extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}