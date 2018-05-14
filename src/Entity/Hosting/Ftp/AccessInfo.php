<?php

namespace AdmTools\UApi\Entity\Hosting\Ftp;

use JMS\Serializer\Annotation\Type;

/**
 * Class AccessInfo
 * AdmTools\UApi\Entity\Hosting\Ftp
 */
class AccessInfo
{
    /**
     * @var boolean
     * @Type("boolean")
     */
    protected $active;

    /**
     * @var boolean
     * @Type("boolean")
     */
    protected $webFtp;

    /**
     * @var Stack
     * @Type("array<AdmTools\UApi\Entity\Hosting\Ftp\Stack>")
     */
    protected $stack;

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = (boolean) $active;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isWebFtp()
    {
        return $this->webFtp;
    }

    /**
     * @param boolean $webFtp
     * @return $this
     */
    public function setWebFtp($webFtp)
    {
        $this->webFtp = (boolean) $webFtp;
        return $this;
    }

    /**
     * @return Stack
     */
    public function getStack()
    {
        return $this->stack;
    }

    /**
     * @param Stack $stack
     * @return $this
     */
    public function setStack(Stack $stack)
    {
        $this->stack = $stack;
        return $this;
    }
}