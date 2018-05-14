<?php

namespace AdmTools\UApi\Entity\Hosting\Account;

use JMS\Serializer\Annotation\Type;

/**
 * Class Proxy
 * AdmTools\UApi\Entity\Hosting\Account
 */
class Proxy
{
    /**
     * @var string
     * @Type("string")
     */
    protected $ipv4;

    /**
     * @var string
     * @Type("string")
     */
    protected $ipv6;

    /**
     * @return string
     */
    public function getIpv4()
    {
        return $this->ipv4;
    }

    /**
     * @param string $ipv4
     * @return $this
     */
    public function setIpv4($ipv4)
    {
        $this->ipv4 = (string) $ipv4;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpv6()
    {
        return $this->ipv6;
    }

    /**
     * @param string $ipv6
     * @return $this
     */
    public function setIpv6($ipv6)
    {
        $this->ipv6 = (string) $ipv6;
        return $this;
    }
}