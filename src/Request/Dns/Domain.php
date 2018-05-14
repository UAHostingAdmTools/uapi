<?php

namespace AdmTools\UApi\Request\Dns;

use AdmTools\UApi\Request;
use AdmTools\UApi\Response;

/**
 * Class Create
 * AdmTools\UApi\Request\Dns
 */
class Domain extends Request
{
	/**
	 * @var string
	 */
	protected $domain;

	/**
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
	}

	/**
	 * @param string $domain
	 * @return $this
	 */
	public function setDomain($domain)
	{
		$this->domain = (string) $domain;
		return $this;
	}
}