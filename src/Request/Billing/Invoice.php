<?php

namespace AdmTools\UApi\Request\Billing;

use AdmTools\UApi\Request;
use AdmTools\UApi\Response;

/**
 * Class Info
 * AdmTools\UApi\Request\Billing\Invoice
 */
class Invoice extends Request
{
	/**
	 * @var string
	 */
	protected $invoice;

	/**
	 * @return string
	 */
	public function getInvoice()
	{
		return $this->invoice;
	}

	/**
	 * @param string $invoice
	 * @return $this
	 */
	public function setInvoice($invoice)
	{
		$this->invoice = (string) $invoice;
		return $this;
	}
}