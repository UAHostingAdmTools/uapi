<?php

namespace AdmTools\UApi\Entity\Dns\Domain;

use JMS\Serializer\Annotation\Type;

/**
 * Class Zone
 * AdmTools\UApi\Entity\Dns\Domain
 */
class ZoneClass
{
	/**
	 * @var int
	 * @Type("int")
	 */
	protected $id;
	/**
	 * @var string
	 * @Type("string")
	 */
	protected $name;

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