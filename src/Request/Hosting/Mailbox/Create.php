<?php

namespace AdmTools\UApi\Request\Hosting\Mailbox;

use AdmTools\UApi\Request\Hosting\Mailbox;
use AdmTools\UApi\Entity\Hosting\Mailbox\Autoresponder;
use AdmTools\UApi\Response;

/**
 * Class Create
 * AdmTools\UApi\Request\Hosting\Mailbox
 */
class Create extends Mailbox
{
	const TYPE_MAILBOX = 'mailbox';
	const TYPE_REDIRECT = 'redirect';
	const TYPE_COPY = 'copy';

	const ANTI_SPAM_OFF = 'off';
	const ANTI_SPAM_LOW = 'low';
	const ANTI_SPAM_MEDIUM = 'medium';
	const ANTI_SPAM_HIGH = 'high';

    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Mailbox\Create::class;

    /**
     * @var string
     */
    protected $class = 'hosting_mailbox';

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var array
     */
    protected $forward;

    /**
     * @var string
     */
    protected $antispam;

    /**
     * @var Autoresponder
     */
    protected $autoresponder;

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = (string) $password;
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
     * @return array
     */
    public function getForward()
    {
        return $this->forward;
    }

    /**
     * @param array $forward
     * @return $this
     */
    public function setForward(array $forward)
    {
        $this->forward = $forward;
        return $this;
    }

    /**
     * @return string
     */
    public function getAntispam()
    {
        return $this->antispam;
    }

    /**
     * @param string $antispam
     * @return $this
     */
    public function setAntispam($antispam)
    {
        $this->antispam = (string) $antispam;
        return $this;
    }

	/**
	 * @return Autoresponder
	 */
	public function getAutoresponder()
	{
		return $this->autoresponder;
	}

	/**
	 * @param Autoresponder $autoresponder
	 * @return $this
	 */
	public function setAutoresponder(Autoresponder $autoresponder)
	{
		$this->autoresponder = $autoresponder;
		return $this;
	}
}