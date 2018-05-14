<?php

namespace AdmTools\UApi\Response\Dns\Record;

use AdmTools\UApi\Response;
use AdmTools\UApi\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * AdmTools\UApi\Response\Dns\Record
 */
class Info extends Response
{
    /**
     * @var array
     * @Type("array <AdmTools\UApi\Entity\Dns\Record\Info>")
     */
    protected $data;
}