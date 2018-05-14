<?php

namespace AdmTools\UApi\Entity\Hosting\Account\Site;

use AdmTools\UApi\Entity\Report;

use JMS\Serializer\Annotation\Type;

/**
 * Class Dns
 * AdmTools\UApi\Entity\Hosting\Account\Site
 */
class Dns extends Report
{
	/**
	 * @var int
	 * @Type("int")
	 */
	protected $id;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return $this
	 */
	public function setId($id)
	{
		$this->id = (int) $id;
		return $this;
	}
}