<?php

namespace AdmTools\UApi\Request\Hosting\Database\User;

use AdmTools\UApi\Request\Hosting\Database\User;
use AdmTools\UApi\Response;

/**
 * Class Revoke
 * AdmTools\UApi\Request\Hosting\Database\User
 */
class Revoke extends User
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Database\User\Revoke::class;

    /**
     * @var string
     */
    protected $class = 'hosting_database';

	/**
	 * @var string
	 */
    protected $method = 'user_revoke';
}