<?php

namespace AdmTools\UApi\Request\Hosting\Ftp;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class Create
 * AdmTools\UApi\Request\Hosting\Ftp
 */
class Create extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Ftp\Create::class;

    /**
     * @var string
     */
    protected $class = 'hosting_ftp';

    /**
     * @var string
     */
    protected $login;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $homedir;

    /**
     * @var boolean
     */
    protected $readonly;

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return $this
     */
    public function setLogin($login)
    {
        $this->login = (string) $login;
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
     * @return string
     */
    public function getHomedir()
    {
        return $this->homedir;
    }

    /**
     * @param string $homedir
     * @return $this
     */
    public function setHomedir($homedir)
    {
        $this->homedir = (string) $homedir;
        return $this;
    }

    /**
     * @return bool
     */
    public function isReadonly()
    {
        return $this->readonly;
    }

    /**
     * @param bool $readonly
     * @return $this
     */
    public function setReadonly($readonly)
    {
        $this->readonly = (boolean) $readonly;
        return $this;
    }
}