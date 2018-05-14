<?php

namespace AdmTools\UApi\Entity\Hosting\Account\Site;

use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * AdmTools\UApi\Entity\Hosting\Account\Site
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
     * @var array
     * @Type("array<string, AdmTools\UApi\Entity\Hosting\Account\Site\Host>")
     */
    protected $hosts;

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
     * @return array
     */
    public function getHosts()
    {
        return $this->hosts;
    }

    /**
     * @param array $hosts
     * @return $this
     */
    public function setHosts(array $hosts)
    {
        $this->hosts = $hosts;
        return $this;
    }
}