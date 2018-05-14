<?php

namespace AdmTools\UApi\Request\Hosting\Quota;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class Info
 * AdmTools\UApi\Request\Hosting\Quota
 */
class Info extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Quota\Info::class;

    /**
     * @var string
     */
    protected $class = 'hosting_quota';
}