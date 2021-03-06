<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileChgSupOfferRequest
 * This class stands for YMobileChgSupOfferRequest originally named ChgSupOfferRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 */
class YMobileChgSupOfferRequest extends YMobileWsdlClass
{
    /**
     * The SubscriberNo
     * Meta informations extracted from the WSDL
     * - maxLength : 20
     * @var string
     */
    public $SubscriberNo;
    /**
     * The OldOfferCode
     * Meta informations extracted from the WSDL
     * - maxLength : 20
     * @var string
     */
    public $OldOfferCode;
    /**
     * The NewOfferCode
     * Meta informations extracted from the WSDL
     * - maxLength : 20
     * @var string
     */
    public $NewOfferCode;
    /**
     * Constructor method for ChgSupOfferRequest
     * @see parent::__construct()
     * @param string $_subscriberNo
     * @param string $_oldOfferCode
     * @param string $_newOfferCode
     * @return YMobileChgSupOfferRequest
     */
    public function __construct($_subscriberNo = NULL,$_oldOfferCode = NULL,$_newOfferCode = NULL)
    {
        parent::__construct(array('SubscriberNo'=>$_subscriberNo,'OldOfferCode'=>$_oldOfferCode,'NewOfferCode'=>$_newOfferCode),false);
    }
    /**
     * Get SubscriberNo value
     * @return string|null
     */
    public function getSubscriberNo()
    {
        return $this->SubscriberNo;
    }
    /**
     * Set SubscriberNo value
     * @param string $_subscriberNo the SubscriberNo
     * @return string
     */
    public function setSubscriberNo($_subscriberNo)
    {
        return ($this->SubscriberNo = $_subscriberNo);
    }
    /**
     * Get OldOfferCode value
     * @return string|null
     */
    public function getOldOfferCode()
    {
        return $this->OldOfferCode;
    }
    /**
     * Set OldOfferCode value
     * @param string $_oldOfferCode the OldOfferCode
     * @return string
     */
    public function setOldOfferCode($_oldOfferCode)
    {
        return ($this->OldOfferCode = $_oldOfferCode);
    }
    /**
     * Get NewOfferCode value
     * @return string|null
     */
    public function getNewOfferCode()
    {
        return $this->NewOfferCode;
    }
    /**
     * Set NewOfferCode value
     * @param string $_newOfferCode the NewOfferCode
     * @return string
     */
    public function setNewOfferCode($_newOfferCode)
    {
        return ($this->NewOfferCode = $_newOfferCode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileChgSupOfferRequest
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
