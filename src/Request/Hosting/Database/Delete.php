<?php

namespace AdmTools\UApi\Request\Hosting\Database;

use AdmTools\UApi\Request\Hosting\Database;
use AdmTools\UApi\Response;

/**
 * Class DatabaseDelete
 * AdmTools\UApi\Request\Hosting\Database
 */
class Delete extends Database
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Database\Delete::class;

    /**
     * @var string
     */
    protected $class = 'hosting_database';

	/**
	 * @var string
	 */
    protected $method = 'database_delete';
}