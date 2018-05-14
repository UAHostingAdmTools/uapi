<?php

namespace AdmTools\UApi\Request\Dns\Record;

use AdmTools\UApi\Request\Dns\Domain;
use AdmTools\UApi\Response;

/**
 * Class Restore
 * AdmTools\UApi\Request\Dns\Record
 */
class Restore extends Domain
{
    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Record\Restore::class;

    /**
     * @var string
     */
    protected $class = 'dns_record';
}