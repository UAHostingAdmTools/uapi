<?php

namespace AdmTools\UApi\Request\Hosting\Account\Site\Config\Ws;

use AdmTools\UApi\Request\Hosting\Account\Site\Config\Host;
use AdmTools\UApi\Response;

/**
 * Class Optimize
 * AdmTools\UApi\Request\Hosting\Account\Site\Config\Ws
 */
class Optimize extends Host
{
	const COMBINE_JAVASCRIPT = 'combine_javascript';
	const COMBINE_CSS = 'combine_css';
	const MOVE_CSS_ABOVE_SCRIPTS = 'move_css_above_scripts';
	const INSERT_DNS_PREFETCH = 'insert_dns_prefetch';
	const REWRITE_JAVASCRIPT = 'rewrite_javascript';
	const REWRITE_CSS = 'rewrite_css';
	const REWRITE_STYLE_ATTRIBUTES_WITH_URL = 'rewrite_style_attributes_with_url';
	const LAZYLOAD_IMAGES = 'lazyload_images';
	const COLLAPSE_WHITESPACE = 'collapse_whitespace';
	const MOVE_CSS_TO_HEAD = 'move_css_to_head';
	const REMOVE_QUOTES = 'remove_quotes';
	const INLINE_CSS = 'inline_css';
	const INLINE_JAVASCRIPT = 'inline_javascript';
	const TRIM_URLS = 'trim_urls';
	const CONVERT_META_TAGS = 'convert_meta_tags';
	const EXTEND_CACHE_IMAGES = 'extend_cache_images';
	const EXTEND_CACHE_SCRIPTS = 'extend_cache_scripts';
	const EXTEND_CACHE_CSS = 'extend_cache_css';

    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Ws\Optimize::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_ws';

    /**
     * @var array
     */
    protected $optimize;

    /**
     * @return array
     */
    public function getOptimize()
    {
        return $this->optimize;
    }

    /**
     * @param array $optimize
     * @return $this
     */
    public function setOptimize(array $optimize)
    {
        $this->optimize = $optimize;
        return $this;
    }
}