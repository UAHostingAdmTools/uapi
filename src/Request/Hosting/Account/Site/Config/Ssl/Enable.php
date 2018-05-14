<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site\Config\Ssl;

use AdmTools\UApi\Request\Hosting\Account\Site\Config\Host;
use AdmTools\UApi\Response;

/**
 * Class Enable
 * AdmTools\UApi\Request\Hosting\Account\Site\Config\Ssl
 */
class Enable extends Host
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Ssl\Enable::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_ssl';
}