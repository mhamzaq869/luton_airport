<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * BalancePaymentDetails Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class BalancePaymentDetails implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'account_id' => 'string',
        'status' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'account_id' => 'account_id',
        'status' => 'status'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'account_id' => 'setAccountId',
        'status' => 'setStatus'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'account_id' => 'getAccountId',
        'status' => 'getStatus'
    );
  
    /**
      * $account_id ID for the account used to fund the payment.
      * @var string
      */
    protected $account_id;
    /**
      * $status The balance payment’s current state. Can be `COMPLETED` or `FAILED`.
      * @var string
      */
    protected $status;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["account_id"])) {
              $this->account_id = $data["account_id"];
            } else {
              $this->account_id = null;
            }
            if (isset($data["status"])) {
              $this->status = $data["status"];
            } else {
              $this->status = null;
            }
        }
    }
    /**
     * Gets account_id
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }
  
    /**
     * Sets account_id
     * @param string $account_id ID for the account used to fund the payment.
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->account_id = $account_id;
        return $this;
    }
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status The balance payment’s current state. Can be `COMPLETED` or `FAILED`.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}