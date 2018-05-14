<?php

namespace AdmTools\UApi;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SkipWhenEmpty;

/**
 * Class Response
 * AdmTools\UApi
 */
abstract class Response
{
	const STATUS_SUCCESS = 'success';
	const STATUS_ERROR = 'error';

    /**
     * @var string
     * @Type("string")
     */
    protected $status;

    /**
     * @var string
     * @Type("string")
     * @SkipWhenEmpty
     */
    protected $message;

    /**
     * @var mixed
     */
    protected $data;

    /**
     * @var array
     * @Type("array")
     * @SkipWhenEmpty
     */
    protected $notes;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = (string) $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = (string) $message;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return array
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param array $notes
     * @return $this
     */
    public function setNotes(array $notes)
    {
        $this->notes = $notes;
        return $this;
    }

	/**
	 * @return bool
	 */
    public function hasError()
    {
        return !$this->getStatus();
    }
}