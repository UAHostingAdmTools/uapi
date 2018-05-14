<?php

namespace AdmTools\UApi\Response\Hosting\Database;

use AdmTools\UApi\Response;
use AdmTools\UApi\Entity\Hosting\Database\Create as EntityCreate;

use JMS\Serializer\Annotation\Type;

/**
 * Class Create
 * AdmTools\UApi\Response\Hosting\Database
 */
class Create extends Response
{
    /**
     * @var EntityCreate
     * @Type("AdmTools\UApi\Entity\Hosting\Database\Create")
     */
    protected $data;
}