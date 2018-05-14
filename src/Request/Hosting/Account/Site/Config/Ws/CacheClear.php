<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site\Config\Ws;

use AdmTools\UApi\Request\Hosting\Account\Site\Config\Host;
use AdmTools\UApi\Response;

/**
 * Class CacheClear
 * AdmTools\UApi\Request\Hosting\Account\Site\Config\Ws
 */
class CacheClear extends Host
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Ws\CacheClear::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_ws';
}