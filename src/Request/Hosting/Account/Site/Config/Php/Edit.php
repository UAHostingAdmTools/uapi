<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site\Config\Php;

use AdmTools\UApi\Request\Hosting\Account\Site\Config\Host;
use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\SerializedName;

/**
 * Class Edit
 * AdmTools\UApi\Request\Hosting\Account\Site\Config\Php
 */
class Edit extends Host
{
	const PHP_VERSION_4_4 = 'php4';
	const PHP_VERSION_5_2 = 'php5';
	const PHP_VERSION_5_3 = 'php53';
	const PHP_VERSION_5_4 = 'php54';
	const PHP_VERSION_5_5 = 'php55';
	const PHP_VERSION_5_6 = 'php56';
	const PHP_VERSION_7_0 = 'php70';
	const PHP_VERSION_7_1 = 'php71';
	const PHP_VERSION_7_2 = 'php72';

	const PHP_ENCODER_NONE = 'none';
	const PHP_ENCODER_ZEND = 'zend';
	const PHP_ENCODER_IONCUBE = 'ioncube';

	const REGISTER_GLOBALS_ON = 'true';
	const REGISTER_GLOBALS_OFF = 'false';

	const MAGIC_QUOTES_GPC_ON = 'true';
	const MAGIC_QUOTES_GPC_OFF = 'false';

	const MAGIC_QUOTES_RUNTIME_ON = 'true';
	const MAGIC_QUOTES_RUNTIME_OFF = 'false';

	const SAFE_MODE_ON = 'true';
	const SAFE_MODE_OFF = 'false';

	const SESSION_SAVE_HANDLER_FILE = 'files';
	const SESSION_SAVE_HANDLER_MEMCACHE = 'memcache';

	const OPEN_BASEDIR_NONE = 'none';
	const OPEN_BASEDIR_ACCOUNT = 'account';
	const OPEN_BASEDIR_DOMAIN = 'domain';
	const OPEN_BASEDIR_HOST = 'host';

	const DISPLAY_ERRORS_ON = 'true';
	const DISPLAY_ERRORS_OFF = 'false';

	const ERROR_REPORTING_E_ERROR = 'E_ERROR';
	const ERROR_REPORTING_E_RECOVERABLE_ERROR = 'E_RECOVERABLE_ERROR';
	const ERROR_REPORTING_E_WARNING = 'E_WARNING';
	const ERROR_REPORTING_E_PARSE = 'E_PARSE';
	const ERROR_REPORTING_E_NOTICE = 'E_NOTICE';
	const ERROR_REPORTING_E_STRICT = 'E_STRICT';
	const ERROR_REPORTING_E_CORE_ERROR = 'E_CORE_ERROR';
	const ERROR_REPORTING_E_CORE_WARNING = 'E_CORE_WARNING';
	const ERROR_REPORTING_E_COMPILE_ERROR = 'E_COMPILE_ERROR';
	const ERROR_REPORTING_E_COMPILE_WARNING = 'E_COMPILE_WARNING';
	const ERROR_REPORTING_E_USER_ERROR = 'E_USER_ERROR';
	const ERROR_REPORTING_E_USER_WARNING = 'E_USER_WARNING';
	const ERROR_REPORTING_E_USER_NOTICE = 'E_USER_NOTICE';

	const FUNC_OVERLOAD_0 = 0;
	const FUNC_OVERLOAD_1 = 1;
	const FUNC_OVERLOAD_2 = 2;
	const FUNC_OVERLOAD_3 = 3;
	const FUNC_OVERLOAD_4 = 4;
	const FUNC_OVERLOAD_5 = 5;
	const FUNC_OVERLOAD_6 = 6;
	const FUNC_OVERLOAD_7 = 7;

	const PHALCON_VERION_NONE = 'none';
	const PHALCON_VERSION_2 = 'phalcon2';
	const PHALCON_VERSION_3 = 'phalcon3';

    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Php\Edit::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_php';

    /**
     * @var string
     */
    protected $phpVersion;

    /**
     * @var string
     */
    protected $phpEncoder;

    /**
     * @var string
     */
    protected $registerGlobals;

    /**
     * @var string
     */
    protected $magicQuotesGpc;

    /**
     * @var string
     */
    protected $magicQuotesRuntime;

    /**
     * @var string
     */
    protected $phpSafeMode;

