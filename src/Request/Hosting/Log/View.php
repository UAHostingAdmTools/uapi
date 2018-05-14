<?php

namespace AdmTools\UApi\Request\Hosting\Log;

use AdmTools\UApi\Entity\Hosting\Log\TimeInterval;
use AdmTools\UApi\Response;

/**
 * Class View
 * AdmTools\UApi\Request\Hosting\Log
 */
class View extends Log
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Log\View::class;

    /**
     * @var string
     */
    protected $class = 'hosting_log';

    /**
     * @var TimeInterval
     */
    protected $dtime;

    /**
     * @var string
     */
    protected $search;

    /**
     * @var string
     */
    protected $sort;

    /**
     * @var int
     */
    protected $page;

    /**
     * @var int
     */
    protected $rowsPerPage;

    /**
     * @return TimeInterval
     */
    public function getDtime()
    {
        return $this->dtime;
    }

    /**
     * @param TimeInterval $dtime
     * @return $this
     */
    public function setDtime(TimeInterval $dtime)
    {
        $this->dtime = $dtime;
        return $this;
    }

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
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     * @return $this
     */
    public function setPage($page)
    {
        $this->page = (int) $page;
        return $this;
    }

    /**
     * @return int
     */
    public function getRowsPerPage()
    {
        return $this->rowsPerPage;
    }

    /**
     * @param int $rowsPerPage
     * @return $this
     */
    public function setRowsPerPage($rowsPerPage)
    {
        $this->rowsPerPage = (int) $rowsPerPage;
        return $this;
    }
}