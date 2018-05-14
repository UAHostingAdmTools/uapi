<?php

namespace AdmTools\UApi\Request\Hosting\Database\User;

use AdmTools\UApi\Request\Hosting\Database\User;
use AdmTools\UApi\Response;

/**
 * Class Password
 * AdmTools\UApi\Request\Hosting\Database\User
 */
class Password extends User
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Database\User\Password::class;

    /**
     * @var string
     */
    protected $class = 'hosting_database';

	/**
	 * @var string
	 */
    protected $method = 'user_password';

    /**
     * @var string
     */
    protected $password;

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = (string) $password;
        return $this;
    }
}