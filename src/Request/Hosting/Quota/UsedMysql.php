<?php

namespace AdmTools\UApi\Request\Hosting\Quota;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class UsedMysql
 * AdmTools\UApi\Request\Hosting\Quota
 */
class UsedMysql extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Quota\UsedMysql::class;

    /**
     * @var string
     */
    protected $class = 'hosting_quota';
}