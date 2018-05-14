<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site\Config\Ws;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Edit
 * AdmTools\UApi\Response\Hosting\Account\Site\Config\Ws
 */
class Edit extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}