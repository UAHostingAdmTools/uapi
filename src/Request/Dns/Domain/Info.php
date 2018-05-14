<?php

namespace AdmTools\UApi\Request\Dns\Domain;

use AdmTools\UApi\Request;
use AdmTools\UApi\Response;

/**
 * Class Info
 * AdmTools\UApi\Request\Dns\Domain
 */
class Info extends Request
{
    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Domain\Info::class;

    /**
     * @var string
     */
    protected $class = 'dns_domain';

    /**
     * @var string
     */
    protected $search;

    /**
     * @var string
     */
    protected $sort;

    /**
     * @var string
     */
    protected $by;

    /**
     * @return string
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * @param string $search
     * @return $this
     */
    public function setSearch($search)
    {
        $this->search = (string) $search;
        return $this;
    }

    /**
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param string $sort
     * @return $this
     */
    public function setSort($sort)
    {
        $this->sort = (string) $sort;
        return $this;
    }

    /**
     * @return string
     */
    public function getBy()
    {
        return $this->by;
    }

    /**
     * @param string $by
     * @return $this
     */
    public function setBy($by)
    {
        $this->by = (string) $by;
        return $this;
    }
}