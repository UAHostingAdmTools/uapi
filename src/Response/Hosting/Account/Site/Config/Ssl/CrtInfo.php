<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site\Config\Ssl;

use AdmTools\UApi\Response;
use AdmTools\UApi\Entity\Hosting\Account\Site\Config;

use JMS\Serializer\Annotation\Type;

/**
 * Class CrtInfo
 * AdmTools\UApi\Response\Hosting\Account\Site\Config\Ssl
 */
class CrtInfo extends Response
{
    /**
     * @var Config\Ssl\CrtInfo
     * @Type("AdmTools\UApi\Entity\Hosting\Account\Site\Config\Ssl\CrtInfo")
     */
    protected $data;
}