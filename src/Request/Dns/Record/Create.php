<?php

namespace AdmTools\UApi\Request\Dns\Record;

use AdmTools\UApi\Request\Dns\Domain;
use AdmTools\UApi\Response;

/**
 * Class Create
 * AdmTools\UApi\Request\Dns\Record
 */
class Create extends Domain
{
	const SUB_DOMAIN_REFERENCE = '@';
	const SUB_DOMAIN_ANY = '*';

	const TYPE_A = 'A';
	const TYPE_AAAA = 'AAAA';
	const TYPE_ALIAS = 'ALIAS';
	const TYPE_CNAME = 'CNAME';
	const TYPE_MX = 'MX';
	const TYPE_NS = 'NS';
	const TYPE_SPF = 'SPF';
	const TYPE_TXT = 'TXT';

    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Record\Create::class;

    /**
     * @var string
     */
    protected $class = 'dns_record';

    /**
     * @var string
     */
    protected $subdomain;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var int
     */
    protected $priority;

    /**
     * @var string
     */
    protected $data;

    /**
     * @return string
     */
    public function getSubdomain()
    {
        return $this->subdomain;
    }

    /**
     * @param string $subdomain
     * @return $this
     */
    public function setSubdomain($subdomain)
    {
        $this->subdomain = (string) $subdomain;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = (string) $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = (int) $priority;
        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = (string) $data;
        return $this;
    }
}