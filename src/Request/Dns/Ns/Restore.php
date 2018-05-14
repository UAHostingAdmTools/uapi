<?php

namespace AdmTools\UApi\Request\Dns\Ns;

use AdmTools\UApi\Request\Dns\Domain;
use AdmTools\UApi\Response;

/**
 * Class Restore
 * AdmTools\UApi\Request\Dns\Ns
 */
class Restore extends Domain
{
    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Ns\Restore::class;

    /**
     * @var string
     */
    protected $class = 'dns_ns';
}