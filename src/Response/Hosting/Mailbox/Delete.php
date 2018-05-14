<?php

namespace AdmTools\UApi\Response\Hosting\Mailbox;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Delete
 * AdmTools\UApi\Response\Hosting\Mailbox
 */
class Delete extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}