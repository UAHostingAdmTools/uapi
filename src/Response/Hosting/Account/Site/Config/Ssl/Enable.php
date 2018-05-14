<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site\Config\Ssl;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Enable
 * AdmTools\UApi\Response\Hosting\Account\Site\Config\Ssl
 */
class Enable extends Response
{
    /**
     * @var string
     * @Type("string")
     */
    protected $data;
}