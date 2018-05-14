<?php

namespace AdmTools\UApi\Response\Hosting\Mailbox;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Clear
 * AdmTools\UApi\Response\Hosting\Mailbox
 */
class Clear extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}