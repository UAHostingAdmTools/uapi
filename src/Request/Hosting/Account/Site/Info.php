<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site;

use AdmTools\UApi\Request\Hosting\Account\Site;
use AdmTools\UApi\Response;

/**
 * Class Info
 * AdmTools\UApi\Request\Hosting\Account\Site
 */
class Info extends Site
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Info::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site';
}