<?php

namespace AdmTools\UApi\Entity\Hosting\Account\Site;

use JMS\Serializer\Annotation\Type;

/**
 * Class Host
 * AdmTools\UApi\Entity\Hosting\Account\Site
 */
class Host
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
    protected $fqdn;

    /**
     * @var string
     * @Type("string")
     */
    protected $service;

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
    public function getFqdn()
    {
        return $this->fqdn;
    }

    /**
     * @param string $fqdn
     * @return $this
     */
    public function setFqdn($fqdn)
    {
        $this->fqdn = (string) $fqdn;
        return $this;
    }

    /**
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param string $service
     * @return $this
     */
    public function setService($service)
    {
        $this->service = (string) $service;
        return $this;
    }
}