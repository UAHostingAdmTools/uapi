<?php

namespace AdmTools\UApi\Entity\Hosting\Quota;

use JMS\Serializer\Annotation\Type;

/**
 * Class Ftp
 * AdmTools\UApi\Entity\Hosting\Quota
 */
class Ftp extends Resource
{
	/**
	 * @var string
	 * @Type("string")
	 */
	protected $name;

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return $this
	 */
	public function setName($name)
	{
		$this->name = (string) $name;
		return $this;
	}
}