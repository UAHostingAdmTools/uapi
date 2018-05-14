<?php

namespace AdmTools\UApi\Entity\Dns\Domain;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

/**
 * Class Info
 * AdmTools\UApi\Entity\Dns\Domain
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
    protected $name;

	/**
	 * @var \DateTime
	 * @Type("string")
	 * @SerializedName("valid_untill")
	 * @Accessor(getter="getValidUntil", setter="setValidUntil")
	 */
    protected $validUntil;

    /**
     * @var string
     * @Type("string")
     */
    protected $owner;

    /**
     * @var string
     * @Type("string")
     */
    protected $adminC;

    /**
     * @var string
     * @Type("string")
     */
    protected $techC;

    /**
     * @var string
     * @Type("string")
	 * @SerializedName("admtools_domain")
     */
    protected $admToolsDomain;

    /**
     * @var string
     * @Type("string")
     */
    protected $redirectStatus;

    /**
     * @var string
     * @Type("string")
     */
    protected $redirectUrl;

    /**
     * @var string
     * @Type("string")
     */
    protected $emailRedirect;

    /**
     * @var boolean
     * @Type("boolean")
     */
    protected $emailRedirectActive;

    /**
     * @var boolean
     * @Type("boolean")
     */
    protected $parkingPageEnabled;

    /**
     * @var string
     * @Type("string")
     */
    protected $parkingPageContent;

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
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param string $owner
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->owner = (string) $owner;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdminC()
    {
        return $this->adminC;
    }

    /**
     * @param string $adminC
     * @return $this
     */
    public function setAdminC($adminC)
    {
        $this->adminC = (string) $adminC;
        return $this;
    }

    /**
     * @return string
     */
    public function getTechC()
    {
        return $this->techC;
    }

    /**
     * @param string $techC
     * @return $this
     */
    public function setTechC($techC)
    {
        $this->techC = (string) $techC;
        return $this;
    }

	/**
	 * @return string
	 */
	public function getAdmToolsDomain()
	{
		return $this->admToolsDomain;
	}

	/**
	 * @param string $admToolsDomain
	 * @return $this
	 */
	public function setAdmToolsDomain($admToolsDomain)
	{
		$this->admToolsDomain = (string) $admToolsDomain;
		return $this;
	}

    /**
     * @return string
     */
    public function getRedirectStatus()
    {
        return $this->redirectStatus;
    }

    /**
     * @param string $redirectStatus
     * @return $this
     */
    public function setRedirectStatus($redirectStatus)
    {
        $this->redirectStatus = (string) $redirectStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     * @return $this
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = (string) $redirectUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailRedirect()
    {
        return $this->emailRedirect;
    }

    /**
     * @param string $emailRedirect
     * @return $this
     */
    public function setEmailRedirect($emailRedirect)
    {
        $this->emailRedirect = (string) $emailRedirect;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isEmailRedirectActive()
    {
        return $this->emailRedirectActive;
    }

    /**
     * @param boolean $emailRedirectActive
     * @return $this
     */
    public function setEmailRedirectActive($emailRedirectActive)
    {
        $this->emailRedirectActive = (boolean) $emailRedirectActive;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isParkingPageEnabled()
    {
        return $this->parkingPageEnabled;
    }

    /**
     * @param boolean $parkingPageEnabled
     * @return $this
     */
    public function setParkingPageEnabled($parkingPageEnabled)
    {
        $this->parkingPageEnabled = (boolean) $parkingPageEnabled;
        return $this;
    }

    /**
     * @return string
     */
    public function getParkingPageContent()
    {
        return $this->parkingPageContent;
    }

    /**
     * @param string $parkingPageContent
     * @return $this
     */
    public function setParkingPageContent($parkingPageContent)
    {
        $this->parkingPageContent = (string) $parkingPageContent;
        return $this;
    }
}