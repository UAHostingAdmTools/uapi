<?php

namespace AdmTools\UApi\Response\Hosting\Log;

use AdmTools\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class Dates
 * AdmTools\UApi\Response\Hosting\Log
 */
class Dates extends Response
{
    /**
     * @var array
     * @Type("array")
     */
    protected $data;
}