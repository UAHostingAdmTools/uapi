<?php

namespace AdmTools\UApi\Response\Hosting\Database\User;

use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Delete
 * AdmTools\UApi\Response\Hosting\Database\User
 */
class Delete extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}