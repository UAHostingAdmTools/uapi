<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site\Config\Ssl;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class CrtLetsEncrypt
 * AdmTools\UApi\Response\Hosting\Account\Site\Config\Ssl
 */
class CrtLetsEncrypt extends Response
{
    /**
     * @var string
     * @Type("string")
     */
    protected $data;
}