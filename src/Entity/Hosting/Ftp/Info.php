<?php

namespace AdmTools\UApi\Entity\Hosting\Ftp;

use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * AdmTools\UApi\Entity\Hosting\Ftp
 */
class Info
{
    /**
     * @var int
     * @Type("int")
     */
    protected $id;

    /**
     * @var string
     * @Type("string")
     */
    protected $login;

    /**
     * @var string
     * @Type("string")
     */
    protected $password;

    /**
     * @var string
     * @Type("string")
     */
    protected $homedir;

    /**
     * @var boolean
     * @Type("boolean")
     */
    protected $readonly;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = (int) $id;
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
    public function getHomedir()
    {
        return $this->homedir;
    }

    /**
     * @param string $homedir
     * @return $this
     */
    public function setHomedir($homedir)
    {
        $this->homedir = (string) $homedir;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isReadonly()
    {
        return $this->readonly;
    }

    /**
     * @param boolean $readonly
     * @return $this
     */
    public function setReadonly($readonly)
    {
        $this->readonly = (boolean) $readonly;
        return $this;
    }
}