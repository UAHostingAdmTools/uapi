<?php

namespace AdmTools\UApi\Response\Hosting\Account;

use AdmTools\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * AdmTools\UApi\Response\Hosting\Account
 */
class Info extends Response
{
    /**
     * @var array
     * @Type("array<AdmTools\UApi\Entity\Hosting\Account\Info>")
     */
    protected $data;
}