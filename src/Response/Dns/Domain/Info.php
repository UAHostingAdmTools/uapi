<?php

namespace AdmTools\UApi\Response\Dns\Domain;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * AdmTools\UApi\Response\Dns\Domain
 */
class Info extends Response
{
    /**
     * @var array
     * @Type("array<string, AdmTools\UApi\Entity\Dns\Domain\Info>")
     */
    protected $data;
}