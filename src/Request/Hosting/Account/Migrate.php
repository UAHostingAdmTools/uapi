<?php

namespace AdmTools\UApi\Request\Hosting\Account;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class Migrate
 * AdmTools\UApi\Request\Hosting\Account
 */
class Migrate extends Account
{
	const COUNTRY_GERMANY = 'DE';
	const COUNTRY_FRANCE = 'FR';
	const COUNTRY_USA = 'US';
	const COUNTRY_RUSSIA = 'RU';
	const COUNTRY_UKRAINE = 'UA';
	const COUNTRY_POLAND = 'PL';
	const COUNTRY_FINLAND = 'FI';
	const COUNTRY_SINGAPORE = 'SG';

    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Migrate::class;

    /**
     * @var string
     */
    protected $class = 'hosting_account';

    /**
     * @var string
     */
    protected $country;

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
}