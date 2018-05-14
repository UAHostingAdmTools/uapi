<?php

namespace AdmTools\UApi\Response\Hosting\Quota;

use AdmTools\UApi\Response;
use AdmTools\UApi\Entity\Hosting\Quota\Ftp;

use JMS\Serializer\Annotation\Type;

/**
 * Class UsedFtp
 * AdmTools\UApi\Response\Hosting\Quota
 */
class UsedFtp extends Response
{
    /**
     * @var array
     * @Type("array<AdmTools\UApi\Entity\Hosting\Quota\Ftp>")
     */
    protected $data;
}