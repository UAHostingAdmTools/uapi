<?php

namespace AdmTools\UApi\Entity\Hosting\Mailbox;

use JMS\Serializer\Annotation\Type;

/**
 * Class Autoresponder
 * AdmTools\UApi\Entity\Hosting\Mailbox
 */
class Autoresponder
{
    /**
     * @var int
     * @Type("int")
     */
    protected $enabled;

    /**
     * @var string
     * @Type("string")
     */
    protected $title;

    /**
     * @var string
     * @Type("string")
     */
    protected $text;

	/**
	 * @return int
	 */
	public function getEnabled()
	{
		return $this->enabled;
	}

	/**
	 * @param int $enabled
	 * @return $this
	 */
	public function setEnabled($enabled)
	{
		$this->enabled = (int) $enabled;
		return $this;
	}

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = (string) $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = (string) $text;
        return $this;
    }
}