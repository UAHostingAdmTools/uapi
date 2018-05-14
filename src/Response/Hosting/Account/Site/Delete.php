<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Delete
 * AdmTools\UApi\Response\Hosting\Account\Site
 */
class Delete extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}