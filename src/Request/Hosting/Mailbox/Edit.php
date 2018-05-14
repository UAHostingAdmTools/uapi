<?php

namespace AdmTools\UApi\Request\Hosting\Mailbox;

use AdmTools\UApi\Response;

/**
 * Class Edit
 * AdmTools\UApi\Request\Hosting\Mailbox
 */
class Edit extends Create
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Mailbox\Edit::class;
}