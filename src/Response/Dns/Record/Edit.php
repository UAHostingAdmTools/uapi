<?php

namespace AdmTools\UApi\Response\Dns\Record;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Edit
 * AdmTools\UApi\Response\Dns\Record
 */
class Edit extends Response
{
    /**
     * @var array
     * @Type("array<AdmTools\UApi\Entity\Report>")
     */
    protected $data;
}