<?php

namespace AdmTools\UApi\Request\Hosting;

/**
 * Class Database
 * AdmTools\UApi\Request\Hosting
 */
class Database extends Account
{
	/**
	 * @var string
	 */
	protected $database;

	/**
	 * @return string
	 */
	public function getDatabase()
	{
		return $this->database;
	}

	/**
	 * @param string $database
	 * @return $this
	 */
	public function setDatabase($database)
	{
		$this->database = (string) $database;
		return $this;
	}
}