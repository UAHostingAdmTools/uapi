<?php

namespace AdmTools\UApi\Response\Hosting\Database\User;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Create
 * AdmTools\UApi\Response\Hosting\Database\User
 */
class Create extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}