<?php

namespace AdmTools\UApi\Response\Hosting\Ftp;

use AdmTools\UApi\Entity\Hosting\Ftp\Create as CreateEntity;
use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Create
 * AdmTools\UApi\Response\Hosting\Ftp
 */
class Create extends Response
{
    /**
     * @var CreateEntity
     * @Type("AdmTools\UApi\Entity\Hosting\Ftp\Create")
     */
    protected $data;
}