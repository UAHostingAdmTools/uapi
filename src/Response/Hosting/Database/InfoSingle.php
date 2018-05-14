<?php

namespace AdmTools\UApi\Response\Hosting\Database;

use AdmTools\UApi\Response;
use AdmTools\UApi\Entity\Hosting\Database\Info as EntityInfo;

use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * AdmTools\UApi\Response\Hosting\Database
 */
class InfoSingle extends Response
{
    /**
     * @var EntityInfo
     * @Type("AdmTools\UApi\Entity\Hosting\Database\Info")
     */
    protected $data;
}