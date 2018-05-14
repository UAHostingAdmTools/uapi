<?php

namespace AdmTools\UApi\Response\Hosting\Ftp;

use AdmTools\UApi\Response;
use AdmTools\UApi\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class InfoSingle
 * AdmTools\UApi\Response\Hosting\Ftp
 */
class InfoSingle extends Response
{
    /**
     * @var Entity\Hosting\Ftp\Info
     * @Type("AdmTools\UApi\Entity\Hosting\Ftp\Info")
     */
    protected $data;
}