<?php

namespace AdmTools\UApi\Request\Hosting\Mailbox;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class Info
 * AdmTools\UApi\Request\Hosting\Mailbox
 */
class InfoList extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Mailbox\InfoList::class;

    /**
     * @var string
     */
    protected $class = 'hosting_mailbox';

	/**
	 * @var string
	 */
	protected $method = 'info';

    /**
     * @var string
     */
    protected $domain;

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->domain = (string) $domain;
        return $this;
    }
}