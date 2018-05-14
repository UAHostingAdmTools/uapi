<?php

namespace AdmTools\UApi\Request\Hosting\Database;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class Info
 * AdmTools\UApi\Request\Hosting\Database
 */
class InfoList extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Database\InfoList::class;

    /**
     * @var string
     */
    protected $class = 'hosting_database';

	/**
	 * @var string
	 */
	protected $method = 'info';
}