<?php
/**
 * EnterpriseImFancyCardCardListModuleAction
 *
 * PHP version 5
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 动态消息卡片列表
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace swagger_client\Model;

use \ArrayAccess;
use swagger_client\ObjectSerializer;

/**
 * EnterpriseImFancyCardCardListModuleAction Class Doc Comment
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseImFancyCardCardListModuleAction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'module_action';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action_type' => 'string',
'api' => 'string',
'url' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action_type' => null,
'api' => null,
'url' => null    ];

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
        'action_type' => 'action_type',
'api' => 'api',
'url' => 'url'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_type' => 'setActionType',
'api' => 'setApi',
'url' => 'setUrl'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_type' => 'getActionType',
'api' => 'getApi',
'url' => 'getUrl'    ];

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

    const ENTERPRISE_IM_FANCY_CARD_CARD_LIST_ACTION_TYPE_API = 'api';
const ENTERPRISE_IM_FANCY_CARD_CARD_LIST_ACTION_TYPE_H5 = 'h5';
const ENTERPRISE_IM_FANCY_CARD_CARD_LIST_ACTION_TYPE_NATIVE = 'native';
const ENTERPRISE_IM_FANCY_CARD_CARD_LIST_ACTION_TYPE_REACT_NATIVE = 'react-native';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionTypeAllowableValues()
    {
        return [
            self::ENTERPRISE_IM_FANCY_CARD_CARD_LIST_ACTION_TYPE_API,
            self::ENTERPRISE_IM_FANCY_CARD_CARD_LIST_ACTION_TYPE_H5,
            self::ENTERPRISE_IM_FANCY_CARD_CARD_LIST_ACTION_TYPE_NATIVE,
            self::ENTERPRISE_IM_FANCY_CARD_CARD_LIST_ACTION_TYPE_REACT_NATIVE,''
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
        $this->container['action_type'] = isset($data['action_type']) ? $data['action_type'] : null;
        $this->container['api'] = isset($data['api']) ? $data['api'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['action_type'] === null) {
            $invalidProperties[] = "'action_type' can't be null";
        }
        $allowedValues = $this->getActionTypeAllowableValues();
        if (!is_null($this->container['action_type']) && !in_array($this->container['action_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'action_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets action_type
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->container['action_type'];
    }

    /**
     * Sets action_type
     *
     * @param string $action_type 卡片模块动作
     *
     * @return $this
     */
    public function setActionType($action_type)
    {
        $allowedValues = $this->getActionTypeAllowableValues();
        if (!in_array($action_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'action_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action_type'] = $action_type;

        return $this;
    }

    /**
     * Gets api
     *
     * @return string
     */
    public function getApi()
    {
        return $this->container['api'];
    }

    /**
     * Sets api
     *
     * @param string $api api类型action的api名称
     *
     * @return $this
     */
    public function setApi($api)
    {
        $this->container['api'] = $api;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url 跳转类动作对应的跳转链接
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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
