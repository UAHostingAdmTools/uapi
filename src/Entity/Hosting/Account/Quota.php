<?php

namespace AdmTools\UApi\Entity\Hosting\Account;

use JMS\Serializer\Annotation\Type;

/**
 * Class Quota
 * AdmTools\UApi\Entity\Hosting\Account
 */
class Quota
{
    /**
     * @var int
     * @Type("int")
     */
    protected $disc;

    /**
     * @var int
     * @Type("int")
     */
    protected $inode;

    /**
     * @var int
     * @Type("int")
     */
    protected $sites;

    /**
     * @var int
     * @Type("int")
     */
    protected $phpMemoryLimit;

    /**
     * @return int
     */
    public function getDisc()
    {
        return $this->disc;
    }

    /**
     * @param int $disc
     * @return $this
     */
    public function setDisc($disc)
    {
        $this->disc = (int) $disc;
        return $this;
    }

    /**
     * @return int
     */
    public function getInode()
    {
        return $this->inode;
    }

    /**
     * @param int $inode
     * @return $this
     */
    public function setInode($inode)
    {
        $this->inode = (int) $inode;
        return $this;
    }

    /**
     * @return int
     */
    public function getSites()
    {
        return $this->sites;
    }

    /**
     * @param int $sites
     * @return $this
     */
    public function setSites($sites)
    {
        $this->sites = (int) $sites;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhpMemoryLimit()
    {
        return $this->phpMemoryLimit;
    }

    /**
     * @param int $phpMemoryLimit
     * @return $this
     */
    public function setPhpMemoryLimit($phpMemoryLimit)
    {
        $this->phpMemoryLimit = (int) $phpMemoryLimit;
        return $this;
    }
}