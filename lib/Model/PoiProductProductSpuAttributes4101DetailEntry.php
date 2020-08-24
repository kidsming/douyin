<?php
/**
 * PoiProductProductSpuAttributes4101DetailEntry
 *
 * PHP version 5
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
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
 * PoiProductProductSpuAttributes4101DetailEntry Class Doc Comment
 *
 * @category Class
 * @description 详情页链接信息
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PoiProductProductSpuAttributes4101DetailEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'spu_attributes_4101_detail_entry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'schema_type' => 'int',
'url' => 'string',
'platform_source' => 'int',
'platform_name' => 'string',
'is_test' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'schema_type' => null,
'url' => null,
'platform_source' => null,
'platform_name' => null,
'is_test' => null    ];

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
        'schema_type' => 'schema_type',
'url' => 'url',
'platform_source' => 'platform_source',
'platform_name' => 'platform_name',
'is_test' => 'is_test'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'schema_type' => 'setSchemaType',
'url' => 'setUrl',
'platform_source' => 'setPlatformSource',
'platform_name' => 'setPlatformName',
'is_test' => 'setIsTest'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'schema_type' => 'getSchemaType',
'url' => 'getUrl',
'platform_source' => 'getPlatformSource',
'platform_name' => 'getPlatformName',
'is_test' => 'getIsTest'    ];

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

    const POI_PRODUCT_PRODUCT_SCHEMA_TYPE_1 = 1;
const POI_PRODUCT_PRODUCT_SCHEMA_TYPE_2 = 2;
const POI_PRODUCT_PRODUCT_SCHEMA_TYPE_3 = 3;
const POI_PRODUCT_PRODUCT_PLATFORM_SOURCE_16 = 16;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSchemaTypeAllowableValues()
    {
        return [
            self::POI_PRODUCT_PRODUCT_SCHEMA_TYPE_1,
            self::POI_PRODUCT_PRODUCT_SCHEMA_TYPE_2,
            self::POI_PRODUCT_PRODUCT_SCHEMA_TYPE_3,''
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlatformSourceAllowableValues()
    {
        return [
            self::POI_PRODUCT_PRODUCT_PLATFORM_SOURCE_16,''
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
        $this->container['schema_type'] = isset($data['schema_type']) ? $data['schema_type'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['platform_source'] = isset($data['platform_source']) ? $data['platform_source'] : null;
        $this->container['platform_name'] = isset($data['platform_name']) ? $data['platform_name'] : null;
        $this->container['is_test'] = isset($data['is_test']) ? $data['is_test'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSchemaTypeAllowableValues();
        if (!is_null($this->container['schema_type']) && !in_array($this->container['schema_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'schema_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPlatformSourceAllowableValues();
        if (!is_null($this->container['platform_source']) && !in_array($this->container['platform_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'platform_source', must be one of '%s'",
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
     * Gets schema_type
     *
     * @return int
     */
    public function getSchemaType()
    {
        return $this->container['schema_type'];
    }

    /**
     * Sets schema_type
     *
     * @param int $schema_type 链接类型 (1:H5，2:抖音小程序，3:原生小程序)
     *
     * @return $this
     */
    public function setSchemaType($schema_type)
    {
        $allowedValues = $this->getSchemaTypeAllowableValues();
        if (!is_null($schema_type) && !in_array($schema_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'schema_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['schema_type'] = $schema_type;

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
     * @param string $url 详情页链接
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets platform_source
     *
     * @return int
     */
    public function getPlatformSource()
    {
        return $this->container['platform_source'];
    }

    /**
     * Sets platform_source
     *
     * @param int $platform_source 平台来源枚举（16电商小店）
     *
     * @return $this
     */
    public function setPlatformSource($platform_source)
    {
        $allowedValues = $this->getPlatformSourceAllowableValues();
        if (!is_null($platform_source) && !in_array($platform_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'platform_source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['platform_source'] = $platform_source;

        return $this;
    }

    /**
     * Gets platform_name
     *
     * @return string
     */
    public function getPlatformName()
    {
        return $this->container['platform_name'];
    }

    /**
     * Sets platform_name
     *
     * @param string $platform_name 平台名称
     *
     * @return $this
     */
    public function setPlatformName($platform_name)
    {
        $this->container['platform_name'] = $platform_name;

        return $this;
    }

    /**
     * Gets is_test
     *
     * @return int
     */
    public function getIsTest()
    {
        return $this->container['is_test'];
    }

    /**
     * Sets is_test
     *
     * @param int $is_test 主要用于联调，1-使用测试版的小程序，0或者不填-使用正式版小程序
     *
     * @return $this
     */
    public function setIsTest($is_test)
    {
        $this->container['is_test'] = $is_test;

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
