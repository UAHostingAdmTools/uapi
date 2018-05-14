<?php

namespace AdmTools\UApi\Response\Dns\Domain;

use AdmTools\UApi\Entity\Dns\Domain\Zone;
use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Zones
 * AdmTools\UApi\Response\Dns\Domain
 */
class Zones extends Response
{
    /**
     * @var array
     * @type("array<AdmTools\UApi\Entity\Dns\Domain\Zone>")
     */
    protected $data;
}