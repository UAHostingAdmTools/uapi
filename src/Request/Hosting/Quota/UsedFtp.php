<?php

namespace AdmTools\UApi\Request\Hosting\Quota;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class UsedFtp
 * AdmTools\UApi\Request\Hosting\Quota
 */
class UsedFtp extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Quota\UsedFtp::class;

    /**
     * @var string
     */
    protected $class = 'hosting_quota';
}