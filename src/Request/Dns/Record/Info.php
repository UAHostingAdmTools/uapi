<?php

namespace AdmTools\UApi\Request\Dns\Record;

use AdmTools\UApi\Request\Dns\Domain;
use AdmTools\UApi\Response;

/**
 * Class Info
 * AdmTools\UApi\Request\Dns\Record
 */
class Info extends Domain
{
    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Record\Info::class;

    /**
     * @var string
     */
    protected $class = 'dns_record';
}