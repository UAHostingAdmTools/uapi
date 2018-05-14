<?php

namespace AdmTools\UApi\Response\Hosting\Mailbox;

use AdmTools\UApi\Response;
use AdmTools\UApi\Entity\Hosting\Mailbox\Info;

use JMS\Serializer\Annotation\Type;

/**
 * Class InfoSingle
 * AdmTools\UApi\Response\Hosting\Mailbox
 */
class InfoSingle extends Response
{
    /**
     * @var Info
     * @Type("AdmTools\UApi\Entity\Hosting\Mailbox\Info")
     */
    protected $data;
}