<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site\Config\Ws;

use AdmTools\UApi\Request\Hosting\Account\Site\Config\Host;
use AdmTools\UApi\Response;

use JMS\Serializer\Annotation\SerializedName;

/**
 * Class Edit
 * AdmTools\UApi\Request\Hosting\Account\Site\Config\Ws
 */
class Edit extends Host
{
	const STATIC_FILES_EXPIRE_NONE = 0;
	const STATIC_FILES_EXPIRE_1_HOUR = 1;
	const STATIC_FILES_EXPIRE_3_HOUR = 3;
	const STATIC_FILES_EXPIRE_8_HOUR = 8;
	const STATIC_FILES_EXPIRE_12_HOUR = 12;
	const STATIC_FILES_EXPIRE_DAY = 24;
	const STATIC_FILES_EXPIRE_WEEK = 168;
	const STATIC_FILES_EXPIRE_MONTH = 720;
	const STATIC_FILES_EXPIRE_CUSTOM = -1;

	const REDIRECT_WWW_DISABLED = 'off';
	const REDIRECT_WWW_FROM = 'www_from';
	const REDIRECT_WWW_TO = 'www_to';

	const REDIRECT_HTTPS_DISABLED = 'disabled';
	const REDIRECT_HTTPS_FROM = 'to_http';
	const REDIRECT_HTTPS_TO = 'to_https';

    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Ws\Edit::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_ws';

    /**
     * @var boolean
     */
    protected $disableServiceUrl;

    /**
     * @var boolean
     */
    protected $defaultHost;

	/**
	 * @var string
	 */
    protected $documentRootSuffix;

    /**
     * @var string
     */
    protected $ip;

    /**
     * @var bool
     */
    protected $defaultIp;

    /**
     * @var array
     */
    protected $aliases;

    /**
     * @var array
     */
    protected $fcgiPhpFiles;

    /**
     * @var array
     */
    protected $staticFiles;

    /**
     * @var int
     */
    protected $staticFilesExpireDefault;

    /**
     * @var int
     */
    protected $staticFilesExpireUser;

    /**
     * @var boolean
	 * @SerializedName("static_404_redirect")
     */
    protected $static404Redirect;

    /**
     * @var string
     */
    protected $phpMail;

    /**
     * @var bool
     */
    protected $modsecurityEnabled;

    /**
     * @var array
     */
    protected $modsecurityDisableRules;

    /**
     * @var string
     */
    protected $charset;

    /**
     * @var string
     */
    protected $redirect;

	/**
	 * @var string
	 */
    protected $httpsRedirect;

    /**
     * @var boolean
     */
    protected $mp4Streaming;

    /**
     * @var boolean
     */
    protected $ssi;

    /**
     * @var boolean
     */
    protected $enablePerl;

    /**
     * @var boolean
     */
    protected $systemErrorPages;

    /**
     * @var array
     */
    protected $optimize;

    /**
     * @return boolean
     */
    public function isDisableServiceUrl()
    {
        return $this->disableServiceUrl;
    }

