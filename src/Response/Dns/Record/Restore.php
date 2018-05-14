<?php

namespace AdmTools\UApi\Response\Dns\Record;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Restore
 * AdmTools\UApi\Response\Dns\Record
 */
class Restore extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}