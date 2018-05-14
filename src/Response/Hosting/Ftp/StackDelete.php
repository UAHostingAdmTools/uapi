<?php

namespace AdmTools\UApi\Response\Hosting\Ftp;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class StackDelete
 * AdmTools\UApi\Response\Hosting\Ftp
 */
class StackDelete extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}