<?php

namespace AdmTools\UApi\Entity\Hosting\Account;

use JMS\Serializer\Annotation\Type;

/**
 * Class Usage
 * AdmTools\UApi\Entity\Hosting\Account
 */
class Usage
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
}