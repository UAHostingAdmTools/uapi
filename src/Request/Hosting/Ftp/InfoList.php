<?php

namespace AdmTools\UApi\Request\Hosting\Ftp;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class InfoList
 * AdmTools\UApi\Request\Hosting\Ftp
 */
class InfoList extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Ftp\InfoList::class;

    /**
     * @var string
     */
    protected $class = 'hosting_ftp';

	/**
	 * @var string
	 */
    protected $method = 'info';
}