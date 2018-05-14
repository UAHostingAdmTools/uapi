<?php

namespace AdmTools\UApi\Entity\Hosting\Quota;

use JMS\Serializer\Annotation\Type;

/**
 * Class Mysql
 * AdmTools\UApi\Entity\Hosting\Quota
 */
class Mysql
{
    /**
     * @var string
     * @Type("string")
     */
    protected $name;

    /**
     * @var float
     * @Type("float")
     */
    protected $size;

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
     * @return float
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param float $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = (float) $size;
        return $this;
    }
}