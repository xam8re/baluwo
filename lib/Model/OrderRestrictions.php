<?php
/**
 * OrderRestrictions
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
 * OrderRestrictions Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderRestrictions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderRestrictions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'min_cash_power_order_amount_eur' => 'double',
        'max_cash_power_order_amount_eur' => 'double',
        'min_air_time_order_amount_eur' => 'double',
        'max_air_time_order_amount_eur' => 'double',
        'min_bill_order_amount_eur' => 'double',
        'max_bill_order_amount_eur' => 'double',
        'min_gift_card_order_amount_eur' => 'double',
        'max_gift_card_order_amount_eur' => 'double',
        'food_restrictions' => '\Swagger\Client\Model\StoreRestrictions',
        'construction_restrictions' => '\Swagger\Client\Model\StoreRestrictions',
        'fabric_restrictions' => '\Swagger\Client\Model\StoreRestrictions',
        'ram_restrictions' => '\Swagger\Client\Model\StoreRestrictions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'min_cash_power_order_amount_eur' => 'double',
        'max_cash_power_order_amount_eur' => 'double',
        'min_air_time_order_amount_eur' => 'double',
        'max_air_time_order_amount_eur' => 'double',
        'min_bill_order_amount_eur' => 'double',
        'max_bill_order_amount_eur' => 'double',
        'min_gift_card_order_amount_eur' => 'double',
        'max_gift_card_order_amount_eur' => 'double',
        'food_restrictions' => null,
        'construction_restrictions' => null,
        'fabric_restrictions' => null,
        'ram_restrictions' => null
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
        'min_cash_power_order_amount_eur' => 'minCashPowerOrderAmountEUR',
        'max_cash_power_order_amount_eur' => 'maxCashPowerOrderAmountEUR',
        'min_air_time_order_amount_eur' => 'minAirTimeOrderAmountEUR',
        'max_air_time_order_amount_eur' => 'maxAirTimeOrderAmountEUR',
        'min_bill_order_amount_eur' => 'minBillOrderAmountEUR',
        'max_bill_order_amount_eur' => 'maxBillOrderAmountEUR',
        'min_gift_card_order_amount_eur' => 'minGiftCardOrderAmountEUR',
        'max_gift_card_order_amount_eur' => 'maxGiftCardOrderAmountEUR',
        'food_restrictions' => 'foodRestrictions',
        'construction_restrictions' => 'constructionRestrictions',
        'fabric_restrictions' => 'fabricRestrictions',
        'ram_restrictions' => 'ramRestrictions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'min_cash_power_order_amount_eur' => 'setMinCashPowerOrderAmountEur',
        'max_cash_power_order_amount_eur' => 'setMaxCashPowerOrderAmountEur',
        'min_air_time_order_amount_eur' => 'setMinAirTimeOrderAmountEur',
        'max_air_time_order_amount_eur' => 'setMaxAirTimeOrderAmountEur',
        'min_bill_order_amount_eur' => 'setMinBillOrderAmountEur',
        'max_bill_order_amount_eur' => 'setMaxBillOrderAmountEur',
        'min_gift_card_order_amount_eur' => 'setMinGiftCardOrderAmountEur',
        'max_gift_card_order_amount_eur' => 'setMaxGiftCardOrderAmountEur',
        'food_restrictions' => 'setFoodRestrictions',
        'construction_restrictions' => 'setConstructionRestrictions',
        'fabric_restrictions' => 'setFabricRestrictions',
        'ram_restrictions' => 'setRamRestrictions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'min_cash_power_order_amount_eur' => 'getMinCashPowerOrderAmountEur',
        'max_cash_power_order_amount_eur' => 'getMaxCashPowerOrderAmountEur',
        'min_air_time_order_amount_eur' => 'getMinAirTimeOrderAmountEur',
        'max_air_time_order_amount_eur' => 'getMaxAirTimeOrderAmountEur',
        'min_bill_order_amount_eur' => 'getMinBillOrderAmountEur',
        'max_bill_order_amount_eur' => 'getMaxBillOrderAmountEur',
        'min_gift_card_order_amount_eur' => 'getMinGiftCardOrderAmountEur',
        'max_gift_card_order_amount_eur' => 'getMaxGiftCardOrderAmountEur',
        'food_restrictions' => 'getFoodRestrictions',
        'construction_restrictions' => 'getConstructionRestrictions',
        'fabric_restrictions' => 'getFabricRestrictions',
        'ram_restrictions' => 'getRamRestrictions'
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
        $this->container['min_cash_power_order_amount_eur'] = isset($data['min_cash_power_order_amount_eur']) ? $data['min_cash_power_order_amount_eur'] : null;
        $this->container['max_cash_power_order_amount_eur'] = isset($data['max_cash_power_order_amount_eur']) ? $data['max_cash_power_order_amount_eur'] : null;
        $this->container['min_air_time_order_amount_eur'] = isset($data['min_air_time_order_amount_eur']) ? $data['min_air_time_order_amount_eur'] : null;
        $this->container['max_air_time_order_amount_eur'] = isset($data['max_air_time_order_amount_eur']) ? $data['max_air_time_order_amount_eur'] : null;
        $this->container['min_bill_order_amount_eur'] = isset($data['min_bill_order_amount_eur']) ? $data['min_bill_order_amount_eur'] : null;
        $this->container['max_bill_order_amount_eur'] = isset($data['max_bill_order_amount_eur']) ? $data['max_bill_order_amount_eur'] : null;
        $this->container['min_gift_card_order_amount_eur'] = isset($data['min_gift_card_order_amount_eur']) ? $data['min_gift_card_order_amount_eur'] : null;
        $this->container['max_gift_card_order_amount_eur'] = isset($data['max_gift_card_order_amount_eur']) ? $data['max_gift_card_order_amount_eur'] : null;
        $this->container['food_restrictions'] = isset($data['food_restrictions']) ? $data['food_restrictions'] : null;
        $this->container['construction_restrictions'] = isset($data['construction_restrictions']) ? $data['construction_restrictions'] : null;
        $this->container['fabric_restrictions'] = isset($data['fabric_restrictions']) ? $data['fabric_restrictions'] : null;
        $this->container['ram_restrictions'] = isset($data['ram_restrictions']) ? $data['ram_restrictions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets min_cash_power_order_amount_eur
     *
     * @return double
     */
    public function getMinCashPowerOrderAmountEur()
    {
        return $this->container['min_cash_power_order_amount_eur'];
    }

    /**
     * Sets min_cash_power_order_amount_eur
     *
     * @param double $min_cash_power_order_amount_eur min_cash_power_order_amount_eur
     *
     * @return $this
     */
    public function setMinCashPowerOrderAmountEur($min_cash_power_order_amount_eur)
    {
        $this->container['min_cash_power_order_amount_eur'] = $min_cash_power_order_amount_eur;

        return $this;
    }

    /**
     * Gets max_cash_power_order_amount_eur
     *
     * @return double
     */
    public function getMaxCashPowerOrderAmountEur()
    {
        return $this->container['max_cash_power_order_amount_eur'];
    }

    /**
     * Sets max_cash_power_order_amount_eur
     *
     * @param double $max_cash_power_order_amount_eur max_cash_power_order_amount_eur
     *
     * @return $this
     */
    public function setMaxCashPowerOrderAmountEur($max_cash_power_order_amount_eur)
    {
        $this->container['max_cash_power_order_amount_eur'] = $max_cash_power_order_amount_eur;

        return $this;
    }

    /**
     * Gets min_air_time_order_amount_eur
     *
     * @return double
     */
    public function getMinAirTimeOrderAmountEur()
    {
        return $this->container['min_air_time_order_amount_eur'];
    }

    /**
     * Sets min_air_time_order_amount_eur
     *
     * @param double $min_air_time_order_amount_eur min_air_time_order_amount_eur
     *
     * @return $this
     */
    public function setMinAirTimeOrderAmountEur($min_air_time_order_amount_eur)
    {
        $this->container['min_air_time_order_amount_eur'] = $min_air_time_order_amount_eur;

        return $this;
    }

    /**
     * Gets max_air_time_order_amount_eur
     *
     * @return double
     */
    public function getMaxAirTimeOrderAmountEur()
    {
        return $this->container['max_air_time_order_amount_eur'];
    }

    /**
     * Sets max_air_time_order_amount_eur
     *
     * @param double $max_air_time_order_amount_eur max_air_time_order_amount_eur
     *
     * @return $this
     */
    public function setMaxAirTimeOrderAmountEur($max_air_time_order_amount_eur)
    {
        $this->container['max_air_time_order_amount_eur'] = $max_air_time_order_amount_eur;

        return $this;
    }

    /**
     * Gets min_bill_order_amount_eur
     *
     * @return double
     */
    public function getMinBillOrderAmountEur()
    {
        return $this->container['min_bill_order_amount_eur'];
    }

    /**
     * Sets min_bill_order_amount_eur
     *
     * @param double $min_bill_order_amount_eur min_bill_order_amount_eur
     *
     * @return $this
     */
    public function setMinBillOrderAmountEur($min_bill_order_amount_eur)
    {
        $this->container['min_bill_order_amount_eur'] = $min_bill_order_amount_eur;

        return $this;
    }

    /**
     * Gets max_bill_order_amount_eur
     *
     * @return double
     */
    public function getMaxBillOrderAmountEur()
    {
        return $this->container['max_bill_order_amount_eur'];
    }

    /**
     * Sets max_bill_order_amount_eur
     *
     * @param double $max_bill_order_amount_eur max_bill_order_amount_eur
     *
     * @return $this
     */
    public function setMaxBillOrderAmountEur($max_bill_order_amount_eur)
    {
        $this->container['max_bill_order_amount_eur'] = $max_bill_order_amount_eur;

        return $this;
    }

    /**
     * Gets min_gift_card_order_amount_eur
     *
     * @return double
     */
    public function getMinGiftCardOrderAmountEur()
    {
        return $this->container['min_gift_card_order_amount_eur'];
    }

    /**
     * Sets min_gift_card_order_amount_eur
     *
     * @param double $min_gift_card_order_amount_eur min_gift_card_order_amount_eur
     *
     * @return $this
     */
    public function setMinGiftCardOrderAmountEur($min_gift_card_order_amount_eur)
    {
        $this->container['min_gift_card_order_amount_eur'] = $min_gift_card_order_amount_eur;

        return $this;
    }

    /**
     * Gets max_gift_card_order_amount_eur
     *
     * @return double
     */
    public function getMaxGiftCardOrderAmountEur()
    {
        return $this->container['max_gift_card_order_amount_eur'];
    }

    /**
     * Sets max_gift_card_order_amount_eur
     *
     * @param double $max_gift_card_order_amount_eur max_gift_card_order_amount_eur
     *
     * @return $this
     */
    public function setMaxGiftCardOrderAmountEur($max_gift_card_order_amount_eur)
    {
        $this->container['max_gift_card_order_amount_eur'] = $max_gift_card_order_amount_eur;

        return $this;
    }

    /**
     * Gets food_restrictions
     *
     * @return \Swagger\Client\Model\StoreRestrictions
     */
    public function getFoodRestrictions()
    {
        return $this->container['food_restrictions'];
    }

    /**
     * Sets food_restrictions
     *
     * @param \Swagger\Client\Model\StoreRestrictions $food_restrictions food_restrictions
     *
     * @return $this
     */
    public function setFoodRestrictions($food_restrictions)
    {
        $this->container['food_restrictions'] = $food_restrictions;

        return $this;
    }

    /**
     * Gets construction_restrictions
     *
     * @return \Swagger\Client\Model\StoreRestrictions
     */
    public function getConstructionRestrictions()
    {
        return $this->container['construction_restrictions'];
    }

    /**
     * Sets construction_restrictions
     *
     * @param \Swagger\Client\Model\StoreRestrictions $construction_restrictions construction_restrictions
     *
     * @return $this
     */
    public function setConstructionRestrictions($construction_restrictions)
    {
        $this->container['construction_restrictions'] = $construction_restrictions;

        return $this;
    }

    /**
     * Gets fabric_restrictions
     *
     * @return \Swagger\Client\Model\StoreRestrictions
     */
    public function getFabricRestrictions()
    {
        return $this->container['fabric_restrictions'];
    }

    /**
     * Sets fabric_restrictions
     *
     * @param \Swagger\Client\Model\StoreRestrictions $fabric_restrictions fabric_restrictions
     *
     * @return $this
     */
    public function setFabricRestrictions($fabric_restrictions)
    {
        $this->container['fabric_restrictions'] = $fabric_restrictions;

        return $this;
    }

    /**
     * Gets ram_restrictions
     *
     * @return \Swagger\Client\Model\StoreRestrictions
     */
    public function getRamRestrictions()
    {
        return $this->container['ram_restrictions'];
    }

    /**
     * Sets ram_restrictions
     *
     * @param \Swagger\Client\Model\StoreRestrictions $ram_restrictions ram_restrictions
     *
     * @return $this
     */
    public function setRamRestrictions($ram_restrictions)
    {
        $this->container['ram_restrictions'] = $ram_restrictions;

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


