<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site\Config\Ssl;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class CrtSelfSigned
 * AdmTools\UApi\Response\Hosting\Account\Site\Config\Ssl
 */
class CrtSelfSigned extends Response
{
    /**
     * @var string
     * @Type("string")
     */
    protected $data;
}