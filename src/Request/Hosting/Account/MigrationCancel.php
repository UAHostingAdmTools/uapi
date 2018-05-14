<?php

namespace AdmTools\UApi\Request\Hosting\Account;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class MigrationCancel
 * AdmTools\UApi\Request\Hosting\Account
 */
class MigrationCancel extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\MigrationCancel::class;

    /**
     * @var string
     */
    protected $class = 'hosting_account';
}