<?php

namespace AdmTools\UApi\Entity\Billing;

use JMS\Serializer\Annotation\Type;

/**
 * Class Invoice
 * AdmTools\UApi\Entity\Billing
 */
class Invoice
{
	const STATUS_INIT = 'init';
	const STATUS_PAID = 'paid';
	const STATUS_CANCELLED = 'cancelled';
	const STATUS_PROCESSING = 'processing';

	/**
	 * @var int
	 * @Type("int")
	 */
	protected $id;

	/**
	 * @var string
	 * @Type("string")
	 */
	protected $number;

	/**
	 * @var float
	 * @Type("float")
	 */
	protected $sum;

	/**
	 * @var float
	 * @Type("float")
	 */
	protected $refund;

	/**
	 * @var string
	 * @Type("string")
	 */
	protected $currency;

	/**
	 * @var string
	 * @Type("string")
	 */
	protected $purpose;

	/**
	 * @var string
	 * @Type("string")
	 */
	protected $status;

	/**
	 * @var string
	 * @Type("string")
	 */
	protected $date;

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
	public function getNumber()
	{
		return $this->number;
	}

	/**
	 * @param string $number
	 * @return $this
	 */
	public function setNumber($number)
	{
		$this->number = (string) $number;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getSum()
	{
		return $this->sum;
	}

	/**
	 * @param float $sum
	 * @return $this
	 */
	public function setSum($sum)
	{
		$this->sum = (float) $sum;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getRefund()
	{
		return $this->refund;
	}

	/**
	 * @param float $refund
	 * @return $this
	 */
	public function setRefund($refund)
	{
		$this->refund = (float) $refund;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCurrency()
	{
		return $this->currency;
	}

	/**
	 * @param string $currency
	 * @return $this
	 */
	public function setCurrency($currency)
	{
		$this->currency = (string) $currency;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPurpose()
	{
		return $this->purpose;
	}

	/**
	 * @param string $purpose
	 * @return $this
	 */
	public function setPurpose($purpose)
	{
		$this->purpose = (string) $purpose;
		return $this;
	}

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
	public function getDate()
	{
		return $this->date;
	}

	/**
	 * @param string $date
	 * @return $this
	 */
	public function setDate($date)
	{
		$this->date = (string) $date;
		return $this;
	}
}