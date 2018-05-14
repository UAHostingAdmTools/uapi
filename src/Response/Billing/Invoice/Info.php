<?php
namespace AdmTools\UApi\Response\Billing\Invoice;

use AdmTools\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * AdmTools\UApi\Response\Billing\Invoice
 */
class Info extends Response
{
    /**
     * @var array
     * @Type("array<AdmTools\UApi\Entity\Billing\Invoice>")
     */
    protected $data;
}