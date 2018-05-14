<?php

namespace AdmTools\UApi\Entity\Hosting\Ftp;

use JMS\Serializer\Annotation\Type;

/**
 * Class Stack
 * AdmTools\UApi\Entity\Hosting\Ftp
 */
class Stack
{
    /**
     * @var string
     * @Type("string")
     */
    protected $ip;

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return $this
     */
    public function setIp($ip)
    {
        $this->ip = (string) $ip;
        return $this;
    }
}