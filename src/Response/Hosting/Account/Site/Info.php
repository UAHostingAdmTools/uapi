<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * AdmTools\UApi\Response\Hosting\Account\Site
 */
class Info extends Response
{
    /**
     * @var array
     * @Type("array<string, AdmTools\UApi\Entity\Hosting\Account\Site\Info>")
     */
    protected $data;
}