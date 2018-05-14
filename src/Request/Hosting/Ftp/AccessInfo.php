<?php

namespace AdmTools\UApi\Request\Hosting\Ftp;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class AccessInfo
 * AdmTools\UApi\Request\Hosting\Ftp
 */
class AccessInfo extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Ftp\AccessInfo::class;

    /**
     * @var string
     */
    protected $class = 'hosting_ftp';
}