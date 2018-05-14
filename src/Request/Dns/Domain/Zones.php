<?php

namespace AdmTools\UApi\Request\Dns\Domain;

use AdmTools\UApi\Request;
use AdmTools\UApi\Response;

/**
 * Class Zones
 * AdmTools\UApi\Request\Dns\Domain
 */
class Zones extends Request
{
    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Domain\Zones::class;

    /**
     * @var string
     */
    protected $class = 'dns_domain';

    /**
     * @var array
     */
    protected $stack;

    /**
     * @var boolean
     */
    protected $available;

    /**
     * @return array
     */
    public function getStack()
    {
        return $this->stack;
    }

    /**
     * @param array $stack
     * @return $this
     */
    public function setStack(array $stack)
    {
        $this->stack = $stack;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isAvailable()
    {
        return $this->available;
    }

    /**
     * @param boolean $available
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->available = (boolean) $available;
        return $this;
    }
}