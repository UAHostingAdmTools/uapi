<?php

namespace AdmTools\UApi\Entity\Hosting\Log;

use JMS\Serializer\Annotation\SerializedName;

/**
 * Class TimeInterval
 * AdmTools\UApi\Entity\Hosting\Log
 */
class TimeInterval
{
    /**
     * @var string
     */
    protected $date;

    /**
     * @var string
     * @SerializedName("time_from")
     */
    protected $timeFrom;

    /**
     * @var string
     * @SerializedName("time_to")
     */
    protected $timeTo;

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = (string) $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeFrom()
    {
        return $this->timeFrom;
    }

    /**
     * @param string $timeFrom
     * @return $this
     */
    public function setTimeFrom($timeFrom)
    {
        $this->timeFrom = (string) $timeFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeTo()
    {
        return $this->timeTo;
    }

    /**
     * @param string $timeTo
     * @return $this
     */
    public function setTimeTo($timeTo)
    {
        $this->timeTo = (string) $timeTo;
        return $this;
    }
}