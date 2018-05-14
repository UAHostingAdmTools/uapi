<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site\Config\Php;

use AdmTools\UApi\Request\Hosting\Account\Site\Config\Host;
use AdmTools\UApi\Response;

/**
 * Class ByDefault
 * AdmTools\UApi\Request\Hosting\Account\Site\Config\Php
 */
class ByDefault extends Host
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Php\ByDefault::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_php';
}