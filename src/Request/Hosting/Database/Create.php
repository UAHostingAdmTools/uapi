<?php

namespace AdmTools\UApi\Request\Hosting\Database;

use AdmTools\UApi\Request\Hosting\Account;
use AdmTools\UApi\Response;

/**
 * Class DatabaseCreate
 * AdmTools\UApi\Request\Hosting\Database
 */
class Create extends Account
{
	const COLLATION_UTF_8_GENERAL_CI = 'utf8_general_ci';
	const COLLATION_UTF_8_UNICODE_CI = 'utf8_unicode_ci';
	const COLLATION_CP_1251_UKRAINIAN_CI = 'cp1251_ukrainian_ci';
	const COLLATION_CP_1251_GENERAL_CI = 'cp1251_general_ci';
	const COLLATION_LATIN_1_SWEDISH_CI = 'latin1_swedish_ci';

    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Database\Create::class;

    /**
     * @var string
     */
    protected $class = 'hosting_database';

	/**
	 * @var string
	 */
    protected $method = 'database_create';

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $collation;

    /**
     * @var bool
     */
    protected $userCreate;

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
     * @return string
     */
    public function getCollation()
    {
        return $this->collation;
    }

    /**
     * @param string $collation
     * @return $this
     */
    public function setCollation($collation)
    {
        $this->collation = (string) $collation;
        return $this;
    }

    /**
     * @return bool
     */
    public function isUserCreate()
    {
        return $this->userCreate;
    }

    /**
     * @param bool $userCreate
     * @return $this
     */
    public function setUserCreate($userCreate)
    {
        $this->userCreate = (bool) $userCreate;
        return $this;
    }
}