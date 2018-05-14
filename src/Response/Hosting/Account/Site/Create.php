<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Create
 * AdmTools\UApi\Response\Hosting\Account\Site
 */
class Create extends Response
{
    /**
     * @var Create
     * @Type("AdmTools\UApi\Entity\Hosting\Account\Site\Create")
     */
    protected $data;
}