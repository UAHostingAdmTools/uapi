<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site\Config\Php;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class ByDefined
 * AdmTools\UApi\Response\Hosting\Account\Site\Config\Php
 */
class ByDefined extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}