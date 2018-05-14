<?php

namespace AdmTools\UApi\Request\Hosting\Account;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class Info
 * AdmTools\UApi\Request\Hosting\Account
 */
class Info extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Info::class;

    /**
     * @var string
     */
    protected $class = 'hosting_account';
}