    /**
     * @param boolean $disableServiceUrl
     * @return $this
     */
    public function setDisableServiceUrl($disableServiceUrl)
    {
        $this->disableServiceUrl = (boolean) $disableServiceUrl;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isDefaultHost()
    {
        return $this->defaultHost;
    }

    /**
     * @param boolean $defaultHost
     * @return $this
     */
    public function setDefaultHost($defaultHost)
    {
        $this->defaultHost = (boolean) $defaultHost;
        return $this;
    }

	/**
	 * @return string
	 */
	public function getDocumentRootSuffix()
	{
		return $this->documentRootSuffix;
	}

	/**
	 * @param string $documentRootSuffix
	 * @return $this
	 */
	public function setDocumentRootSuffix($documentRootSuffix)
	{
		$this->documentRootSuffix = (string) $documentRootSuffix;
		return $this;
	}

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return $this
     */
    public function setIp($ip)
    {
        $this->ip = (string) $ip;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isDefaultIp()
    {
        return $this->defaultIp;
    }

    /**
     * @param boolean $defaultIp
     * @return $this
     */
    public function setDefaultIp($defaultIp)
    {
        $this->defaultIp = (boolean) $defaultIp;
        return $this;
    }

    /**
     * @return array
     */
    public function getAliases()
    {
        return $this->aliases;
    }

    /**
     * @param array $aliases
     * @return $this
     */
    public function setAliases(array $aliases)
    {
        $this->aliases = $aliases;
        return $this;
    }

    /**
     * @return array
     */
    public function getFcgiPhpFiles()
    {
        return $this->fcgiPhpFiles;
    }

    /**
     * @param array $fcgiPhpFiles
     * @return $this
     */
    public function setFcgiPhpFiles(array $fcgiPhpFiles)
    {
        $this->fcgiPhpFiles = $fcgiPhpFiles;
        return $this;
    }

    /**
     * @return array
     */
    public function getStaticFiles()
    {
        return $this->staticFiles;
    }

    /**
     * @param array $staticFiles
     * @return $this
     */
    public function setStaticFiles(array $staticFiles)
    {
        $this->staticFiles = $staticFiles;
        return $this;
    }

    /**
     * @return int
     */
    public function getStaticFilesExpireDefault()
    {
        return $this->staticFilesExpireDefault;
    }

    /**
     * @param int $staticFilesExpireDefault
     * @return $this
     */
    public function setStaticFilesExpireDefault($staticFilesExpireDefault)
    {
        $this->staticFilesExpireDefault = (int) $staticFilesExpireDefault;
        return $this;
    }

    /**
     * @return int
     */
    public function getStaticFilesExpireUser()
    {
        return $this->staticFilesExpireUser;
    }

    /**
     * @param int $staticFilesExpireUser
     * @return $this
     */
    public function setStaticFilesExpireUser($staticFilesExpireUser)
    {
        $this->staticFilesExpireUser = (int) $staticFilesExpireUser;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isStatic404Redirect()
    {
        return $this->static404Redirect;
    }

    /**
     * @param boolean $static404Redirect
     * @return $this
     */
    public function setStatic404Redirect($static404Redirect)
    {
        $this->static404Redirect = (boolean) $static404Redirect;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhpMail()
    {
        return $this->phpMail;
    }

    /**
     * @param string $phpMail
     * @return $this
     */
    public function setPhpMail($phpMail)
    {
        $this->phpMail = (string) $phpMail;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isModsecurityEnabled()
    {
        return $this->modsecurityEnabled;
    }

    /**
     * @param boolean $modsecurityEnabled
     * @return $this
     */
    public function setModsecurityEnabled($modsecurityEnabled)
    {
        $this->modsecurityEnabled = (boolean) $modsecurityEnabled;
        return $this;
    }

    /**
     * @return array
     */
    public function getModsecurityDisableRules()
    {
        return $this->modsecurityDisableRules;
    }

    /**
     * @param array $modsecurityDisableRules
     * @return $this
     */
    public function setModsecurityDisableRules(array $modsecurityDisableRules)
    {
        $this->modsecurityDisableRules = $modsecurityDisableRules;
        return $this;
    }

    /**
     * @return string
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * @param string $charset
     * @return $this
     */
    public function setCharset($charset)
    {
        $this->charset = (string) $charset;
        return $this;
    }

    /**
     * @return string
     */
    public function getRedirect()
    {
        return $this->redirect;
    }

    /**
     * @param string $redirect
     * @return $this
     */
    public function setRedirect($redirect)
    {
        $this->redirect = (string) $redirect;
        return $this;
    }

	/**
	 * @return string
	 */
	public function getHttpsRedirect()
	{
		return $this->httpsRedirect;
	}

	/**
	 * @param string $httpsRedirect
	 * @return $this
	 */
	public function setHttpsRedirect($httpsRedirect)
	{
		$this->httpsRedirect = (string) $httpsRedirect;
		return $this;
	}

    /**
     * @return boolean
     */
    public function isMp4Streaming()
    {
        return $this->mp4Streaming;
    }

    /**
     * @param boolean $mp4Streaming
     * @return $this
     */
    public function setMp4Streaming($mp4Streaming)
    {
        $this->mp4Streaming = (boolean) $mp4Streaming;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isSsi()
    {
        return $this->ssi;
    }

    /**
     * @param boolean $ssi
     * @return $this
     */
    public function setSsi($ssi)
    {
        $this->ssi = (boolean) $ssi;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isEnablePerl()
    {
        return $this->enablePerl;
    }

    /**
     * @param boolean $enablePerl
     * @return $this
     */
    public function setEnablePerl($enablePerl)
    {
        $this->enablePerl = (boolean) $enablePerl;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isSystemErrorPages()
    {
        return $this->systemErrorPages;
    }

    /**
     * @param boolean $systemErrorPages
     * @return $this
     */
    public function setSystemErrorPages($systemErrorPages)
    {
        $this->systemErrorPages = (boolean) $systemErrorPages;
        return $this;
    }

    /**
     * @return array
     */
    public function getOptimize()
    {
        return $this->optimize;
    }

    /**
     * @param array $optimize
     * @return $this
     */
    public function setOptimize(array $optimize)
    {
        $this->optimize = $optimize;
        return $this;
    }
}