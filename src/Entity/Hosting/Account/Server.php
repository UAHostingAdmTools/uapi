<?php

namespace AdmTools\UApi\Entity\Hosting\Account;

use JMS\Serializer\Annotation\Type;

/**
 * Class Server
 * AdmTools\UApi\Entity\Hosting\Account
 */
class Server
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
     * @var string
     * @Type("string")
     */
    protected $ip;

    /**
     * @var bool
     * @Type("boolean")
     */
    protected $isUsingProxy;

    /**
     * @var bool
     * @Type("boolean")
     */
    protected $isExtraIp;

    /**
     * @var string
     * @Type("string")
     */
    protected $country;

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

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return $this
     */
    public function setIp($ip)
    {
        $this->ip = (string) $ip;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isUsingProxy()
    {
        return $this->isUsingProxy;
    }

    /**
     * @param bool $isUsingProxy
     * @return $this
     */
    public function setIsUsingProxy($isUsingProxy)
    {
        $this->isUsingProxy = (bool) $isUsingProxy;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isExtraIp()
    {
        return $this->isExtraIp;
    }

    /**
     * @param bool $isExtraIp
     * @return $this
     */
    public function setIsExtraIp($isExtraIp)
    {
        $this->isExtraIp = (bool) $isExtraIp;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = (string) $country;
        return $this;
    }
}