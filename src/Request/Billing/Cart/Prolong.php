<?php

namespace AdmTools\UApi\Request\Billing\Cart;

use AdmTools\UApi\Entity\Billing\Cart\Domain;
use AdmTools\UApi\Entity\Billing\Cart\Hosting;
use AdmTools\UApi\Request;
use AdmTools\UApi\Response;

/**
 * Class Prolong
 * AdmTools\UApi\Request\Billing\Cart
 */
class Prolong extends Request
{
    /**
     * @var string
     */
    protected $responseClass = Response\Billing\Cart\Prolong::class;

    /**
     * @var string
     */
    protected $class = 'billing_cart';

    /**
     * @var array
     */
    protected $domains;

    /**
     * @var Hosting
     */
    protected $hosting;

    /**
     * @return array
     */
    public function getDomains()
    {
        return $this->domains;
    }

    /**
     * @param array $domains
     * @return $this
     */
    public function setDomains($domains)
    {
        $this->domains = $domains;
        return $this;
    }

    /**
     * @param Domain $domain
     * @return $this
     */
    public function addDomain(Domain $domain)
    {
        $this->domains[] = $domain;
        return $this;
    }

    /**
     * @return Hosting
     */
    public function getHosting()
    {
        return $this->hosting;
    }

    /**
     * @param Hosting $hosting
     * @return $this
     */
    public function setHosting(Hosting $hosting)
    {
        $this->hosting = $hosting;
        return $this;
    }
}