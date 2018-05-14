<?php

namespace AdmTools\UApi\Request\Hosting\Database\User;

use AdmTools\UApi\Request\Hosting\Database\User;
use AdmTools\UApi\Response;

/**
 * Class Delete
 * AdmTools\UApi\Request\Hosting\Database\User
 */
class Delete extends User
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Database\User\Delete::class;

    /**
     * @var string
     */
    protected $class = 'hosting_database';

	/**
	 * @var string
	 */
    protected $method = 'user_delete';
}