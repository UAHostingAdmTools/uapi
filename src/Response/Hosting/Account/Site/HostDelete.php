<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class HostDelete
 * AdmTools\UApi\Response\Hosting\Account\Site
 */
class HostDelete extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}