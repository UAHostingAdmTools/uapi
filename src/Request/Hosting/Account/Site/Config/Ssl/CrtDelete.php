<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site\Config\Ssl;

use AdmTools\UApi\Request\Hosting\Account\Site\Config\Host;
use AdmTools\UApi\Response;

/**
 * Class CrtDelete
 * AdmTools\UApi\Request\Hosting\Account\Site\Config\Ssl
 */
class CrtDelete extends Host
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Ssl\CrtDelete::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_ssl';
}