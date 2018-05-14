<?php

namespace AdmTools\UApi\Request\Hosting\Database;

use AdmTools\UApi\Request\Hosting\Database;
use AdmTools\UApi\Response;

/**
 * Class Info
 * AdmTools\UApi\Request\Hosting\Database
 */
class InfoSingle extends Database
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Database\InfoSingle::class;

    /**
     * @var string
     */
    protected $class = 'hosting_database';

	/**
	 * @var string
	 */
    protected $method = 'info';
}