    /**
     * @var bool
     */
    protected $phpAllowCallTimePassReference;

    /**
     * @var bool
     */
    protected $phpRegisterLongArrays;

    /**
     * @var bool
     */
    protected $phpAllowUrlInclude;

    /**
     * @var string
     */
    protected $phpSessionSaveHandler;

    /**
     * @var bool
     */
    protected $phpSessionUseOnlyCookies;

    /**
     * @var bool
     */
    protected $phpShortOpenTag;

    /**
     * @var string
     */
    protected $phpOpenBasedir;

    /**
     * @var bool
     */
    protected $phpOutputBuffering;

    /**
     * @var string
     */
    protected $displayErrors;

    /**
     * @var array
     */
    protected $phpErrorReporting;

    /**
     * @var bool
	 * @SerializedName("php_uploadprogress")
     */
    protected $phpUploadProgress;

    /**
     * @var int
     */
    protected $postMaxSize;

    /**
     * @var int
     */
    protected $maxInputTime;

    /**
     * @var int
     */
    protected $phpMaxInputVars;

    /**
     * @var int
     */
    protected $phpMaxExecutionTimeUser;

    /**
     * @var int
     */
    protected $phpMbFuncOverload;

    /**
     * @var string
     */
    protected $phpMbInternalEncoding;

    /**
     * @var string
     */
    protected $phpTimezone;

    /**
     * @var int
     */
    protected $defaultSocketTimeout;

    /**
     * @var bool
     */
    protected $phpCgiFixPathinfo;

    /**
     * @var bool
     */
    protected $phpAllowUrlFopen;

    /**
     * @var string
	 * @SerializedName("php_phalcon_ver")
     */
    protected $phpPhalconVersion;

	/**
	 * @var array
	 */
    protected $phpDisableFunctions;

    /**
     * @var bool
     */
    protected $phpMailAddXHeader;

	/**
	 * @var bool
	 */
    protected $opcacheEnabled;

	/**
	 * @var int
	 */
    protected $opcacheMemory;

	/**
	 * @var int
	 */
    protected $opcacheRevalidateFreq;

    /**
     * @return string
     */
    public function getPhpVersion()
    {
        return $this->phpVersion;
    }

