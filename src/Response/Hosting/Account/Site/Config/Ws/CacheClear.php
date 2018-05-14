<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site\Config\Ws;

use AdmTools\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class CacheClear
 * AdmTools\UApi\Response\Hosting\Account\Site\Config\Ws
 */
class CacheClear extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}