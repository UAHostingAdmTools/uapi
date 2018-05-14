<?php

namespace AdmTools\UApi\Response\Hosting\Database;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Delete
 * AdmTools\UApi\Response\Hosting\Database
 */
class Delete extends Response
{
    /**
     * @var array
     * @Type("array")
     */
    protected $data;
}