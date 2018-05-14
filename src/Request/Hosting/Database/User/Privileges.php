<?php

namespace AdmTools\UApi\Request\Hosting\Database\User;

use AdmTools\UApi\Request\Hosting\Database\User;
use AdmTools\UApi\Response;

/**
 * Class Privileges
 * AdmTools\UApi\Request\Hosting\Database\User
 */
class Privileges extends User
{
	const PRIVILEGE_SELECT = 'select';
	const PRIVILEGE_INSERT = 'insert';
	const PRIVILEGE_UPDATE = 'update';
	const PRIVILEGE_DELETE = 'delete';
	const PRIVILEGE_CREATE = 'create';
	const PRIVILEGE_DROP = 'drop';
	const PRIVILEGE_INDEX = 'index';
	const PRIVILEGE_ALTER = 'alter';
	const PRIVILEGE_LOCK_TABLES = 'lock_tables';
	const PRIVILEGE_CREATE_TEMPORARY_TABLES = 'create_temporary_tables';
	const PRIVILEGE_CREATE_VIEW = 'create_view';
	const PRIVILEGE_SHOW_VIEW = 'show_view';
	const PRIVILEGE_CREATE_ROUTINE = 'create_routine';
	const PRIVILEGE_ALTER_ROUTINE = 'alter_routine';
	const PRIVILEGE_EXECUTE = 'execute';
	const PRIVILEGE_REFERENCES = 'references';
	const PRIVILEGE_TRIGGER = 'trigger';
	const PRIVILEGE_EVENT = 'event';

	/**
	 * @var array
	 */
	protected static $availablePrivileges = [
		self::PRIVILEGE_SELECT,
		self::PRIVILEGE_INSERT,
		self::PRIVILEGE_UPDATE,
		self::PRIVILEGE_DELETE,
		self::PRIVILEGE_CREATE,
		self::PRIVILEGE_DROP,
		self::PRIVILEGE_INDEX,
		self::PRIVILEGE_ALTER,
		self::PRIVILEGE_LOCK_TABLES,
		self::PRIVILEGE_CREATE_TEMPORARY_TABLES,
		self::PRIVILEGE_CREATE_VIEW,
		self::PRIVILEGE_SHOW_VIEW,
		self::PRIVILEGE_CREATE_ROUTINE,
		self::PRIVILEGE_ALTER_ROUTINE,
		self::PRIVILEGE_EXECUTE,
		self::PRIVILEGE_REFERENCES,
		self::PRIVILEGE_TRIGGER,
		self::PRIVILEGE_EVENT
	];

    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Database\User\Privileges::class;

    /**
     * @var string
     */
    protected $class = 'hosting_database';

	/**
	 * @var string
	 */
    protected $method = 'user_privileges';

    /**
     * @var array
     */
    protected $privileges;

    /**
     * @return array
     */
    public function getPrivileges()
    {
        return $this->privileges;
    }

    /**
     * @param array $privileges
     * @return $this
     */
    public function setPrivileges(array $privileges)
    {
        $this->privileges = $privileges;
        return $this;
    }

	/**
	 * @return array
	 */
    public function getAllPrivileges()
	{
		return static::$availablePrivileges;
	}

	/**
	 * @return $this
	 */
    public function setAllPrivileges()
	{
		$this->privileges = static::$availablePrivileges;
		return $this;
	}
}