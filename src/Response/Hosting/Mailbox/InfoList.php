<?php

namespace AdmTools\UApi\Response\Hosting\Mailbox;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class InfoList
 * AdmTools\UApi\Response\Hosting\Mailbox
 */
class InfoList extends Response
{
    /**
     * @var array
     * @Type("array<AdmTools\UApi\Entity\Hosting\Mailbox\Info>")
     */
    protected $data;
}