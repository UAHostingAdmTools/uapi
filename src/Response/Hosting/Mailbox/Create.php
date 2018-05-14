<?php

namespace AdmTools\UApi\Response\Hosting\Mailbox;

use AdmTools\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class Create
 * AdmTools\UApi\Response\Hosting\Mailbox
 */
class Create extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}