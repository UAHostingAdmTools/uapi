<?php

namespace AdmTools\UApi\Entity\Billing\Cart;

/**
 * Class Hosting
 * AdmTools\UApi\Entity\Billing\Cart
 */
class Hosting
{
	const PERIOD_1 = 1;
	const PERIOD_3 = 3;
	const PERIOD_6 = 6;
	const PERIOD_12 = 12;
	const PERIOD_24 = 24;
	const PERIOD_36 = 36;

    /**
     * @var int
     */
    protected $plan;

	/**
	 * @var int
	 */
	protected $period;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $login;

	/**
	 * @var string
	 */
	protected $account;

	/**
	 * @var Domain
	 */
	protected $domain;

    /**
     * @return int
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param int $plan
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->plan = (int) $plan;
        return $this;
    }

	/**
	 * @return int
	 */
	public function getPeriod()
	{
		return $this->period;
	}

	/**
	 * @param int $period
	 * @return $this
	 */
	public function setPeriod($period)
	{
		$this->period = (int) $period;
		return $this;
	}

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = (string) $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return $this
     */
    public function setLogin($login)
    {
        $this->login = (string) $login;
        return $this;
    }

	/**
	 * @return string
	 */
	public function getAccount()
	{
		return $this->account;
	}

	/**
	 * @param string $account
	 * @return $this
	 */
	public function setAccount($account)
	{
		$this->account = (string) $account;
		return $this;
	}

	/**
	 * @return Domain
	 */
	public function getDomain()
	{
		return $this->domain;
	}

	/**
	 * @param Domain $domain
	 * @return $this
	 */
	public function setDomain(Domain $domain)
	{
		$this->domain = $domain;
		return $this;
	}
}