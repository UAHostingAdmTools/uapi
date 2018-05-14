<?php

namespace AdmTools\UApi\Response\Billing\Cart;

use AdmTools\UApi\Response;
use AdmTools\UApi\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class Order
 * AdmTools\UApi\Response\Billing\Cart
 */
class Order extends Response
{
    /**
     * @var Entity\Billing\Invoice
     * @Type("AdmTools\UApi\Entity\Billing\Invoice")
     */
    protected $data;
}