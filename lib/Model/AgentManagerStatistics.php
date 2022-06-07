<?php
/**
 * AgentManagerStatistics
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
 * AgentManagerStatistics Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgentManagerStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AgentManagerStatistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mobile' => 'string',
        'name' => 'string',
        'email' => 'string',
        'cif' => 'string',
        'province' => 'string',
        'town' => 'string',
        'address' => 'string',
        'agent_type' => 'string',
        'postal_code' => 'string',
        'nationality' => 'string',
        'contact' => 'string',
        'phone' => 'string',
        'contact_mobile' => 'string',
        'agent_name' => 'string',
        'iban' => 'string',
        'latitude' => 'double',
        'longitude' => 'double',
        'register_date' => '\DateTime',
        'last_transaction_date' => '\DateTime',
        'billing_avg' => 'double',
        'current_month_billing' => 'double',
        'current_balance' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mobile' => null,
        'name' => null,
        'email' => null,
        'cif' => null,
        'province' => null,
        'town' => null,
        'address' => null,
        'agent_type' => null,
        'postal_code' => null,
        'nationality' => null,
        'contact' => null,
        'phone' => null,
        'contact_mobile' => null,
        'agent_name' => null,
        'iban' => null,
        'latitude' => 'double',
        'longitude' => 'double',
        'register_date' => 'date-time',
        'last_transaction_date' => 'date-time',
        'billing_avg' => 'double',
        'current_month_billing' => 'double',
        'current_balance' => 'double'
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
        'mobile' => 'mobile',
        'name' => 'name',
        'email' => 'email',
        'cif' => 'cif',
        'province' => 'province',
        'town' => 'town',
        'address' => 'address',
        'agent_type' => 'agentType',
        'postal_code' => 'postalCode',
        'nationality' => 'nationality',
        'contact' => 'contact',
        'phone' => 'phone',
        'contact_mobile' => 'contactMobile',
        'agent_name' => 'agentName',
        'iban' => 'iban',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'register_date' => 'registerDate',
        'last_transaction_date' => 'lastTransactionDate',
        'billing_avg' => 'billingAvg',
        'current_month_billing' => 'currentMonthBilling',
        'current_balance' => 'currentBalance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mobile' => 'setMobile',
        'name' => 'setName',
        'email' => 'setEmail',
        'cif' => 'setCif',
        'province' => 'setProvince',
        'town' => 'setTown',
        'address' => 'setAddress',
        'agent_type' => 'setAgentType',
        'postal_code' => 'setPostalCode',
        'nationality' => 'setNationality',
        'contact' => 'setContact',
        'phone' => 'setPhone',
        'contact_mobile' => 'setContactMobile',
        'agent_name' => 'setAgentName',
        'iban' => 'setIban',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'register_date' => 'setRegisterDate',
        'last_transaction_date' => 'setLastTransactionDate',
        'billing_avg' => 'setBillingAvg',
        'current_month_billing' => 'setCurrentMonthBilling',
        'current_balance' => 'setCurrentBalance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mobile' => 'getMobile',
        'name' => 'getName',
        'email' => 'getEmail',
        'cif' => 'getCif',
        'province' => 'getProvince',
        'town' => 'getTown',
        'address' => 'getAddress',
        'agent_type' => 'getAgentType',
        'postal_code' => 'getPostalCode',
        'nationality' => 'getNationality',
        'contact' => 'getContact',
        'phone' => 'getPhone',
        'contact_mobile' => 'getContactMobile',
        'agent_name' => 'getAgentName',
        'iban' => 'getIban',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'register_date' => 'getRegisterDate',
        'last_transaction_date' => 'getLastTransactionDate',
        'billing_avg' => 'getBillingAvg',
        'current_month_billing' => 'getCurrentMonthBilling',
        'current_balance' => 'getCurrentBalance'
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

    const AGENT_TYPE_CALLSHOP = 'CALLSHOP';
    const AGENT_TYPE_FOOD = 'FOOD';
    const AGENT_TYPE_PHONESHOP = 'PHONESHOP';
    const AGENT_TYPE_VIRTUAL = 'VIRTUAL';
    const AGENT_TYPE_OTHER = 'OTHER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAgentTypeAllowableValues()
    {
        return [
            self::AGENT_TYPE_CALLSHOP,
            self::AGENT_TYPE_FOOD,
            self::AGENT_TYPE_PHONESHOP,
            self::AGENT_TYPE_VIRTUAL,
            self::AGENT_TYPE_OTHER,
        ];
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
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['cif'] = isset($data['cif']) ? $data['cif'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['town'] = isset($data['town']) ? $data['town'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['agent_type'] = isset($data['agent_type']) ? $data['agent_type'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['contact_mobile'] = isset($data['contact_mobile']) ? $data['contact_mobile'] : null;
        $this->container['agent_name'] = isset($data['agent_name']) ? $data['agent_name'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['register_date'] = isset($data['register_date']) ? $data['register_date'] : null;
        $this->container['last_transaction_date'] = isset($data['last_transaction_date']) ? $data['last_transaction_date'] : null;
        $this->container['billing_avg'] = isset($data['billing_avg']) ? $data['billing_avg'] : null;
        $this->container['current_month_billing'] = isset($data['current_month_billing']) ? $data['current_month_billing'] : null;
        $this->container['current_balance'] = isset($data['current_balance']) ? $data['current_balance'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['mobile'] === null) {
            $invalidProperties[] = "'mobile' can't be null";
        }
        if (!preg_match("/^\\+[1-9]\\d{1,14}$/", $this->container['mobile'])) {
            $invalidProperties[] = "invalid value for 'mobile', must be conform to the pattern /^\\+[1-9]\\d{1,14}$/.";
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if (!preg_match("/^[A-Za-z0-9+_.-]+@(.+)$/", $this->container['email'])) {
            $invalidProperties[] = "invalid value for 'email', must be conform to the pattern /^[A-Za-z0-9+_.-]+@(.+)$/.";
        }

        if ($this->container['province'] === null) {
            $invalidProperties[] = "'province' can't be null";
        }
        if ($this->container['town'] === null) {
            $invalidProperties[] = "'town' can't be null";
        }
        $allowedValues = $this->getAgentTypeAllowableValues();
        if (!is_null($this->container['agent_type']) && !in_array($this->container['agent_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'agent_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['phone']) && !preg_match("/^\\+[1-9]\\d{1,14}$/", $this->container['phone'])) {
            $invalidProperties[] = "invalid value for 'phone', must be conform to the pattern /^\\+[1-9]\\d{1,14}$/.";
        }

        if (!is_null($this->container['contact_mobile']) && !preg_match("/^\\+[1-9]\\d{1,14}$/", $this->container['contact_mobile'])) {
            $invalidProperties[] = "invalid value for 'contact_mobile', must be conform to the pattern /^\\+[1-9]\\d{1,14}$/.";
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
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string $mobile mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {

        if ((!preg_match("/^\\+[1-9]\\d{1,14}$/", $mobile))) {
            throw new \InvalidArgumentException("invalid value for $mobile when calling AgentManagerStatistics., must conform to the pattern /^\\+[1-9]\\d{1,14}$/.");
        }

        $this->container['mobile'] = $mobile;

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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {

        if ((!preg_match("/^[A-Za-z0-9+_.-]+@(.+)$/", $email))) {
            throw new \InvalidArgumentException("invalid value for $email when calling AgentManagerStatistics., must conform to the pattern /^[A-Za-z0-9+_.-]+@(.+)$/.");
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets cif
     *
     * @return string
     */
    public function getCif()
    {
        return $this->container['cif'];
    }

    /**
     * Sets cif
     *
     * @param string $cif cif
     *
     * @return $this
     */
    public function setCif($cif)
    {
        $this->container['cif'] = $cif;

        return $this;
    }

    /**
     * Gets province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
     * Sets province
     *
     * @param string $province province
     *
     * @return $this
     */
    public function setProvince($province)
    {
        $this->container['province'] = $province;

        return $this;
    }

    /**
     * Gets town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     *
     * @param string $town town
     *
     * @return $this
     */
    public function setTown($town)
    {
        $this->container['town'] = $town;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets agent_type
     *
     * @return string
     */
    public function getAgentType()
    {
        return $this->container['agent_type'];
    }

    /**
     * Sets agent_type
     *
     * @param string $agent_type agent_type
     *
     * @return $this
     */
    public function setAgentType($agent_type)
    {
        $allowedValues = $this->getAgentTypeAllowableValues();
        if (!is_null($agent_type) && !in_array($agent_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'agent_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['agent_type'] = $agent_type;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param string $nationality nationality
     *
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param string $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {

        if (!is_null($phone) && (!preg_match("/^\\+[1-9]\\d{1,14}$/", $phone))) {
            throw new \InvalidArgumentException("invalid value for $phone when calling AgentManagerStatistics., must conform to the pattern /^\\+[1-9]\\d{1,14}$/.");
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets contact_mobile
     *
     * @return string
     */
    public function getContactMobile()
    {
        return $this->container['contact_mobile'];
    }

    /**
     * Sets contact_mobile
     *
     * @param string $contact_mobile contact_mobile
     *
     * @return $this
     */
    public function setContactMobile($contact_mobile)
    {

        if (!is_null($contact_mobile) && (!preg_match("/^\\+[1-9]\\d{1,14}$/", $contact_mobile))) {
            throw new \InvalidArgumentException("invalid value for $contact_mobile when calling AgentManagerStatistics., must conform to the pattern /^\\+[1-9]\\d{1,14}$/.");
        }

        $this->container['contact_mobile'] = $contact_mobile;

        return $this;
    }

    /**
     * Gets agent_name
     *
     * @return string
     */
    public function getAgentName()
    {
        return $this->container['agent_name'];
    }

    /**
     * Sets agent_name
     *
     * @param string $agent_name agent_name
     *
     * @return $this
     */
    public function setAgentName($agent_name)
    {
        $this->container['agent_name'] = $agent_name;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string $iban iban
     *
     * @return $this
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return double
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param double $latitude latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return double
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param double $longitude longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets register_date
     *
     * @return \DateTime
     */
    public function getRegisterDate()
    {
        return $this->container['register_date'];
    }

    /**
     * Sets register_date
     *
     * @param \DateTime $register_date register_date
     *
     * @return $this
     */
    public function setRegisterDate($register_date)
    {
        $this->container['register_date'] = $register_date;

        return $this;
    }

    /**
     * Gets last_transaction_date
     *
     * @return \DateTime
     */
    public function getLastTransactionDate()
    {
        return $this->container['last_transaction_date'];
    }

    /**
     * Sets last_transaction_date
     *
     * @param \DateTime $last_transaction_date last_transaction_date
     *
     * @return $this
     */
    public function setLastTransactionDate($last_transaction_date)
    {
        $this->container['last_transaction_date'] = $last_transaction_date;

        return $this;
    }

    /**
     * Gets billing_avg
     *
     * @return double
     */
    public function getBillingAvg()
    {
        return $this->container['billing_avg'];
    }

    /**
     * Sets billing_avg
     *
     * @param double $billing_avg billing_avg
     *
     * @return $this
     */
    public function setBillingAvg($billing_avg)
    {
        $this->container['billing_avg'] = $billing_avg;

        return $this;
    }

    /**
     * Gets current_month_billing
     *
     * @return double
     */
    public function getCurrentMonthBilling()
    {
        return $this->container['current_month_billing'];
    }

    /**
     * Sets current_month_billing
     *
     * @param double $current_month_billing current_month_billing
     *
     * @return $this
     */
    public function setCurrentMonthBilling($current_month_billing)
    {
        $this->container['current_month_billing'] = $current_month_billing;

        return $this;
    }

    /**
     * Gets current_balance
     *
     * @return double
     */
    public function getCurrentBalance()
    {
        return $this->container['current_balance'];
    }

    /**
     * Sets current_balance
     *
     * @param double $current_balance current_balance
     *
     * @return $this
     */
    public function setCurrentBalance($current_balance)
    {
        $this->container['current_balance'] = $current_balance;

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


