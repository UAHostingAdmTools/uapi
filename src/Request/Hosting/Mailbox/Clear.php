<?php

namespace AdmTools\UApi\Request\Hosting\Mailbox;

use AdmTools\UApi\Request\Hosting\Mailbox;
use AdmTools\UApi\Response;

/**
 * Class Clear
 * AdmTools\UApi\Request\Hosting\Mailbox
 */
class Clear extends Mailbox
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Mailbox\Clear::class;

    /**
     * @var string
     */
    protected $class = 'hosting_mailbox';
}