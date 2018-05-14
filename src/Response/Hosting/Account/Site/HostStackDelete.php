<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site;

use AdmTools\UApi\Response;
use AdmTools\UApi\Entity\Hosting\Account\Site;

use JMS\Serializer\Annotation\Type;

/**
 * Class HostStackDelete
 * AdmTools\UApi\Response\Hosting\Account\Site
 */
class HostStackDelete extends Response
{
    /**
     * @var Site\HostStackDelete
     * @Type("array<string, AdmTools\UApi\Entity\Report>")
     */
    protected $data;
}