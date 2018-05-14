<?php

namespace AdmTools\UApi\Request\Billing\Invoice;

use AdmTools\UApi\Request\Billing\Invoice;
use AdmTools\UApi\Response;

/**
 * Class Info
 * AdmTools\UApi\Request\Billing\Invoice
 */
class Info extends Invoice
{
    /**
     * @var string
     */
    protected $responseClass = Response\Billing\Invoice\Info::class;

    /**
     * @var string
     */
    protected $class = 'billing_invoice';
}