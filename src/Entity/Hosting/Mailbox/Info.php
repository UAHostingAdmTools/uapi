<?php

namespace AdmTools\UApi\Entity\Hosting\Mailbox;

use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * AdmTools\UApi\Entity\Hosting\Mailbox
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
    protected $name;

    /**
     * @var string
     * @Type("string")
     */
    protected $password;

    /**
     * @var string
     * @Type("string")
     */
    protected $type;

    /**
     * @var string
     * @Type("string")
     */
    protected $autospam;

    /**
     * @var array
     * @Type("array")
     */
    protected $forward;

    /**
     * @var Autoresponder
     * @Type("AdmTools\UApi\Entity\Hosting\Mailbox\Autoresponder")
     */
    protected $autoresponder;

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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = (string) $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getAutospam()
    {
        return $this->autospam;
    }

    /**
     * @param string $autospam
     * @return $this
     */
    public function setAutospam($autospam)
    {
        $this->autospam = (string) $autospam;
        return $this;
    }

    /**
     * @return array
     */
    public function getForward()
    {
        return $this->forward;
    }

    /**
     * @param array $forward
     * @return $this
     */
    public function setForward(array $forward)
    {
        $this->forward = $forward;
        return $this;
    }

    /**
     * @return Autoresponder
     */
    public function getAutoresponder()
    {
        return $this->autoresponder;
    }

    /**
     * @param Autoresponder $autoresponder
     * @return $this
     */
    public function setAutoresponder(Autoresponder $autoresponder)
    {
        $this->autoresponder = $autoresponder;
        return $this;
    }
}