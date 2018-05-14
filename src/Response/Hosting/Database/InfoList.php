<?php

namespace AdmTools\UApi\Response\Hosting\Database;

use AdmTools\UApi\Response;
use AdmTools\UApi\Entity\Hosting\Database\Info as EntityInfo;

use JMS\Serializer\Annotation\Type;

/**
 * Class InfoList
 * AdmTools\UApi\Response\Hosting\Database
 */
class InfoList extends Response
{
    /**
     * @var array
     * @Type("array<AdmTools\UApi\Entity\Hosting\Database\Info>")
     */
    protected $data;
}