<?php

namespace AdmTools\UApi\Response\Dns\Ns;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Delete
 * AdmTools\UApi\Response\Dns\Ns
 */
class Restore extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}