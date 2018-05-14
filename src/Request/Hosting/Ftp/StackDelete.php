<?php

namespace AdmTools\UApi\Request\Hosting\Ftp;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class StackDelete
 * AdmTools\UApi\Request\Hosting\Ftp
 */
class StackDelete extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Ftp\StackDelete::class;

    /**
     * @var string
     */
    protected $class = 'hosting_ftp';

    /**
     * @var array
     */
    protected $stack;

    /**
     * @return array
     */
    public function getStack()
    {
        return $this->stack;
    }

    /**
     * @param array $stack
     * @return $this
     */
    public function setStack(array $stack)
    {
        $this->stack = $stack;
        return $this;
    }
}