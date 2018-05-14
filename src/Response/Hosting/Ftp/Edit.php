<?php

namespace AdmTools\UApi\Response\Hosting\Ftp;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Edit
 * AdmTools\UApi\Response\Hosting\Ftp
 */
class Edit extends Response
{
    /**
     * @var string
     * @Type("string")
     */
    protected $data;
}