<?php

namespace AdmTools\UApi\Entity\Hosting\Database;

use JMS\Serializer\Annotation\Type;

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
    protected $name;

    /**
     * @var float
     * @Type("float")
     */
    protected $size;

    /**
     * @var int
     * @Type("int")
     */
    protected $tablesCount;

    /**
     * @var array
     * @Type("array<AdmTools\UApi\Entity\Hosting\Database\User>")
     */
    protected $users;

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
     * @return float
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param float $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = (float) $size;
        return $this;
    }

    /**
     * @return int
     */
    public function getTablesCount()
    {
        return $this->tablesCount;
    }

    /**
     * @param int $tablesCount
     * @return $this
     */
    public function setTablesCount($tablesCount)
    {
        $this->tablesCount = (int) $tablesCount;
        return $this;
    }

    /**
     * @return array
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param array $users
     * @return $this
     */
    public function setUsers(array $users)
    {
        $this->users = $users;
        return $this;
    }

    /**
     * @param User $user
     * @return $this
     */
    public function addUser(User $user)
    {
        $this->users[] = $user;
        return $this;
    }
}