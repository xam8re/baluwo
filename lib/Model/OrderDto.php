<?php
/**
 * OrderDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Baluwo External API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.27
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * OrderDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'state' => 'int',
        'total' => 'double',
        'effective_date' => '\DateTime',
        'invoice_number' => 'string',
        'target_currency' => 'string',
        'target_total' => 'double',
        'purchase_total' => 'double',
        'src_currency' => '\Swagger\Client\Model\CurrencyDto',
        'type' => 'string',
        'src_total' => 'double',
        'face_value' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'state' => 'int32',
        'total' => 'double',
        'effective_date' => 'date-time',
        'invoice_number' => null,
        'target_currency' => null,
        'target_total' => 'double',
        'purchase_total' => 'double',
        'src_currency' => null,
        'type' => null,
        'src_total' => 'double',
        'face_value' => 'double'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'state' => 'state',
        'total' => 'total',
        'effective_date' => 'effectiveDate',
        'invoice_number' => 'invoiceNumber',
        'target_currency' => 'targetCurrency',
        'target_total' => 'targetTotal',
        'purchase_total' => 'purchaseTotal',
        'src_currency' => 'srcCurrency',
        'type' => 'type',
        'src_total' => 'srcTotal',
        'face_value' => 'faceValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'state' => 'setState',
        'total' => 'setTotal',
        'effective_date' => 'setEffectiveDate',
        'invoice_number' => 'setInvoiceNumber',
        'target_currency' => 'setTargetCurrency',
        'target_total' => 'setTargetTotal',
        'purchase_total' => 'setPurchaseTotal',
        'src_currency' => 'setSrcCurrency',
        'type' => 'setType',
        'src_total' => 'setSrcTotal',
        'face_value' => 'setFaceValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'state' => 'getState',
        'total' => 'getTotal',
        'effective_date' => 'getEffectiveDate',
        'invoice_number' => 'getInvoiceNumber',
        'target_currency' => 'getTargetCurrency',
        'target_total' => 'getTargetTotal',
        'purchase_total' => 'getPurchaseTotal',
        'src_currency' => 'getSrcCurrency',
        'type' => 'getType',
        'src_total' => 'getSrcTotal',
        'face_value' => 'getFaceValue'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['effective_date'] = isset($data['effective_date']) ? $data['effective_date'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['target_currency'] = isset($data['target_currency']) ? $data['target_currency'] : null;
        $this->container['target_total'] = isset($data['target_total']) ? $data['target_total'] : null;
        $this->container['purchase_total'] = isset($data['purchase_total']) ? $data['purchase_total'] : null;
        $this->container['src_currency'] = isset($data['src_currency']) ? $data['src_currency'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['src_total'] = isset($data['src_total']) ? $data['src_total'] : null;
        $this->container['face_value'] = isset($data['face_value']) ? $data['face_value'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('type', self::$attributeMap, true);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
            $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return int
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param int $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets total
     *
     * @return double
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param double $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {

        if (!is_null($total) && ($total < 0)) {
            throw new \InvalidArgumentException('invalid value for $total when calling OrderDto., must be bigger than or equal to 0.');
        }

        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets effective_date
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->container['effective_date'];
    }

    /**
     * Sets effective_date
     *
     * @param \DateTime $effective_date effective_date
     *
     * @return $this
     */
    public function setEffectiveDate($effective_date)
    {
        $this->container['effective_date'] = $effective_date;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number invoice_number
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets target_currency
     *
     * @return string
     */
    public function getTargetCurrency()
    {
        return $this->container['target_currency'];
    }

    /**
     * Sets target_currency
     *
     * @param string $target_currency target_currency
     *
     * @return $this
     */
    public function setTargetCurrency($target_currency)
    {
        $this->container['target_currency'] = $target_currency;

        return $this;
    }

    /**
     * Gets target_total
     *
     * @return double
     */
    public function getTargetTotal()
    {
        return $this->container['target_total'];
    }

    /**
     * Sets target_total
     *
     * @param double $target_total target_total
     *
     * @return $this
     */
    public function setTargetTotal($target_total)
    {
        $this->container['target_total'] = $target_total;

        return $this;
    }

    /**
     * Gets purchase_total
     *
     * @return double
     */
    public function getPurchaseTotal()
    {
        return $this->container['purchase_total'];
    }

    /**
     * Sets purchase_total
     *
     * @param double $purchase_total purchase_total
     *
     * @return $this
     */
    public function setPurchaseTotal($purchase_total)
    {
        $this->container['purchase_total'] = $purchase_total;

        return $this;
    }

    /**
     * Gets src_currency
     *
     * @return \Swagger\Client\Model\CurrencyDto
     */
    public function getSrcCurrency()
    {
        return $this->container['src_currency'];
    }

    /**
     * Sets src_currency
     *
     * @param \Swagger\Client\Model\CurrencyDto $src_currency src_currency
     *
     * @return $this
     */
    public function setSrcCurrency($src_currency)
    {
        $this->container['src_currency'] = $src_currency;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets src_total
     *
     * @return double
     */
    public function getSrcTotal()
    {
        return $this->container['src_total'];
    }

    /**
     * Sets src_total
     *
     * @param double $src_total src_total
     *
     * @return $this
     */
    public function setSrcTotal($src_total)
    {
        $this->container['src_total'] = $src_total;

        return $this;
    }

    /**
     * Gets face_value
     *
     * @return double
     */
    public function getFaceValue()
    {
        return $this->container['face_value'];
    }

    /**
     * Sets face_value
     *
     * @param double $face_value face_value
     *
     * @return $this
     */
    public function setFaceValue($face_value)
    {
        $this->container['face_value'] = $face_value;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


