<?php

namespace AdmTools\UApi\Request\Hosting\Account;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class PlanChange
 * AdmTools\UApi\Request\Hosting\Account
 */
class PlanChange extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\PlanChange::class;

    /**
     * @var string
     */
    protected $class = 'hosting_account';

    /**
     * @var int
     */
    protected $plan;

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
}