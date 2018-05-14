<?php

namespace AdmTools\UApi\Request\Dns\Ns;

use AdmTools\UApi\Request\Dns\Domain;
use AdmTools\UApi\Response;

/**
 * Class Info
 * AdmTools\UApi\Request\Dns\Ns
 */
class Info extends Domain
{
    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Ns\Info::class;

    /**
     * @var string
     */
    protected $class = 'dns_ns';
}