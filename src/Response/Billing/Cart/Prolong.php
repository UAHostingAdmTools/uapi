<?php

namespace AdmTools\UApi\Response\Billing\Cart;

use AdmTools\UApi\Response;
use AdmTools\UApi\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class Prolong
 * AdmTools\UApi\Response\Billing\Cart
 */
class Prolong extends Response
{
    /**
     * @var Entity\Billing\Invoice
     * @Type("AdmTools\UApi\Entity\Billing\Invoice")
     */
    protected $data;
}