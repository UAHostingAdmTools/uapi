<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site\Config\Php;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class ByHostCancel
 * AdmTools\UApi\Response\Hosting\Account\Site\Config\Php
 */
class ByHostCancel extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}