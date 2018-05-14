<?php

namespace AdmTools\UApi\Response\Hosting\Ftp;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class InfoList
 * AdmTools\UApi\Response\Hosting\Ftp
 */
class InfoList extends Response
{
    /**
     * @var array
     * @Type("array<AdmTools\UApi\Entity\Hosting\Ftp\Info>")
     */
    protected $data;
}