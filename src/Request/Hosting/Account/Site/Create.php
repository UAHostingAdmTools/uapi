<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site;

use AdmTools\UApi\Request\Hosting\Account\Site;
use AdmTools\UApi\Response;

/**
 * Class Create
 * AdmTools\UApi\Request\Hosting\Account\Site
 */
class Create extends Site
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Create::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site';

	/**
	 * @var string
	 */
    protected $method = 'site_create';
}