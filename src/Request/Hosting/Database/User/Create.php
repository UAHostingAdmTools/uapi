<?php

namespace AdmTools\UApi\Request\Hosting\Database\User;

use AdmTools\UApi\Request\Hosting\Database;
use AdmTools\UApi\Response;

/**
 * Class Create
 * AdmTools\UApi\Request\Hosting\Database\User
 */
class Create extends Database
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Database\User\Create::class;

    /**
     * @var string
     */
    protected $class = 'hosting_database';

	/**
	 * @var string
	 */
    protected $method = 'user_create';

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var array
     */
    protected $privileges;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = (string) $name;
        return $this;
    }

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

    /**
     * @return array
     */
    public function getPrivileges()
    {
        return $this->privileges;
    }

    /**
     * @param array $privileges
     * @return $this
     */
    public function setPrivileges(array $privileges)
    {
        $this->privileges = $privileges;
        return $this;
    }
}