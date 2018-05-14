<?php

namespace AdmTools\UApi\Request\Hosting\Ftp;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class AccessEdit
 * AdmTools\UApi\Request\Hosting\Ftp
 */
class AccessEdit extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Ftp\AccessEdit::class;

    /**
     * @var string
     */
    protected $class = 'hosting_ftp';

    /**
     * @var array
     */
    protected $ip;

    /**
     * @var int
     */
    protected $active;

    /**
     * @var int
     */
    protected $webFtp;

	/**
	 * @var int
	 */
    protected $hostingToolsEnabled;

	/**
	 * @return array
	 */
	public function getIp()
	{
		return $this->ip;
	}

	/**
	 * @param array $ip
	 * @return $this
	 */
	public function setIp(array $ip = null)
	{
		$this->ip = $ip;
		return $this;
	}

	/**
	 * @param string $ip
	 * @return $this
	 */
	public function addIp($ip)
	{
		$this->ip[] = $ip;
		return $this;
	}

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param int $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = (int) $active;
        return $this;
    }

    /**
     * @return int
     */
    public function isWebFtp()
    {
        return $this->webFtp;
    }

    /**
     * @param int $webFtp
     * @return $this
     */
    public function setWebFtp($webFtp)
    {
        $this->webFtp = (int) $webFtp;
        return $this;
    }

	/**
	 * @return int
	 */
	public function getHostingToolsEnabled()
	{
		return $this->hostingToolsEnabled;
	}

	/**
	 * @param int $hostingToolsEnabled
	 * @return $this
	 */
	public function setHostingToolsEnabled($hostingToolsEnabled)
	{
		$this->hostingToolsEnabled = (int) $hostingToolsEnabled;
		return $this;
	}
}