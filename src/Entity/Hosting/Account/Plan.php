<?php

namespace AdmTools\UApi\Entity\Hosting\Account;

use JMS\Serializer\Annotation\Type;

/**
 * Class Plan
 * AdmTools\UApi\Entity\Hosting\Account
 */
class Plan
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
    protected $nameBilling;

    /**
     * @var Quota
     * @Type("AdmTools\UApi\Entity\Hosting\Account\Quota")
     */
    protected $quota;

    /**
     * @var string
     * @Type("string")
     */
    protected $currency;

    /**
     * @var array
     * @Type("array")
     */
    protected $price;

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
    public function getNameBilling()
    {
        return $this->nameBilling;
    }

    /**
     * @param string $nameBilling
     * @return $this
     */
    public function setNameBilling($nameBilling)
    {
        $this->nameBilling = (string) $nameBilling;
        return $this;
    }

    /**
     * @return Quota
     */
    public function getQuota()
    {
        return $this->quota;
    }

    /**
     * @param Quota $quota
     * @return $this
     */
    public function setQuota(Quota $quota)
    {
        $this->quota = $quota;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = (string) $currency;
        return $this;
    }

    /**
     * @return array
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param array $price
     * @return $this
     */
    public function setPrice(array $price)
    {
        $this->price = $price;
        return $this;
    }
}