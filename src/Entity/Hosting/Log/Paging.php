<?php

namespace AdmTools\UApi\Entity\Hosting\Log;

use JMS\Serializer\Annotation\Type;

/**
 * Class Paging
 * AdmTools\UApi\Entity\Hosting\Log
 */
class Paging
{
    /**
     * @var int
     * @type("int")
     */
    protected $totalRows;

    /**
     * @var int
     * @type("int")
     */
    protected $rowsPerPage;

    /**
     * @var int
     * @type("int")
     */
    protected $page;

    /**
     * @return int
     */
    public function getTotalRows()
    {
        return $this->totalRows;
    }

    /**
     * @param int $totalRows
     * @return $this
     */
    public function setTotalRows($totalRows)
    {
        $this->totalRows = (int) $totalRows;
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
}