<?php

namespace AdmTools\UApi\Response\Hosting\Database\User;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Privileges
 * AdmTools\UApi\Response\Hosting\Database\User
 */
class Privileges extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}