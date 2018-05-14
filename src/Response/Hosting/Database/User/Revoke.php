<?php

namespace AdmTools\UApi\Response\Hosting\Database\User;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Revoke
 * AdmTools\UApi\Response\Hosting\Database\User
 */
class Revoke extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}