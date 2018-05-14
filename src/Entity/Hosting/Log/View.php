<?php

namespace AdmTools\UApi\Entity\Hosting\Log;

use JMS\Serializer\Annotation\Type;

/**
 * Class View
 * AdmTools\UApi\Entity\Hosting\Log
 */
class View
{
    /**
     * @var array
     * @Type("array")
     */
    protected $log;

    /**
     * @var Paging
     * @Type("AdmTools\UApi\Entity\Hosting\Log\Paging")
     */
    protected $paging;

    /**
     * @var int
     * @Type("int")
     */
    protected $overlimit;

    /**
     * @return array
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * @param array $log
     * @return $this
     */
    public function setLog(array $log)
    {
        $this->log = $log;
        return $this;
    }

    /**
     * @return Paging
     */
    public function getPaging()
    {
        return $this->paging;
    }

    /**
     * @param Paging $paging
     * @return $this
     */
    public function setPaging(Paging $paging)
    {
        $this->paging = $paging;
        return $this;
    }

    /**
     * @return int
     */
    public function getOverlimit()
    {
        return $this->overlimit;
    }

    /**
     * @param int $overlimit
     * @return $this
     */
    public function setOverlimit($overlimit)
    {
        $this->overlimit = (int) $overlimit;
        return $this;
    }
}