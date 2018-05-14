<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site;

use AdmTools\UApi\Response;
use AdmTools\UApi\Entity\Hosting\Account\Site\Host;

use JMS\Serializer\Annotation\Type;

/**
 * Class HostCreate
 * AdmTools\UApi\Response\Hosting\Account\Site
 */
class HostCreate extends Response
{
    /**
     * @var Host
     * @Type("AdmTools\UApi\Entity\Hosting\Account\Site\Host")
     */
    protected $data;
}