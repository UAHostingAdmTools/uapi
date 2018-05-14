<?php

namespace AdmTools\UApi\Request\Hosting\Mailbox;

use AdmTools\UApi\Request\Hosting\Mailbox;
use AdmTools\UApi\Response;

/**
 * Class Info
 * AdmTools\UApi\Request\Hosting\Mailbox
 */
class InfoSingle extends Mailbox
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Mailbox\InfoSingle::class;

    /**
     * @var string
     */
    protected $class = 'hosting_mailbox';

	/**
	 * @var string
	 */
	protected $method = 'info';
}