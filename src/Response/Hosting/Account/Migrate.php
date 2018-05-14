<?php

namespace AdmTools\UApi\Response\Hosting\Account;

use AdmTools\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class Migrate
 * AdmTools\UApi\Response\Hosting\Account
 */
class Migrate extends Response
{
    /**
     * @var bool
     * @Type("boolean")
     */
    protected $data;
}