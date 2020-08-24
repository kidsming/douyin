<?php
/**
 * InternalVideoDataInternalVideoDataInternalVideoStatistics
 *
 * PHP version 5
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 通过抖音视频id批量获取已分享视频数据信息
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
 * InternalVideoDataInternalVideoDataInternalVideoStatistics Class Doc Comment
 *
 * @category Class
 * @description 统计数据
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InternalVideoDataInternalVideoDataInternalVideoStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'internal_video_statistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'comment_count' => 'int',
'digg_count' => 'int',
'download_count' => 'int',
'play_count' => 'int',
'share_count' => 'int',
'forward_count' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'comment_count' => 'int32',
'digg_count' => 'int32',
'download_count' => 'int32',
'play_count' => 'int32',
'share_count' => 'int32',
'forward_count' => 'int32'    ];

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
        'comment_count' => 'comment_count',
'digg_count' => 'digg_count',
'download_count' => 'download_count',
'play_count' => 'play_count',
'share_count' => 'share_count',
'forward_count' => 'forward_count'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comment_count' => 'setCommentCount',
'digg_count' => 'setDiggCount',
'download_count' => 'setDownloadCount',
'play_count' => 'setPlayCount',
'share_count' => 'setShareCount',
'forward_count' => 'setForwardCount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comment_count' => 'getCommentCount',
'digg_count' => 'getDiggCount',
'download_count' => 'getDownloadCount',
'play_count' => 'getPlayCount',
'share_count' => 'getShareCount',
'forward_count' => 'getForwardCount'    ];

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
        $this->container['comment_count'] = isset($data['comment_count']) ? $data['comment_count'] : null;
        $this->container['digg_count'] = isset($data['digg_count']) ? $data['digg_count'] : null;
        $this->container['download_count'] = isset($data['download_count']) ? $data['download_count'] : null;
        $this->container['play_count'] = isset($data['play_count']) ? $data['play_count'] : null;
        $this->container['share_count'] = isset($data['share_count']) ? $data['share_count'] : null;
        $this->container['forward_count'] = isset($data['forward_count']) ? $data['forward_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['comment_count'] === null) {
            $invalidProperties[] = "'comment_count' can't be null";
        }
        if ($this->container['digg_count'] === null) {
            $invalidProperties[] = "'digg_count' can't be null";
        }
        if ($this->container['download_count'] === null) {
            $invalidProperties[] = "'download_count' can't be null";
        }
        if ($this->container['play_count'] === null) {
            $invalidProperties[] = "'play_count' can't be null";
        }
        if ($this->container['share_count'] === null) {
            $invalidProperties[] = "'share_count' can't be null";
        }
        if ($this->container['forward_count'] === null) {
            $invalidProperties[] = "'forward_count' can't be null";
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
     * Gets comment_count
     *
     * @return int
     */
    public function getCommentCount()
    {
        return $this->container['comment_count'];
    }

    /**
     * Sets comment_count
     *
     * @param int $comment_count 评论数
     *
     * @return $this
     */
    public function setCommentCount($comment_count)
    {
        $this->container['comment_count'] = $comment_count;

        return $this;
    }

    /**
     * Gets digg_count
     *
     * @return int
     */
    public function getDiggCount()
    {
        return $this->container['digg_count'];
    }

    /**
     * Sets digg_count
     *
     * @param int $digg_count 点赞数
     *
     * @return $this
     */
    public function setDiggCount($digg_count)
    {
        $this->container['digg_count'] = $digg_count;

        return $this;
    }

    /**
     * Gets download_count
     *
     * @return int
     */
    public function getDownloadCount()
    {
        return $this->container['download_count'];
    }

    /**
     * Sets download_count
     *
     * @param int $download_count 下载数
     *
     * @return $this
     */
    public function setDownloadCount($download_count)
    {
        $this->container['download_count'] = $download_count;

        return $this;
    }

    /**
     * Gets play_count
     *
     * @return int
     */
    public function getPlayCount()
    {
        return $this->container['play_count'];
    }

    /**
     * Sets play_count
     *
     * @param int $play_count 播放数，只有作者本人可见。公开视频设为私密后，播放数也会返回0。
     *
     * @return $this
     */
    public function setPlayCount($play_count)
    {
        $this->container['play_count'] = $play_count;

        return $this;
    }

    /**
     * Gets share_count
     *
     * @return int
     */
    public function getShareCount()
    {
        return $this->container['share_count'];
    }

    /**
     * Sets share_count
     *
     * @param int $share_count 分享数
     *
     * @return $this
     */
    public function setShareCount($share_count)
    {
        $this->container['share_count'] = $share_count;

        return $this;
    }

    /**
     * Gets forward_count
     *
     * @return int
     */
    public function getForwardCount()
    {
        return $this->container['forward_count'];
    }

    /**
     * Sets forward_count
     *
     * @param int $forward_count 转发数
     *
     * @return $this
     */
    public function setForwardCount($forward_count)
    {
        $this->container['forward_count'] = $forward_count;

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
