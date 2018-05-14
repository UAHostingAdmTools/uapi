<?php

namespace AdmTools\UApi\Response\Hosting\Quota;

use AdmTools\UApi\Response;
use AdmTools\UApi\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class UsedMysql
 * AdmTools\UApi\Response\Hosting\Quota
 */
class UsedMysql extends Response
{
    /**
     * @var array
     * @Type("array<AdmTools\UApi\Entity\Hosting\Quota\Mysql>")
     */
    protected $data;
}