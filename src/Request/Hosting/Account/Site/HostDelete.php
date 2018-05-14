<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class HostDelete
 * AdmTools\UApi\Request\Hosting\Account\Site
 */
class HostDelete extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\HostDelete::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site';

    /**
     * @var string
     */
    protected $host;

    /**
     * @var int
     */
    protected $file = self::DEFAULT_DELETE_FILES;

    /**
     * @var int
     */
    protected $mailbox = self::DEFAULT_DELETE_MAILBOXES;

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $host
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = (string) $host;
        return $this;
    }

    /**
     * @return $this
     */
    public function deleteFiles()
    {
        $this->file = 1;
        return $this;
    }

    /**
     * @return $this
     */
    public function deleteMailboxes()
    {
        $this->mailbox = 1;
        return $this;
    }
}