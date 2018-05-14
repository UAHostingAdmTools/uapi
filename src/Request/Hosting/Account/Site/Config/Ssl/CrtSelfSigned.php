<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site\Config\Ssl;

use AdmTools\UApi\Request\Hosting\Account\Site\Config\Host;
use AdmTools\UApi\Response;

/**
 * Class CrtSelfSigned
 * AdmTools\UApi\Request\Hosting\Account\Site\Config\Ssl
 */
class CrtSelfSigned extends Host
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Ssl\CrtSelfSigned::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_ssl';

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $province;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $organization;

    /**
     * @var string
     */
    protected $organizationUnit;

    /**
     * @var string
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
     * @param string $organizationUntil
     * @return $this
     */
    public function setOrganizationUnit($organizationUntil)
    {
        $this->organizationUnit = (string) $organizationUntil;
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