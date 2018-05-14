<?php

namespace AdmTools\UApi\Entity\Dns\Domain;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class Zone
 * AdmTools\UApi\Entity\Dns\Domain
 */
class Zone
{
    /**
     * @var int
     * @Type("int")
     */
    protected $id;

    /**
     * @var ZoneClass
     * @Type("AdmTools\UApi\Entity\Dns\Domain\ZoneClass")
     */
    protected $class;

    /**
     * @var string
     * @Type("string")
     */
    protected $name;

    /**
     * @var float
     * @Type("float")
     */
    protected $price;

    /**
     * @var float
     * @Type("float")
     */
    protected $priceBase;

    /**
     * @var float
     * @Type("float")
     */
    protected $priceBronze;

    /**
     * @var float
     * @Type("float")
     */
    protected $priceSilver;

    /**
     * @var float
     * @Type("float")
     */
    protected $priceGold;

    /**
     * @var float
     * @Type("float")
     */
    protected $pricePlatinum;

    /**
     * @var float
     * @Type("float")
     */
    protected $priceTransfer;

    /**
     * @var float
     * @Type("float")
     */
    protected $priceRedemption;

    /**
     * @var boolean
     * @Type("boolean")
     */
    protected $isAction;

    /**
     * @var string
     * @Type("string")
     */
    protected $actionComment;

    /**
     * @var string
     * @Type("string")
	 * @SerializedName("action_start_dtime")
     */
    protected $actionStartDTime;

    /**
     * @var string
     * @Type("string")
	 * @SerializedName("action_finish_dtime")
     */
    protected $actionFinishDTime;

    /**
     * @var float
     * @Type("float")
     */
    protected $priceAction;

    /**
     * @var boolean
     * @Type("boolean")
     */
    protected $allowIdn;

    /**
     * @var boolean
     * @Type("boolean")
     */
    protected $isPaidTransfer;

    /**
     * @var boolean
     * @Type("boolean")
     */
    protected $registrationAvailable;

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
	 * @return ZoneClass
	 */
	public function getClass()
	{
		return $this->class;
	}

	/**
	 * @param ZoneClass $class
	 * @return $this
	 */
	public function setClass(ZoneClass $class)
	{
		$this->class = $class;
		return $this;
	}

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = (string) $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = (float) $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceBase()
    {
        return $this->priceBase;
    }

    /**
     * @param float $priceBase
     * @return $this
     */
    public function setPriceBase($priceBase)
    {
        $this->priceBase = (float) $priceBase;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceBronze()
    {
        return $this->priceBronze;
    }

    /**
     * @param float $priceBronze
     * @return $this
     */
    public function setPriceBronze($priceBronze)
    {
        $this->priceBronze = (float) $priceBronze;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceSilver()
    {
        return $this->priceSilver;
    }

    /**
     * @param float $priceSilver
     * @return $this
     */
    public function setPriceSilver($priceSilver)
    {
        $this->priceSilver = (float) $priceSilver;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceGold()
    {
        return $this->priceGold;
    }

    /**
     * @param float $priceGold
     * @return $this
     */
    public function setPriceGold($priceGold)
    {
        $this->priceGold = (float) $priceGold;
        return $this;
    }

    /**
     * @return float
     */
    public function getPricePlatinum()
    {
        return $this->pricePlatinum;
    }

    /**
     * @param float $pricePlatinum
     * @return $this
     */
    public function setPricePlatinum($pricePlatinum)
    {
        $this->pricePlatinum = (float) $pricePlatinum;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceTransfer()
    {
        return $this->priceTransfer;
    }

    /**
     * @param float $priceTransfer
     * @return $this
     */
    public function setPriceTransfer($priceTransfer)
    {
        $this->priceTransfer = (float) $priceTransfer;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceRedemption()
    {
        return $this->priceRedemption;
    }

    /**
     * @param float $priceRedemption
     * @return $this
     */
    public function setPriceRedemption($priceRedemption)
    {
        $this->priceRedemption = (float) $priceRedemption;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isAction()
    {
        return $this->isAction;
    }

    /**
     * @param boolean $isAction
     * @return $this
     */
    public function setIsAction($isAction)
    {
        $this->isAction = (boolean) $isAction;
        return $this;
    }

    /**
     * @return string
     */
    public function getActionComment()
    {
        return $this->actionComment;
    }

    /**
     * @param string $actionComment
     * @return $this
     */
    public function setActionComment($actionComment)
    {
        $this->actionComment = (string) $actionComment;
        return $this;
    }

	/**
	 * @return string
	 */
	public function getActionStartDTime()
	{
		return $this->actionStartDTime;
	}

	/**
	 * @param string $actionStartDTime
	 * @return $this
	 */
	public function setActionStartDTime($actionStartDTime)
	{
		$this->actionStartDTime = (string) $actionStartDTime;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getActionFinishDTime()
	{
		return $this->actionFinishDTime;
	}

	/**
	 * @param string $actionFinishDTime
	 * @return $this
	 */
	public function setActionFinishDTime($actionFinishDTime)
	{
		$this->actionFinishDTime = (string) $actionFinishDTime;
		return $this;
	}

    /**
     * @return float
     */
    public function getPriceAction()
    {
        return $this->priceAction;
    }

    /**
     * @param float $priceAction
     * @return $this
     */
    public function setPriceAction($priceAction)
    {
        $this->priceAction = (float) $priceAction;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isAllowIdn()
    {
        return $this->allowIdn;
    }

    /**
     * @param boolean $allowIdn
     * @return $this
     */
    public function setAllowIdn($allowIdn)
    {
        $this->allowIdn = (boolean) $allowIdn;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isPaidTransfer()
    {
        return $this->isPaidTransfer;
    }

    /**
     * @param boolean $isPaidTransfer
     * @return $this
     */
    public function setIsPaidTransfer($isPaidTransfer)
    {
        $this->isPaidTransfer = (boolean) $isPaidTransfer;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isRegistrationAvailable()
    {
        return $this->registrationAvailable;
    }

    /**
     * @param boolean $registrationAvailable
     * @return $this
     */
    public function setRegistrationAvailable($registrationAvailable)
    {
        $this->registrationAvailable = (boolean) $registrationAvailable;
        return $this;
    }
}