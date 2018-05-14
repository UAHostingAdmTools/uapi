<?php

namespace AdmTools\UApi\Entity\Hosting\Quota;

use JMS\Serializer\Annotation\Type;

/**
 * Class Resource
 * AdmTools\UApi\Entity\Hosting\Quota
 */
class Resource
{
	/**
	 * @var int
	 * @Type("int")
	 */
	protected $size;

	/**
	 * @var int
	 * @Type("int")
	 */
	protected $inode;

	/**
	 * @return int
	 */
	public function getSize()
	{
		return $this->size;
	}

	/**
	 * @param int $size
	 * @return $this
	 */
	public function setSize($size)
	{
		$this->size = (int) $size;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getInode()
	{
		return $this->inode;
	}

	/**
	 * @param int $inode
	 * @return $this
	 */
	public function setInode($inode)
	{
		$this->inode = (int) $inode;
		return $this;
	}
}