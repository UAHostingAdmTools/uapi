<?php

namespace AdmTools\UApi\Entity\Dns\Record;

use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * AdmTools\UApi\Entity\Dns\Record
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
    protected $record;

    /**
     * @var string
     * @Type("string")
     */
    protected $type;

    /**
     * @var int
     * @Type("int")
     */
    protected $priority;

    /**
     * @var string
     * @Type("string")
     */
    protected $data;

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
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * @param string $record
     * @return $this
     */
    public function setRecord($record)
    {
        $this->record = (string) $record;
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
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = (int) $priority;
        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = (string) $data;
        return $this;
    }
}