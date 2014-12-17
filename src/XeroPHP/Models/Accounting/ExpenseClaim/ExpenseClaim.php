<?php

namespace XeroPHP\Models\Accounting\ExpenseClaim;

use XeroPHP\Remote;


class ExpenseClaim extends Remote\Object {

    /**
     * Xero generated unique identifier for an expense claim
     *
     * @property string ExpenseClaimID
     */

    /**
     * Current status of an expense claim – see status types
     *
     * @property string Status
     */

    /**
     * Last modified date UTC format
     *
     * @property \DateTime UpdatedDateUTC
     */

    /**
     * The total of an expense claim being paid
     *
     * @property float Total
     */

    /**
     * The amount due to be paid for an expense claim
     *
     * @property float AmountDue
     */

    /**
     * The amount still to pay for an expense claim
     *
     * @property float AmountPaid
     */

    /**
     * The date when the expense claim is due to be paid YYYY-MM-DD
     *
     * @property \DateTime PaymentDueDate
     */

    /**
     * The date the expense claim will be reported in Xero YYYY-MM-DD
     *
     * @property \DateTime ReportingDate
     */

    /**
     * The Xero identifier for the Receipt e.g. e59a2c7f-1306-4078-a0f3-73537afcbba9
     *
     * @property string ReceiptID
     */



    /*
    * Get the resource uri of the class (Contacts) etc
    *
    * @return string
    */
    public static function getResourceURI(){
        return null;
    }


    /*
    * Get the root node name.  Just the unqualified classname
    *
    * @return string
    */
    public static function getRootNodeName(){
        return 'ExpenseClaim';
    }


    /*
    * Get the guid property
    *
    * @return string
    */
    public static function getGUIDProperty(){
        return 'ExpenseClaimID';
    }


    /**
    * Get the stem of the API (core.xro) etc
    *
    * @return string|null
    */
    public static function getAPIStem(){
        return Remote\URL::API_CORE;
    }


    /*
    * Get the supported methods
    */
    public static function getSupportedMethods(){
        return array(
        );
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *
     * @return array
     */
    public static function getProperties(){
        return array(
            'ExpenseClaimID' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'Status' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'UpdatedDateUTC' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false),
            'Total' => array (false, self::PROPERTY_TYPE_FLOAT, null, false),
            'AmountDue' => array (false, self::PROPERTY_TYPE_FLOAT, null, false),
            'AmountPaid' => array (false, self::PROPERTY_TYPE_FLOAT, null, false),
            'PaymentDueDate' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false),
            'ReportingDate' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false),
            'ReceiptID' => array (true, self::PROPERTY_TYPE_STRING, null, false)
        );
    }


    /**
     * @return string
     */
    public function getExpenseClaimID(){
        return $this->_data['ExpenseClaimID'];
    }

    /**
     * @param string $value
     * @return ExpenseClaim
     */
    public function setExpenseClaimID($value){
        $this->propertyUpdated('ExpenseClaimID', $value);
        $this->_data['ExpenseClaimID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(){
        return $this->_data['Status'];
    }

    /**
     * @param string $value
     * @return ExpenseClaim
     */
    public function setStatus($value){
        $this->propertyUpdated('Status', $value);
        $this->_data['Status'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedDateUTC(){
        return $this->_data['UpdatedDateUTC'];
    }

    /**
     * @param \DateTime $value
     * @return ExpenseClaim
     */
    public function setUpdatedDateUTC(\DateTime $value){
        $this->propertyUpdated('UpdatedDateUTC', $value);
        $this->_data['UpdatedDateUTC'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(){
        return $this->_data['Total'];
    }

    /**
     * @param float $value
     * @return ExpenseClaim
     */
    public function setTotal($value){
        $this->propertyUpdated('Total', $value);
        $this->_data['Total'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountDue(){
        return $this->_data['AmountDue'];
    }

    /**
     * @param float $value
     * @return ExpenseClaim
     */
    public function setAmountDue($value){
        $this->propertyUpdated('AmountDue', $value);
        $this->_data['AmountDue'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountPaid(){
        return $this->_data['AmountPaid'];
    }

    /**
     * @param float $value
     * @return ExpenseClaim
     */
    public function setAmountPaid($value){
        $this->propertyUpdated('AmountPaid', $value);
        $this->_data['AmountPaid'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPaymentDueDate(){
        return $this->_data['PaymentDueDate'];
    }

    /**
     * @param \DateTime $value
     * @return ExpenseClaim
     */
    public function setPaymentDueDate(\DateTime $value){
        $this->propertyUpdated('PaymentDueDate', $value);
        $this->_data['PaymentDueDate'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReportingDate(){
        return $this->_data['ReportingDate'];
    }

    /**
     * @param \DateTime $value
     * @return ExpenseClaim
     */
    public function setReportingDate(\DateTime $value){
        $this->propertyUpdated('ReportingDate', $value);
        $this->_data['ReportingDate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiptID(){
        return $this->_data['ReceiptID'];
    }

    /**
     * @param string $value
     * @return ExpenseClaim
     */
    public function setReceiptID($value){
        $this->propertyUpdated('ReceiptID', $value);
        $this->_data['ReceiptID'] = $value;
        return $this;
    }


}