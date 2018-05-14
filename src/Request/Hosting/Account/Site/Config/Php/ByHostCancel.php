<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site\Config\Php;

use AdmTools\UApi\Request\Hosting\Account\Site\Config\Host;
use AdmTools\UApi\Response;

/**
 * Class ByHostCancel
 * AdmTools\UApi\Request\Hosting\Account\Site\Config\Php
 */
class ByHostCancel extends Host
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Php\ByHostCancel::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_php';
}