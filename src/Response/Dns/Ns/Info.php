<?php

namespace AdmTools\UApi\Response\Dns\Ns;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * AdmTools\UApi\Response\Dns\Ns
 */
class Info extends Response
{
    /**
     * @var array
     * @Type("array")
     */
    protected $data;
}