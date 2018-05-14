<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site\Config\Php;

use AdmTools\UApi\Request\Hosting\Account\Site\Config\Host;
use AdmTools\UApi\Response;

/**
 * Class ByHost
 * AdmTools\UApi\Request\Hosting\Account\Site\Config\Php
 */
class ByHost extends Host
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Php\ByHost::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_php';

    /**
     * @var string
     */
    protected $source;

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = (string) $source;
        return $this;
    }
}