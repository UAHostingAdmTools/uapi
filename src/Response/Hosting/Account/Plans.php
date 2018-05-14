<?php

namespace AdmTools\UApi\Response\Hosting\Account;

use AdmTools\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class Plans
 * AdmTools\UApi\Response\Hosting\Account
 */
class Plans extends Response
{
    /**
     * @var array
     * @Type("array<string, AdmTools\UApi\Entity\Hosting\Account\Plan>")
     */
    protected $data;
}