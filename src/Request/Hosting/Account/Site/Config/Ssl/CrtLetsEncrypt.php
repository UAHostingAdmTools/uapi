<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site\Config\Ssl;

use AdmTools\UApi\Request\Hosting\Account\Site\Config\Host;
use AdmTools\UApi\Response;

/**
 * Class CrtLetsEncrypt
 * AdmTools\UApi\Request\Hosting\Account\Site\Config\Ssl
 */
class CrtLetsEncrypt extends Host
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Ssl\CrtLetsEncrypt::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_ssl';
}