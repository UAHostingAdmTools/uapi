<?php

namespace AdmTools\UApi\Entity\Dns\Domain;

use JMS\Serializer\Annotation\Type;

/**
 * Class Check
 * AdmTools\UApi\Entity\Dns\Domain
 */
class Check
{
    /**
     * @var string
     * @Type("string")
     */
    protected $reasonCode;

    /**
     * @var int
     * @Type("int")
     */
    protected $available;

    /**
     * @var string
     * @Type("string")
     */
    protected $reason;

    /**
     * @return string
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * @param string $reasonCode
     * @return $this
     */
    public function setReasonCode($reasonCode)
    {
        $this->reasonCode = (string) $reasonCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param int $available
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->available = (int) $available;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = (string) $reason;
        return $this;
    }
}