<?php

namespace AdmTools\UApi\Request\Dns\Domain;

use AdmTools\UApi\Request\Dns\Domain;
use AdmTools\UApi\Response;

/**
 * Class Delete
 * AdmTools\UApi\Request\Dns\Domain
 */
class Delete extends Domain
{
    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Domain\Delete::class;

    /**
     * @var string
     */
    protected $class = 'dns_domain';
}