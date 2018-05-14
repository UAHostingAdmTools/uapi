<?php

namespace AdmTools\UApi\Response\Dns\Record;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Create
 * AdmTools\UApi\Response\Dns\Record
 */
class Create extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}