<?php

namespace AdmTools\UApi\Entity\Billing\Cart;

/**
 * Class Domains
 * AdmTools\UApi\Entity\Billing\Cart
 */
class Domain
{
	const PERIOD_1 = 1;
	const PERIOD_2 = 2;
	const PERIOD_3 = 3;
	const PERIOD_4 = 4;
	const PERIOD_5 = 5;
	const PERIOD_6 = 6;
	const PERIOD_7 = 7;
	const PERIOD_8 = 8;
	const PERIOD_9 = 9;
	const PERIOD_10 = 10;

	const AS_NONE = 'none';
	const AS_NEW = 'new';
	const AS_EXIST = 'exist';

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $period;

    /**
     * @var string
     */
    protected $as;

    /**
     * @var string
     */
    protected $license;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = (string) $name;
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
    public function getAs()
    {
        return $this->as;
    }

    /**
     * @param string $as
     * @return $this
     */
    public function setAs($as)
    {
        $this->as = (string) $as;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param string $license
     * @return $this
     */
    public function setLicense($license)
    {
        $this->license = (string) $license;
        return $this;
    }
}