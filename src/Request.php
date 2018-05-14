<?php

namespace AdmTools\UApi;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Exclude;

/**
 * Class Request
 * AdmTools\UApi
 */
abstract class Request
{
    /**
     * @var string
     * @SerializedName("auth_login")
     */
    protected $authLogin;

    /**
     * @var string
     * @SerializedName("auth_token")
     */
    protected $authToken;

    /**
     * @var string
     */
    protected $class;

    /**
     * @var string
     */
    protected $method;

    /**
     * @var string
     * @Exclude
     */
    protected $responseClass;

	/**
	 * Request constructor
	 * @throws \ReflectionException
	 */
	public function __construct()
	{
		if (null === $this->getMethod()) {
			$this->setMethod((new \ReflectionClass($this))->getShortName());
		}
	}

    /**
     * @return string
     */
    public function getAuthLogin()
    {
        return $this->authLogin;
    }

    /**
     * @param string $authLogin
     * @return $this
     */
    public function setAuthLogin($authLogin)
    {
        $this->authLogin = (string) $authLogin;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthToken()
    {
        return $this->authToken;
    }

    /**
     * @param string $authToken
     * @return $this
     */
    public function setAuthToken($authToken)
    {
        $this->authToken = (string) $authToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param string $class
     * @return $this
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $shortName
     * @return $this
     */
    public function setMethod($shortName)
    {
        $this->method = $this->uppercaseToUnderscore($shortName);
        return $this;
    }

    /**
     * @return string
     */
    public function getResponseClass()
    {
        return $this->responseClass;
    }

    /**
     * @param string $responseClass
     * @return $this
     */
    public function setResponseClass($responseClass)
    {
        $this->responseClass = (string) $responseClass;
        return $this;
    }

    /**
     * @param $str
     * @return string
     */
    protected function uppercaseToUnderscore($str)
    {
        return strtolower(preg_replace("/(?<=[a-zA-Z])(?=[A-Z])/", "_", $str));
    }
}