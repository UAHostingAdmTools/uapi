<?php

namespace AdmTools\UApi\Request\Dns\Domain;

use AdmTools\UApi\Request\Dns\Domain;
use AdmTools\UApi\Response;

/**
 * Class Create
 * AdmTools\UApi\Request\Dns\Domain
 */
class Create extends Domain
{
    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Domain\Create::class;

    /**
     * @var string
     */
    protected $class = 'dns_domain';

    /**
     * @var boolean
     */
    protected $import;

    /**
     * @return boolean
     */
    public function isImport()
    {
        return $this->import;
    }

    /**
     * @param boolean $import
     * @return $this
     */
    public function setImport($import)
    {
        $this->import = (boolean) $import;
        return $this;
    }
}