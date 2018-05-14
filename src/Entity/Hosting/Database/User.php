<?php

namespace AdmTools\UApi\Entity\Hosting\Database;

use JMS\Serializer\Annotation\Type;

/**
 * Class User
 * AdmTools\UApi\Entity\Hosting\Database
 */
class User
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
     * @var array
     * @Type("array")
     */
    protected $privileges;

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
}