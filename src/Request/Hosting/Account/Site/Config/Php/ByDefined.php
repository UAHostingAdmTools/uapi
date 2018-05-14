<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site\Config\Php;

use AdmTools\UApi\Request\Hosting\Account\Site\Config\Host;
use AdmTools\UApi\Response;

/**
 * Class ByDefined
 * AdmTools\UApi\Request\Hosting\Account\Site\Config\Php
 */
class ByDefined extends Host
{
	const TEMPLATE_JOOMLA_2 = 'joomla2';
	const TEMPLATE_JOOMLA_3 = 'joomla3';
	const TEMPLATE_JOOMLA_3_5 = 'joomla35';
	const TEMPLATE_WORDPRESS_3 = 'wordpress3';
	const TEMPLATE_WORDPRESS_4 = 'wordpress4';
	const TEMPLATE_DRUPAL_6 = 'drupal6';
	const TEMPLATE_DRUPAL_7 = 'drupal7';
	const TEMPLATE_MOTO_CMS = 'motocms';
	const TEMPLATE_SHOP_CMS = 'shopcms';
	const TEMPLATE_PHALCON = 'phalcon';
	const TEMPLATE_PHALCON_3 = 'phalcon3';

    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Php\ByDefined::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_php';

    /**
     * @var string
     */
    protected $source;

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = (string) $source;
        return $this;
    }
}