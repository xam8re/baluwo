<?php
/**
 * ProductDto
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
 * ProductDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'units' => 'string',
        'details' => 'string',
        'min_quantity' => 'double',
        'fixed_price' => 'double',
        'country' => '\Swagger\Client\Model\CountryDto',
        'category' => '\Swagger\Client\Model\LongIdDto',
        'img_url' => 'string',
        'open_voucher' => 'bool',
        'voucher' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'units' => null,
        'details' => null,
        'min_quantity' => 'double',
        'fixed_price' => 'double',
        'country' => null,
        'category' => null,
        'img_url' => null,
        'open_voucher' => null,
        'voucher' => null
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
        'name' => 'name',
        'units' => 'units',
        'details' => 'details',
        'min_quantity' => 'minQuantity',
        'fixed_price' => 'fixedPrice',
        'country' => 'country',
        'category' => 'category',
        'img_url' => 'imgUrl',
        'open_voucher' => 'openVoucher',
        'voucher' => 'voucher'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'units' => 'setUnits',
        'details' => 'setDetails',
        'min_quantity' => 'setMinQuantity',
        'fixed_price' => 'setFixedPrice',
        'country' => 'setCountry',
        'category' => 'setCategory',
        'img_url' => 'setImgUrl',
        'open_voucher' => 'setOpenVoucher',
        'voucher' => 'setVoucher'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'units' => 'getUnits',
        'details' => 'getDetails',
        'min_quantity' => 'getMinQuantity',
        'fixed_price' => 'getFixedPrice',
        'country' => 'getCountry',
        'category' => 'getCategory',
        'img_url' => 'getImgUrl',
        'open_voucher' => 'getOpenVoucher',
        'voucher' => 'getVoucher'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['units'] = isset($data['units']) ? $data['units'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['min_quantity'] = isset($data['min_quantity']) ? $data['min_quantity'] : null;
        $this->container['fixed_price'] = isset($data['fixed_price']) ? $data['fixed_price'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['img_url'] = isset($data['img_url']) ? $data['img_url'] : null;
        $this->container['open_voucher'] = isset($data['open_voucher']) ? $data['open_voucher'] : null;
        $this->container['voucher'] = isset($data['voucher']) ? $data['voucher'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets units
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param string $units units
     *
     * @return $this
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets min_quantity
     *
     * @return double
     */
    public function getMinQuantity()
    {
        return $this->container['min_quantity'];
    }

    /**
     * Sets min_quantity
     *
     * @param double $min_quantity min_quantity
     *
     * @return $this
     */
    public function setMinQuantity($min_quantity)
    {
        $this->container['min_quantity'] = $min_quantity;

        return $this;
    }

    /**
     * Gets fixed_price
     *
     * @return double
     */
    public function getFixedPrice()
    {
        return $this->container['fixed_price'];
    }

    /**
     * Sets fixed_price
     *
     * @param double $fixed_price fixed_price
     *
     * @return $this
     */
    public function setFixedPrice($fixed_price)
    {
        $this->container['fixed_price'] = $fixed_price;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \Swagger\Client\Model\CountryDto
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Swagger\Client\Model\CountryDto $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \Swagger\Client\Model\LongIdDto
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Swagger\Client\Model\LongIdDto $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets img_url
     *
     * @return string
     */
    public function getImgUrl()
    {
        return $this->container['img_url'];
    }

    /**
     * Sets img_url
     *
     * @param string $img_url img_url
     *
     * @return $this
     */
    public function setImgUrl($img_url)
    {
        $this->container['img_url'] = $img_url;

        return $this;
    }

    /**
     * Gets open_voucher
     *
     * @return bool
     */
    public function getOpenVoucher()
    {
        return $this->container['open_voucher'];
    }

    /**
     * Sets open_voucher
     *
     * @param bool $open_voucher open_voucher
     *
     * @return $this
     */
    public function setOpenVoucher($open_voucher)
    {
        $this->container['open_voucher'] = $open_voucher;

        return $this;
    }

    /**
     * Gets voucher
     *
     * @return bool
     */
    public function getVoucher()
    {
        return $this->container['voucher'];
    }

    /**
     * Sets voucher
     *
     * @param bool $voucher voucher
     *
     * @return $this
     */
    public function setVoucher($voucher)
    {
        $this->container['voucher'] = $voucher;

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