    /**
     * @param string $phpVersion
     * @return $this
     */
    public function setPhpVersion($phpVersion)
    {
        $this->phpVersion = (string) $phpVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhpEncoder()
    {
        return $this->phpEncoder;
    }

    /**
     * @param string $phpEncoder
     * @return $this
     */
    public function setPhpEncoder($phpEncoder)
    {
        $this->phpEncoder = (string) $phpEncoder;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegisterGlobals()
    {
        return $this->registerGlobals;
    }

    /**
     * @param string $registerGlobals
     * @return $this
     */
    public function setRegisterGlobals($registerGlobals)
    {
        $this->registerGlobals = (string) $registerGlobals;
        return $this;
    }

    /**
     * @return string
     */
    public function getMagicQuotesGpc()
    {
        return $this->magicQuotesGpc;
    }

    /**
     * @param string $magicQuotesGpc
     * @return $this
     */
    public function setMagicQuotesGpc($magicQuotesGpc)
    {
        $this->magicQuotesGpc = (string) $magicQuotesGpc;
        return $this;
    }

    /**
     * @return string
     */
    public function getMagicQuotesRuntime()
    {
        return $this->magicQuotesRuntime;
    }

    /**
     * @param string $magicQuotesRuntime
     * @return $this
     */
    public function setMagicQuotesRuntime($magicQuotesRuntime)
    {
        $this->magicQuotesRuntime = (string) $magicQuotesRuntime;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhpSafeMode()
    {
        return $this->phpSafeMode;
    }

    /**
     * @param string $phpSafeMode
     * @return $this
     */
    public function setPhpSafeMode($phpSafeMode)
    {
        $this->phpSafeMode = (string) $phpSafeMode;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPhpAllowCallTimePassReference()
    {
        return $this->phpAllowCallTimePassReference;
    }

    /**
     * @param bool $phpAllowCallTimePassReference
     * @return $this
     */
    public function setPhpAllowCallTimePassReference($phpAllowCallTimePassReference)
    {
        $this->phpAllowCallTimePassReference = (bool) $phpAllowCallTimePassReference;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPhpRegisterLongArrays()
    {
        return $this->phpRegisterLongArrays;
    }

    /**
     * @param bool $phpRegisterLongArrays
     * @return $this
     */
    public function setPhpRegisterLongArrays($phpRegisterLongArrays)
    {
        $this->phpRegisterLongArrays = (bool) $phpRegisterLongArrays;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPhpAllowUrlInclude()
    {
        return $this->phpAllowUrlInclude;
    }

    /**
     * @param bool $phpAllowUrlInclude
     * @return $this
     */
    public function setPhpAllowUrlInclude($phpAllowUrlInclude)
    {
        $this->phpAllowUrlInclude = (bool) $phpAllowUrlInclude;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhpSessionSaveHandler()
    {
        return $this->phpSessionSaveHandler;
    }

    /**
     * @param string $phpSessionSaveHandler
     * @return $this
     */
    public function setPhpSessionSaveHandler($phpSessionSaveHandler)
    {
        $this->phpSessionSaveHandler = (string) $phpSessionSaveHandler;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPhpSessionUseOnlyCookies()
    {
        return $this->phpSessionUseOnlyCookies;
    }

    /**
     * @param bool $phpSessionUseOnlyCookies
     * @return $this
     */
    public function setPhpSessionUseOnlyCookies($phpSessionUseOnlyCookies)
    {
        $this->phpSessionUseOnlyCookies = (bool) $phpSessionUseOnlyCookies;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPhpShortOpenTag()
    {
        return $this->phpShortOpenTag;
    }

    /**
     * @param bool $phpShortOpenTag
     * @return $this
     */
    public function setPhpShortOpenTag($phpShortOpenTag)
    {
        $this->phpShortOpenTag = (bool) $phpShortOpenTag;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhpOpenBasedir()
    {
        return $this->phpOpenBasedir;
    }

    /**
     * @param string $phpOpenBasedir
     * @return $this
     */
    public function setPhpOpenBasedir($phpOpenBasedir)
    {
        $this->phpOpenBasedir = (string) $phpOpenBasedir;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPhpOutputBuffering()
    {
        return $this->phpOutputBuffering;
    }

    /**
     * @param bool $phpOutputBuffering
     * @return $this
     */
    public function setPhpOutputBuffering($phpOutputBuffering)
    {
        $this->phpOutputBuffering = (bool) $phpOutputBuffering;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayErrors()
    {
        return $this->displayErrors;
    }

    /**
     * @param string $displayErrors
     * @return $this
     */
    public function setDisplayErrors($displayErrors)
    {
        $this->displayErrors = (string) $displayErrors;
        return $this;
    }

    /**
     * @return array
     */
    public function getPhpErrorReporting()
    {
        return $this->phpErrorReporting;
    }

    /**
     * @param array $phpErrorReporting
     * @return $this
     */
    public function setPhpErrorReporting(array $phpErrorReporting)
    {
        $this->phpErrorReporting = $phpErrorReporting;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPhpUploadProgress()
    {
        return $this->phpUploadProgress;
    }

    /**
     * @param bool $phpUploadProgress
     * @return $this
     */
    public function setPhpUploadProgress($phpUploadProgress)
    {
        $this->phpUploadProgress = (bool) $phpUploadProgress;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostMaxSize()
    {
        return $this->postMaxSize;
    }

    /**
     * @param int $postMaxSize
     * @return $this
     */
    public function setPostMaxSize($postMaxSize)
    {
        $this->postMaxSize = (int) $postMaxSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxInputTime()
    {
        return $this->maxInputTime;
    }

    /**
     * @param int $maxInputTime
     * @return $this
     */
    public function setMaxInputTime($maxInputTime)
    {
        $this->maxInputTime = (int) $maxInputTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhpMaxInputVars()
    {
        return $this->phpMaxInputVars;
    }

    /**
     * @param int $phpMaxInputVars
     * @return $this
     */
    public function setPhpMaxInputVars($phpMaxInputVars)
    {
        $this->phpMaxInputVars = (int) $phpMaxInputVars;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhpMaxExecutionTimeUser()
    {
        return $this->phpMaxExecutionTimeUser;
    }

    /**
     * @param int $phpMaxExecutionTimeUser
     * @return $this
     */
    public function setPhpMaxExecutionTimeUser($phpMaxExecutionTimeUser)
    {
        $this->phpMaxExecutionTimeUser = (int) $phpMaxExecutionTimeUser;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhpMbFuncOverload()
    {
        return $this->phpMbFuncOverload;
    }

    /**
     * @param int $phpMbFuncOverload
     * @return $this
     */
    public function setPhpMbFuncOverload($phpMbFuncOverload)
    {
        $this->phpMbFuncOverload = (int) $phpMbFuncOverload;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhpMbInternalEncoding()
    {
        return $this->phpMbInternalEncoding;
    }

    /**
     * @param string $phpMbInternalEncoding
     * @return $this
     */
    public function setPhpMbInternalEncoding($phpMbInternalEncoding)
    {
        $this->phpMbInternalEncoding = (string) $phpMbInternalEncoding;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhpTimezone()
    {
        return $this->phpTimezone;
    }

    /**
	 * http://php.net/manual/timezones.php
	 *
     * @param string $phpTimezone
     * @return $this
     */
    public function setPhpTimezone($phpTimezone)
    {
        $this->phpTimezone = (string) $phpTimezone;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultSocketTimeout()
    {
        return $this->defaultSocketTimeout;
    }

    /**
     * @param int $defaultSocketTimeout
     * @return $this
     */
    public function setDefaultSocketTimeout($defaultSocketTimeout)
    {
        $this->defaultSocketTimeout = (int) $defaultSocketTimeout;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPhpCgiFixPathinfo()
    {
        return $this->phpCgiFixPathinfo;
    }

    /**
     * @param bool $phpCgiFixPathinfo
     * @return $this
     */
    public function setPhpCgiFixPathinfo($phpCgiFixPathinfo)
    {
        $this->phpCgiFixPathinfo = (bool) $phpCgiFixPathinfo;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPhpAllowUrlFopen()
    {
        return $this->phpAllowUrlFopen;
    }

    /**
     * @param bool $phpAllowUrlFopen
     * @return $this
     */
    public function setPhpAllowUrlFopen($phpAllowUrlFopen)
    {
        $this->phpAllowUrlFopen = (bool) $phpAllowUrlFopen;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhpPhalconVersion()
    {
        return $this->phpPhalconVersion;
    }

    /**
     * @param string $phpPhalconVersion
     * @return $this
     */
    public function setPhpPhalconVersion($phpPhalconVersion)
    {
        $this->phpPhalconVersion = (string) $phpPhalconVersion;
        return $this;
    }

	/**
	 * @return array
	 */
	public function getPhpDisableFunctions()
	{
		return $this->phpDisableFunctions;
	}

	/**
	 * @param string $phpDisableFunction
	 * @return $this
	 */
	public function addPhpDisableFunction($phpDisableFunction)
	{
		$this->phpDisableFunctions[] = (string) $phpDisableFunction;
		return $this;
	}

	/**
	 * @param array $phpDisableFunctions
	 * @return $this
	 */
	public function setPhpDisableFunctions(array $phpDisableFunctions)
	{
		$this->phpDisableFunctions = $phpDisableFunctions;
		return $this;
	}

    /**
     * @return bool
     */
    public function isPhpMailAddXHeader()
    {
        return $this->phpMailAddXHeader;
    }

    /**
     * @param bool $phpMailAddXHeader
     * @return $this
     */
    public function setPhpMailAddXHeader($phpMailAddXHeader)
    {
        $this->phpMailAddXHeader = (bool) $phpMailAddXHeader;
        return $this;
    }

	/**
	 * @return bool
	 */
	public function isOpcacheEnabled()
	{
		return $this->opcacheEnabled;
	}

	/**
	 * @param bool $opcacheEnabled
	 * @return $this
	 */
	public function setOpcacheEnabled($opcacheEnabled)
	{
		$this->opcacheEnabled = (bool) $opcacheEnabled;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getOpcacheMemory()
	{
		return $this->opcacheMemory;
	}

	/**
	 * @param int $opcacheMemory
	 * @return $this
	 */
	public function setOpcacheMemory($opcacheMemory)
	{
		$this->opcacheMemory = (int) $opcacheMemory;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getOpcacheRevalidateFreq()
	{
		return $this->opcacheRevalidateFreq;
	}

	/**
	 * @param int $opcacheRevalidateFreq
	 * @return $this
	 */
	public function setOpcacheRevalidateFreq($opcacheRevalidateFreq)
	{
		$this->opcacheRevalidateFreq = (int) $opcacheRevalidateFreq;
		return $this;
	}
}