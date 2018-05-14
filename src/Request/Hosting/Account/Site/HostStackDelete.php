<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class HostStackDelete
 * AdmTools\UApi\Request\Hosting\Account\Site
 */
class HostStackDelete extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\HostStackDelete::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site';

    /**
     * @var array
     */
    protected $stack;

    /**
     * @var int
     */
    protected $file = self::DEFAULT_DELETE_FILES;

    /**
     * @var int
     */
    protected $mailbox = self::DEFAULT_DELETE_MAILBOXES;

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

    /**
     * @param $host
     * @return $this
     */
    public function addHost($host)
    {
        $this->stack[] = $host;
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