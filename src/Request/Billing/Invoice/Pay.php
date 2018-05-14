<?php

namespace AdmTools\UApi\Request\Billing\Invoice;

use AdmTools\UApi\Request\Billing\Invoice;
use AdmTools\UApi\Response;

/**
 * Class Pay
 * AdmTools\UApi\Request\Billing\Invoice
 */
class Pay extends Invoice
{
    /**
     * @var string
     */
    protected $responseClass = Response\Billing\Invoice\Pay::class;

    /**
     * @var string
     */
    protected $class = 'billing_invoice';
}