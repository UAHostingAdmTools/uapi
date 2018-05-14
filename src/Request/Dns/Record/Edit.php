<?php

namespace AdmTools\UApi\Request\Dns\Record;

use AdmTools\UApi\Request\Dns\Domain;
use AdmTools\UApi\Response;
use AdmTools\UApi\Entity\Dns\Record\Info;

/**
 * Class Edit
 * AdmTools\UApi\Request\Dns\Record
 */
class Edit extends Domain
{
    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Record\Edit::class;

    /**
     * @var string
     */
    protected $class = 'dns_record';

    /**
     * @var array
     */
    protected $stack;

    /**
     * @return array<Info>
     */
    public function getStack()
    {
        return $this->stack;
    }

    /**
     * @param array<Info> $stack
     * @return $this
     */
    public function setStack($stack)
    {
        $this->stack = $stack;
        return $this;
    }

    /**
     * @param Info $dns
     * @return $this
     */
    public function addToStack(Info $dns)
    {
        $this->stack[] = $dns;
        return $this;
    }
}