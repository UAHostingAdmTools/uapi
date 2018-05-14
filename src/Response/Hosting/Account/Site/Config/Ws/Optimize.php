<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site\Config\Ws;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Optimize
 * AdmTools\UApi\Response\Hosting\Account\Site\Config\Ws
 */
class Optimize extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}