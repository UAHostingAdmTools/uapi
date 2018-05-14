<?php

namespace AdmTools\UApi\Request\Hosting\Mailbox;

use AdmTools\UApi\Request\Hosting\Mailbox;
use AdmTools\UApi\Response;

/**
 * Class Delete
 * AdmTools\UApi\Request\Hosting\Mailbox
 */
class Delete extends Mailbox
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Mailbox\Delete::class;

    /**
     * @var string
     */
    protected $class = 'hosting_mailbox';
}