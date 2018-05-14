<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site\Config\Ssl;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Disable
 * AdmTools\UApi\Response\Hosting\Account\Site\Config\Ssl
 */
class Disable extends Response
{
    /**
     * @var string
     * @Type("string")
     */
    protected $data;
}