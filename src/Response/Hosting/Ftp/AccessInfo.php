<?php

namespace AdmTools\UApi\Response\Hosting\Ftp;

use AdmTools\UApi\Response;
use AdmTools\UApi\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class AccessInfo
 * AdmTools\UApi\Response\Hosting\Ftp
 */
class AccessInfo extends Response
{
    /**
     * @var Entity\Hosting\Ftp\AccessInfo
     * @Type("AdmTools\UApi\Entity\Hosting\Ftp\AccessInfo")
     */
    protected $data;
}