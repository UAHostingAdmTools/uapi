<?php

namespace AdmTools\UApi\Request\Hosting\Log;

use AdmTools\UApi\Response;

/**
 * Class Dates
 * AdmTools\UApi\Request\Hosting\Log
 */
class Dates extends Log
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Log\Dates::class;

    /**
     * @var string
     */
    protected $class = 'hosting_log';
}