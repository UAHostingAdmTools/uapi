<?php

namespace AdmTools\UApi\Request\Hosting\Ftp;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class Edit
 * AdmTools\UApi\Request\Hosting\Ftp
 */
class Edit extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Ftp\Edit::class;

    /**
     * @var string
     */
    protected $class = 'hosting_ftp';

    /**
     * @var string
     */
    protected $ftp;

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
    public function getFtp()
    {
        return $this->ftp;
    }

    /**
     * @param string $ftp
     * @return $this
     */
    public function setFtp($ftp)
    {
        $this->ftp = (string) $ftp;
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
     * @return boolean
     */
    public function isReadonly()
    {
        return $this->readonly;
    }

    /**
     * @param boolean $readonly
     * @return $this
     */
    public function setReadonly($readonly)
    {
        $this->readonly = (boolean) $readonly;
        return $this;
    }
}