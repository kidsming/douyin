<?php
/**
 * PoiProductProductSpuAttributes4101
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
 * PoiProductProductSpuAttributes4101 Class Doc Comment
 *
 * @category Class
 * @description 电商商品
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PoiProductProductSpuAttributes4101 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'spu_attributes_4101';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'market_price' => 'int',
'discount_price' => 'int',
'img' => 'string',
'selled_num' => 'int',
'detail_entry' => '\swagger_client\Model\PoiProductProductSpuAttributes4101DetailEntry'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'market_price' => null,
'discount_price' => null,
'img' => null,
'selled_num' => null,
'detail_entry' => null    ];

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
        'market_price' => 'market_price',
'discount_price' => 'discount_price',
'img' => 'img',
'selled_num' => 'selled_num',
'detail_entry' => 'detail_entry'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'market_price' => 'setMarketPrice',
'discount_price' => 'setDiscountPrice',
'img' => 'setImg',
'selled_num' => 'setSelledNum',
'detail_entry' => 'setDetailEntry'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'market_price' => 'getMarketPrice',
'discount_price' => 'getDiscountPrice',
'img' => 'getImg',
'selled_num' => 'getSelledNum',
'detail_entry' => 'getDetailEntry'    ];

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
        $this->container['market_price'] = isset($data['market_price']) ? $data['market_price'] : null;
        $this->container['discount_price'] = isset($data['discount_price']) ? $data['discount_price'] : null;
        $this->container['img'] = isset($data['img']) ? $data['img'] : null;
        $this->container['selled_num'] = isset($data['selled_num']) ? $data['selled_num'] : null;
        $this->container['detail_entry'] = isset($data['detail_entry']) ? $data['detail_entry'] : null;
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
     * Gets market_price
     *
     * @return int
     */
    public function getMarketPrice()
    {
        return $this->container['market_price'];
    }

    /**
     * Sets market_price
     *
     * @param int $market_price 原价 单位：分
     *
     * @return $this
     */
    public function setMarketPrice($market_price)
    {
        $this->container['market_price'] = $market_price;

        return $this;
    }

    /**
     * Gets discount_price
     *
     * @return int
     */
    public function getDiscountPrice()
    {
        return $this->container['discount_price'];
    }

    /**
     * Sets discount_price
     *
     * @param int $discount_price 售价 单位：分
     *
     * @return $this
     */
    public function setDiscountPrice($discount_price)
    {
        $this->container['discount_price'] = $discount_price;

        return $this;
    }

    /**
     * Gets img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->container['img'];
    }

    /**
     * Sets img
     *
     * @param string $img 商品图片
     *
     * @return $this
     */
    public function setImg($img)
    {
        $this->container['img'] = $img;

        return $this;
    }

    /**
     * Gets selled_num
     *
     * @return int
     */
    public function getSelledNum()
    {
        return $this->container['selled_num'];
    }

    /**
     * Sets selled_num
     *
     * @param int $selled_num 销量
     *
     * @return $this
     */
    public function setSelledNum($selled_num)
    {
        $this->container['selled_num'] = $selled_num;

        return $this;
    }

    /**
     * Gets detail_entry
     *
     * @return \swagger_client\Model\PoiProductProductSpuAttributes4101DetailEntry
     */
    public function getDetailEntry()
    {
        return $this->container['detail_entry'];
    }

    /**
     * Sets detail_entry
     *
     * @param \swagger_client\Model\PoiProductProductSpuAttributes4101DetailEntry $detail_entry detail_entry
     *
     * @return $this
     */
    public function setDetailEntry($detail_entry)
    {
        $this->container['detail_entry'] = $detail_entry;

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
