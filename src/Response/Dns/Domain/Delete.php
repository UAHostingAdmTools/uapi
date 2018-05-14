<?php
namespace AdmTools\UApi\Response\Dns\Domain;

use AdmTools\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class Delete
 * AdmTools\UApi\Response\Dns\Domain
 */
class Delete extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}