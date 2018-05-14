<?php

namespace AdmTools\UApi\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class Report
 * @package AdmTools\UApi\Entity
 */
class Report
{
	/**
	 * @var string
	 * @Type("string")
	 */
	protected $status;

	/**
	 * @var string
	 * @Type("string")
	 */
	protected $message;

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
}