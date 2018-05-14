<?php
namespace AdmTools\UApi\Response\Hosting\Mailbox;

use AdmTools\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class Edit
 * AdmTools\UApi\Response\Hosting\Mailbox
 */
class Edit extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}