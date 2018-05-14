<?php

namespace AdmTools\UApi\Request\Hosting\Account;

use AdmTools\UApi\Request\Hosting\Account;

/**
 * Class Site
 * AdmTools\UApi\Request\Hosting\Account
 */
class Site extends Account
{
	/**
	 * @var string
	 */
	protected $site;

	/**
	 * @return string
	 */
	public function getSite()
	{
		return $this->site;
	}

	/**
	 * @param string $site
	 * @return $this
	 */
	public function setSite($site)
	{
		$this->site = (string) $site;
		return $this;
	}
}