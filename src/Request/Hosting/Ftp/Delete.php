<?php

namespace AdmTools\UApi\Request\Hosting\Ftp;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class Delete
 * AdmTools\UApi\Request\Hosting\Ftp
 */
class Delete extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Ftp\Delete::class;

    /**
     * @var string
     */
    protected $class = 'hosting_ftp';

    /**
     * @var string
     */
    protected $ftp;

    /**
     * @return string
     */
    public function getFtp()
    {
        return $this->ftp;
    }

    /**
     * @param string $ftp
     * @return $this
     */
    public function setFtp($ftp)
    {
        $this->ftp = (string) $ftp;
        return $this;
    }
}