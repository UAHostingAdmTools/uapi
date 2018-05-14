<?php

namespace AdmTools\UApi\Response\Hosting\Log;

use AdmTools\UApi\Response;
use AdmTools\UApi\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class View
 * AdmTools\UApi\Response\Hosting\Log
 */
class View extends Response
{
    /**
     * @var Entity\Hosting\Log\View
     * @Type("AdmTools\UApi\Entity\Hosting\Log\View")
     */
    protected $data;
}