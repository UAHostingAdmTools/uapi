<?php

namespace AdmTools\UApi\Entity\Hosting\Ftp;

use JMS\Serializer\Annotation\Type;

/**
 * Class Create
 * AdmTools\UApi\Entity\Hosting\Ftp
 */
class Create
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
    protected $password;

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
}