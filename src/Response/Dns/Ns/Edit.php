<?php

namespace AdmTools\UApi\Response\Dns\Ns;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Edit
 * AdmTools\UApi\Response\Dns\Ns
 */
class Edit extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}