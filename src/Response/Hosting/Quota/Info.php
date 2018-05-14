<?php

namespace AdmTools\UApi\Response\Hosting\Quota;

use AdmTools\UApi\Response;
use AdmTools\UApi\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * AdmTools\UApi\Response\Hosting\Quota
 */
class Info extends Response
{
    /**
     * @var Entity\Hosting\Quota\Info
     * @Type("AdmTools\UApi\Entity\Hosting\Quota\Info")
     */
    protected $data;
}