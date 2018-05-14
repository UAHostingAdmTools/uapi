<?php

namespace AdmTools\UApi\Request\Hosting\Account;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class Plans
 * AdmTools\UApi\Request\Hosting\Account
 */
class Plans extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Plans::class;

    /**
     * @var string
     */
    protected $class = 'hosting_account';
}