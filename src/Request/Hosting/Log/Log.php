<?php

namespace AdmTools\UApi\Request\Hosting\Log;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class Log
 * AdmTools\UApi\Request\Hosting\Log
 */
class Log extends Account
{
	const TYPE_APACHE = 'apache';
	const TYPE_NGINX = 'nginx';
	const TYPE_FTP = 'ftp';
	const TYPE_CRONTAB = 'crontab';
	const TYPE_MAIL = 'mail';

	/**
	 * @var string
	 */
	protected $type;

	/**
	 * @var string
	 */
	protected $host;

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param string $type
	 * @return $this
	 */
	public function setType($type)
	{
		$this->type = (string) $type;
		return $this;
	}

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
}