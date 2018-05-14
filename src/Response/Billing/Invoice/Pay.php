<?php

namespace AdmTools\UApi\Response\Billing\Invoice;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Pay
 * AdmTools\UApi\Response\Billing\Invoice
 */
class Pay extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}