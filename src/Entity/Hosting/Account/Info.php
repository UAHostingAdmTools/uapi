<?php

namespace AdmTools\UApi\Entity\Hosting\Account;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

/**
 * Class Info
 * AdmTools\UApi\Entity\Hosting\Account
 */
class Info
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
    protected $login;

    /**
     * @var \DateTime
     * @Type("string")
     * @SerializedName("valid_untill")
	 * @Accessor(getter="getValidUntil", setter="setValidUntil")
     */
    protected $validUntil;

    /**
     * @var Plan
     * @Type("AdmTools\UApi\Entity\Hosting\Account\Plan")
     */
    protected $plan;

    /**
     * @var Server
     * @Type("AdmTools\UApi\Entity\Hosting\Account\Server")
     */
    protected $server;

    /**
     * @var Proxy
     * @Type("AdmTools\UApi\Entity\Hosting\Account\Proxy")
     */
    protected $proxy;

    /**
     * @var Usage
     * @Type("AdmTools\UApi\Entity\Hosting\Account\Usage")
     */
    protected $usage;

    /**
     * @var array
     * @Type("array")
     */
    protected $extra;

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
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return $this
     */
    public function setLogin($login)
    {
        $this->login = (string) $login;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @param string $validUntil
     * @return $this
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = new \DateTime($validUntil);
        return $this;
    }

    /**
     * @return Plan
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param Plan $plan
     * @return $this
     */
    public function setPlan(Plan $plan)
    {
        $this->plan = $plan;
        return $this;
    }

    /**
     * @return Server
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * @param Server $server
     * @return $this
     */
    public function setServer(Server $server)
    {
        $this->server = $server;
        return $this;
    }

    /**
     * @return Proxy
     */
    public function getProxy()
    {
        return $this->proxy;
    }

    /**
     * @param Proxy $proxy
     * @return $this
     */
    public function setProxy(Proxy $proxy)
    {
        $this->proxy = $proxy;
        return $this;
    }

    /**
     * @return Usage
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * @param Usage $usage
     * @return $this
     */
    public function setUsage(Usage $usage)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * @return array
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * @param array $extra
     * @return $this
     */
    public function setExtra(array $extra)
    {
        $this->extra = $extra;
        return $this;
    }
}