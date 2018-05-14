<?php

namespace AdmTools\UApi\Entity\Hosting\Account\Site\Config\Ssl;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class CrtInfo
 * AdmTools\UApi\Entity\Hosting\Account\Site\Config\Ssl
 */
class CrtInfo
{
    /**
     * @var string
     * @Type("string")
     */
    protected $name;

    /**
     * @var array
     * @Type("array")
     */
    protected $protects;

    /**
     * @var Subject
     * @Type("AdmTools\UApi\Entity\Hosting\Account\Site\Config\Ssl\Subject")
     */
    protected $subject;

    /**
     * @var Issuer
     * @Type("AdmTools\UApi\Entity\Hosting\Account\Site\Config\Ssl\Issuer")
     */
    protected $issuer;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("valid_from")
     */
    protected $validFrom;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("valid_to")
     */
    protected $validTo;

    /**
     * @var string
     * @Type("string")
     */
    protected $ev;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("ev_provider")
     */
    protected $evProvider;

    /**
     * @var string
     * @Type("string")
     */
    protected $crt;

    /**
     * @var string
     * @Type("string")
     */
    protected $key;

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
     * @return array
     */
    public function getProtects()
    {
        return $this->protects;
    }

    /**
     * @param array $protects
     * @return $this
     */
    public function setProtects(array $protects)
    {
        $this->protects = $protects;
        return $this;
    }

    /**
     * @return Subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param Subject $subject
     * @return $this
     */
    public function setSubject(Subject $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return Issuer
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * @param Issuer $issuer
     * @return $this
     */
    public function setIssuer(Issuer $issuer)
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param string $validFrom
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = (string) $validFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @param string $validTo
     * @return $this
     */
    public function setValidTo($validTo)
    {
        $this->validTo = (string) $validTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getEv()
    {
        return $this->ev;
    }

    /**
     * @param string $ev
     * @return $this
     */
    public function setEv($ev)
    {
        $this->ev = (string) $ev;
        return $this;
    }

    /**
     * @return string
     */
    public function getEvProvider()
    {
        return $this->evProvider;
    }

    /**
     * @param string $evProvider
     * @return $this
     */
    public function setEvProvider($evProvider)
    {
        $this->evProvider = (string) $evProvider;
        return $this;
    }

    /**
     * @return string
     */
    public function getCrt()
    {
        return $this->crt;
    }

    /**
     * @param string $crt
     * @return $this
     */
    public function setCrt($crt)
    {
        $this->crt = (string) $crt;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = (string) $key;
        return $this;
    }
}