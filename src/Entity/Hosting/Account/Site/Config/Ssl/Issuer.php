<?php

namespace AdmTools\UApi\Entity\Hosting\Account\Site\Config\Ssl;

use JMS\Serializer\Annotation\Type;

/**
 * Class Issuer
 * AdmTools\UApi\Entity\Hosting\Account\Site\Config\Ssl
 */
class Issuer
{
    /**
     * @var string
     * @Type("string")
     */
    protected $country;

    /**
     * @var string
     * @Type("string")
     */
    protected $province;

    /**
     * @var string
     * @Type("string")
     */
    protected $city;

    /**
     * @var string
     * @Type("string")
     */
    protected $organization;

    /**
     * @var string
     * @Type("string")
     */
    protected $organizationUnit;

    /**
     * @var string
     * @Type("string")
     */
    protected $commonName;

    /**
     * @var string
     * @Type("string")
     */
    protected $email;

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

    /**
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param string $province
     * @return $this
     */
    public function setProvince($province)
    {
        $this->province = (string) $province;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = (string) $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param string $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = (string) $organization;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrganizationUnit()
    {
        return $this->organizationUnit;
    }

    /**
     * @param string $organizationUnit
     * @return $this
     */
    public function setOrganizationUnit($organizationUnit)
    {
        $this->organizationUnit = (string) $organizationUnit;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommonName()
    {
        return $this->commonName;
    }

    /**
     * @param string $commonName
     * @return $this
     */
    public function setCommonName($commonName)
    {
        $this->commonName = (string) $commonName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = (string) $email;
        return $this;
    }
}