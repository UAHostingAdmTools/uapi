<?php

namespace AdmTools\UApi\Response\Hosting\Account;

use AdmTools\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class MigrationCancel
 * AdmTools\UApi\Response\Hosting\Account
 */
class MigrationCancel extends Response
{
    /**
     * @var bool
     * @Type("boolean")
     */
	protected $data;
}