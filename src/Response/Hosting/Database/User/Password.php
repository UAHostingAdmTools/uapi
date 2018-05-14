<?php

namespace AdmTools\UApi\Response\Hosting\Database\User;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Password
 * AdmTools\UApi\Response\Hosting\Database\User
 */
class Password extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}