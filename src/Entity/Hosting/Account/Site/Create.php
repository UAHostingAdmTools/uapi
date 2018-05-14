<?php

namespace AdmTools\UApi\Entity\Hosting\Account\Site;

use JMS\Serializer\Annotation\Type;

/**
 * Class Create
 * AdmTools\UApi\Entity\Hosting\Account\Site
 */
class Create
{
    /**
     * @var Dns
     * @Type("AdmTools\UApi\Entity\Hosting\Account\Site\Dns")
     */
    protected $dns;

    /**
     * @var int
     * @Type("int")
     */
    protected $siteId;

    /**
     * @var Host
     * @Type("AdmTools\UApi\Entity\Hosting\Account\Site\Host")
     */
    protected $host;

	/**
	 * @return Dns
	 */
	public function getDns()
	{
		return $this->dns;
	}

	/**
	 * @param Dns $dns
	 * @return $this
	 */
	public function setDns(Dns $dns)
	{
		$this->dns = $dns;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getSiteId()
	{
		return $this->siteId;
	}

	/**
	 * @param int $siteId
	 * @return $this
	 */
	public function setSiteId($siteId)
	{
		$this->siteId = (int) $siteId;
		return $this;
	}

	/**
	 * @return Host
	 */
	public function getHost()
	{
		return $this->host;
	}

	/**
	 * @param Host $host
	 * @return $this
	 */
	public function setHost(Host $host)
	{
		$this->host = $host;
		return $this;
	}
}