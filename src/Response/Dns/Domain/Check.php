<?php

namespace AdmTools\UApi\Response\Dns\Domain;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Check
 * AdmTools\UApi\Response\Dns\Domain
 */
class Check extends Response
{
    /**
     * @var array
     * @Type("array<string, AdmTools\UApi\Entity\Dns\Domain\Check>")
     */
    protected $data;
}