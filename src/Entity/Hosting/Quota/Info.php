<?php

namespace AdmTools\UApi\Entity\Hosting\Quota;

use AdmTools\UApi\Entity\Hosting\Quota\Resource;
use AdmTools\UApi\Entity\Hosting\Quota\Used;

use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * AdmTools\UApi\Entity\Hosting\Quota
 */
class Info
{
    /**
     * @var Resource
     * @Type("AdmTools\UApi\Entity\Hosting\Quota\Resource")
     */
    protected $limit;

    /**
     * @var Used
     * @Type("AdmTools\UApi\Entity\Hosting\Quota\Used")
     */
    protected $used;

    /**
     * @var Resource
     * @Type("AdmTools\UApi\Entity\Hosting\Quota\Resource")
     */
    protected $free;

	/**
	 * @return Resource
	 */
	public function getLimit()
	{
		return $this->limit;
	}

	/**
	 * @param Resource $limit
	 * @return $this
	 */
	public function setLimit(Resource $limit)
	{
		$this->limit = $limit;
		return $this;
	}

	/**
	 * @return Used
	 */
	public function getUsed()
	{
		return $this->used;
	}

	/**
	 * @param Used $used
	 * @return $this
	 */
	public function setUsed(Used $used)
	{
		$this->used = $used;
		return $this;
	}

	/**
	 * @return Resource
	 */
	public function getFree()
	{
		return $this->free;
	}

	/**
	 * @param Resource $free
	 * @return $this
	 */
	public function setFree(Resource $free)
	{
		$this->free = $free;
		return $this;
	}
}