<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site\Config\Ws;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class ByDefault
 * AdmTools\UApi\Response\Hosting\Account\Site\Config\Ws
 */
class ByDefault extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}