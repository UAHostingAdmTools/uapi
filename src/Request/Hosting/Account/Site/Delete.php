<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site;

use AdmTools\UApi\Request\Hosting\Account\Site;
use AdmTools\UApi\Response;

/**
 * Class Delete
 * AdmTools\UApi\Request\Hosting\Site
 */
class Delete extends Site
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Delete::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site';

	/**
	 * @var string
	 */
    protected $method = 'site_delete';
}