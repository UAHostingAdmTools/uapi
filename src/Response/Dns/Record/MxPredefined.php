<?php

namespace AdmTools\UApi\Response\Dns\Record;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class MxPredefined
 * AdmTools\UApi\Response\Dns\Record
 */
class MxPredefined extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}