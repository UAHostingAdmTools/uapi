<?php

namespace AdmTools\UApi\Entity\Hosting\Quota;

use JMS\Serializer\Annotation\Type;

/**
 * Class Resource
 * AdmTools\UApi\Entity\Hosting\Quota
 */
class Used extends Resource
{
	/**
	 * @var int
	 * @Type("int")
	 */
	protected $ftp;

	/**
	 * @var int
	 * @Type("int")
	 */
	protected $mysql;

	/**
	 * @return int
	 */
	public function getFtp()
	{
		return $this->ftp;
	}

	/**
	 * @param int $ftp
	 * @return $this
	 */
	public function setFtp($ftp)
	{
		$this->ftp = (int) $ftp;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getMysql()
	{
		return $this->mysql;
	}

	/**
	 * @param int $mysql
	 * @return $this
	 */
	public function setMysql($mysql)
	{
		$this->mysql = (int) $mysql;
		return $this;
	}
}