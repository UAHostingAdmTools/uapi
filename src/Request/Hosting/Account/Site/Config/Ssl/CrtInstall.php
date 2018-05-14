<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site\Config\Ssl;

use AdmTools\UApi\Request\Hosting\Account\Site\Config\Host;
use AdmTools\UApi\Response;

/**
 * Class CrtInstall
 * AdmTools\UApi\Request\Hosting\Account\Site\Config\Ssl
 */
class CrtInstall extends Host
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Ssl\CrtInstall::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_ssl';

    /**
     * @var string
     */
    protected $crt;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var bool
     */
    protected $addIntermediateCertificates;

    /**
     * @return string
     */
    public function getCrt()
    {
        return $this->crt;
    }

    /**
     * @param string $crt
     * @return $this
     */
    public function setCrt($crt)
    {
        $this->crt = (string) $crt;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = (string) $key;
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
     * @return bool
     */
    public function isAddIntermediateCertificates()
    {
        return $this->addIntermediateCertificates;
    }

    /**
     * @param bool $addIntermediateCertificates
     * @return $this
     */
    public function setAddIntermediateCertificates($addIntermediateCertificates)
    {
        $this->addIntermediateCertificates = (bool) $addIntermediateCertificates;
        return $this;
    }
}