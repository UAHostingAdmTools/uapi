<?php

namespace AdmTools\UApi\Response\Hosting\Ftp;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class AccessEdit
 * AdmTools\UApi\Response\Hosting\Ftp
 */
class AccessEdit extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}