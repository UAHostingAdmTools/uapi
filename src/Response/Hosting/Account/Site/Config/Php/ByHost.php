<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site\Config\Php;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class ByHost
 * AdmTools\UApi\Response\Hosting\Account\Site\Config\Php
 */
class ByHost extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}