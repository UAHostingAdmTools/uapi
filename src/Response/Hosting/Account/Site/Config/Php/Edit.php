<?php

namespace AdmTools\UApi\Response\Hosting\Account\Site\Config\Php;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Edit
 * AdmTools\UApi\Response\Hosting\Account\Site\Config\Php
 */
class Edit extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}