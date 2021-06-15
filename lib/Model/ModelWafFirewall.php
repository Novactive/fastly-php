<?php
/**
 * ModelWafFirewall
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fastly API
 *
 * Via the Fastly API you can perform any of the operations that are possible within the management console,  including creating services, domains, and backends, configuring rules or uploading your own application code, as well as account operations such as user administration and billing reports. The API is organized into collections of endpoints that allow manipulation of objects related to Fastly services and accounts. For the most accurate and up-to-date API reference content, visit developer.fastly.com/reference/api/
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ModelWafFirewall Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ModelWafFirewall implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'model_waf_firewall';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active_rules_fastly_block_count' => 'int',
        'active_rules_fastly_log_count' => 'int',
        'active_rules_fastly_score_count' => 'int',
        'active_rules_owasp_block_count' => 'int',
        'active_rules_owasp_log_count' => 'int',
        'active_rules_owasp_score_count' => 'int',
        'active_rules_trustwave_block_count' => 'int',
        'active_rules_trustwave_log_count' => 'int',
        'created_at' => 'string',
        'disabled' => 'bool',
        'prefetch_condition' => 'string',
        'response' => 'string',
        'service_id' => 'string',
        'service_version_number' => 'int',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'active_rules_fastly_block_count' => null,
        'active_rules_fastly_log_count' => null,
        'active_rules_fastly_score_count' => null,
        'active_rules_owasp_block_count' => null,
        'active_rules_owasp_log_count' => null,
        'active_rules_owasp_score_count' => null,
        'active_rules_trustwave_block_count' => null,
        'active_rules_trustwave_log_count' => null,
        'created_at' => null,
        'disabled' => null,
        'prefetch_condition' => null,
        'response' => null,
        'service_id' => null,
        'service_version_number' => null,
        'updated_at' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'active_rules_fastly_block_count' => 'active_rules_fastly_block_count',
        'active_rules_fastly_log_count' => 'active_rules_fastly_log_count',
        'active_rules_fastly_score_count' => 'active_rules_fastly_score_count',
        'active_rules_owasp_block_count' => 'active_rules_owasp_block_count',
        'active_rules_owasp_log_count' => 'active_rules_owasp_log_count',
        'active_rules_owasp_score_count' => 'active_rules_owasp_score_count',
        'active_rules_trustwave_block_count' => 'active_rules_trustwave_block_count',
        'active_rules_trustwave_log_count' => 'active_rules_trustwave_log_count',
        'created_at' => 'created_at',
        'disabled' => 'disabled',
        'prefetch_condition' => 'prefetch_condition',
        'response' => 'response',
        'service_id' => 'service_id',
        'service_version_number' => 'service_version_number',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active_rules_fastly_block_count' => 'setActiveRulesFastlyBlockCount',
        'active_rules_fastly_log_count' => 'setActiveRulesFastlyLogCount',
        'active_rules_fastly_score_count' => 'setActiveRulesFastlyScoreCount',
        'active_rules_owasp_block_count' => 'setActiveRulesOwaspBlockCount',
        'active_rules_owasp_log_count' => 'setActiveRulesOwaspLogCount',
        'active_rules_owasp_score_count' => 'setActiveRulesOwaspScoreCount',
        'active_rules_trustwave_block_count' => 'setActiveRulesTrustwaveBlockCount',
        'active_rules_trustwave_log_count' => 'setActiveRulesTrustwaveLogCount',
        'created_at' => 'setCreatedAt',
        'disabled' => 'setDisabled',
        'prefetch_condition' => 'setPrefetchCondition',
        'response' => 'setResponse',
        'service_id' => 'setServiceId',
        'service_version_number' => 'setServiceVersionNumber',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active_rules_fastly_block_count' => 'getActiveRulesFastlyBlockCount',
        'active_rules_fastly_log_count' => 'getActiveRulesFastlyLogCount',
        'active_rules_fastly_score_count' => 'getActiveRulesFastlyScoreCount',
        'active_rules_owasp_block_count' => 'getActiveRulesOwaspBlockCount',
        'active_rules_owasp_log_count' => 'getActiveRulesOwaspLogCount',
        'active_rules_owasp_score_count' => 'getActiveRulesOwaspScoreCount',
        'active_rules_trustwave_block_count' => 'getActiveRulesTrustwaveBlockCount',
        'active_rules_trustwave_log_count' => 'getActiveRulesTrustwaveLogCount',
        'created_at' => 'getCreatedAt',
        'disabled' => 'getDisabled',
        'prefetch_condition' => 'getPrefetchCondition',
        'response' => 'getResponse',
        'service_id' => 'getServiceId',
        'service_version_number' => 'getServiceVersionNumber',
        'updated_at' => 'getUpdatedAt'
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
        return self::$openAPIModelName;
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
        $this->container['active_rules_fastly_block_count'] = $data['active_rules_fastly_block_count'] ?? null;
        $this->container['active_rules_fastly_log_count'] = $data['active_rules_fastly_log_count'] ?? null;
        $this->container['active_rules_fastly_score_count'] = $data['active_rules_fastly_score_count'] ?? null;
        $this->container['active_rules_owasp_block_count'] = $data['active_rules_owasp_block_count'] ?? null;
        $this->container['active_rules_owasp_log_count'] = $data['active_rules_owasp_log_count'] ?? null;
        $this->container['active_rules_owasp_score_count'] = $data['active_rules_owasp_score_count'] ?? null;
        $this->container['active_rules_trustwave_block_count'] = $data['active_rules_trustwave_block_count'] ?? null;
        $this->container['active_rules_trustwave_log_count'] = $data['active_rules_trustwave_log_count'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['disabled'] = $data['disabled'] ?? false;
        $this->container['prefetch_condition'] = $data['prefetch_condition'] ?? null;
        $this->container['response'] = $data['response'] ?? null;
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['service_version_number'] = $data['service_version_number'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
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
     * Gets active_rules_fastly_block_count
     *
     * @return int|null
     */
    public function getActiveRulesFastlyBlockCount()
    {
        return $this->container['active_rules_fastly_block_count'];
    }

    /**
     * Sets active_rules_fastly_block_count
     *
     * @param int|null $active_rules_fastly_block_count The number of active Fastly rules set to block on the active or latest firewall version.
     *
     * @return self
     */
    public function setActiveRulesFastlyBlockCount($active_rules_fastly_block_count)
    {
        $this->container['active_rules_fastly_block_count'] = $active_rules_fastly_block_count;

        return $this;
    }

    /**
     * Gets active_rules_fastly_log_count
     *
     * @return int|null
     */
    public function getActiveRulesFastlyLogCount()
    {
        return $this->container['active_rules_fastly_log_count'];
    }

    /**
     * Sets active_rules_fastly_log_count
     *
     * @param int|null $active_rules_fastly_log_count The number of active Fastly rules set to log on the active or latest firewall version.
     *
     * @return self
     */
    public function setActiveRulesFastlyLogCount($active_rules_fastly_log_count)
    {
        $this->container['active_rules_fastly_log_count'] = $active_rules_fastly_log_count;

        return $this;
    }

    /**
     * Gets active_rules_fastly_score_count
     *
     * @return int|null
     */
    public function getActiveRulesFastlyScoreCount()
    {
        return $this->container['active_rules_fastly_score_count'];
    }

    /**
     * Sets active_rules_fastly_score_count
     *
     * @param int|null $active_rules_fastly_score_count The number of active Fastly rules set to score on the active or latest firewall version.
     *
     * @return self
     */
    public function setActiveRulesFastlyScoreCount($active_rules_fastly_score_count)
    {
        $this->container['active_rules_fastly_score_count'] = $active_rules_fastly_score_count;

        return $this;
    }

    /**
     * Gets active_rules_owasp_block_count
     *
     * @return int|null
     */
    public function getActiveRulesOwaspBlockCount()
    {
        return $this->container['active_rules_owasp_block_count'];
    }

    /**
     * Sets active_rules_owasp_block_count
     *
     * @param int|null $active_rules_owasp_block_count The number of active OWASP rules set to block on the active or latest firewall version.
     *
     * @return self
     */
    public function setActiveRulesOwaspBlockCount($active_rules_owasp_block_count)
    {
        $this->container['active_rules_owasp_block_count'] = $active_rules_owasp_block_count;

        return $this;
    }

    /**
     * Gets active_rules_owasp_log_count
     *
     * @return int|null
     */
    public function getActiveRulesOwaspLogCount()
    {
        return $this->container['active_rules_owasp_log_count'];
    }

    /**
     * Sets active_rules_owasp_log_count
     *
     * @param int|null $active_rules_owasp_log_count The number of active OWASP rules set to log on the active or latest firewall version.
     *
     * @return self
     */
    public function setActiveRulesOwaspLogCount($active_rules_owasp_log_count)
    {
        $this->container['active_rules_owasp_log_count'] = $active_rules_owasp_log_count;

        return $this;
    }

    /**
     * Gets active_rules_owasp_score_count
     *
     * @return int|null
     */
    public function getActiveRulesOwaspScoreCount()
    {
        return $this->container['active_rules_owasp_score_count'];
    }

    /**
     * Sets active_rules_owasp_score_count
     *
     * @param int|null $active_rules_owasp_score_count The number of active OWASP rules set to score on the active or latest firewall version.
     *
     * @return self
     */
    public function setActiveRulesOwaspScoreCount($active_rules_owasp_score_count)
    {
        $this->container['active_rules_owasp_score_count'] = $active_rules_owasp_score_count;

        return $this;
    }

    /**
     * Gets active_rules_trustwave_block_count
     *
     * @return int|null
     */
    public function getActiveRulesTrustwaveBlockCount()
    {
        return $this->container['active_rules_trustwave_block_count'];
    }

    /**
     * Sets active_rules_trustwave_block_count
     *
     * @param int|null $active_rules_trustwave_block_count The number of active Trustwave rules set to block on the active or latest firewall version.
     *
     * @return self
     */
    public function setActiveRulesTrustwaveBlockCount($active_rules_trustwave_block_count)
    {
        $this->container['active_rules_trustwave_block_count'] = $active_rules_trustwave_block_count;

        return $this;
    }

    /**
     * Gets active_rules_trustwave_log_count
     *
     * @return int|null
     */
    public function getActiveRulesTrustwaveLogCount()
    {
        return $this->container['active_rules_trustwave_log_count'];
    }

    /**
     * Sets active_rules_trustwave_log_count
     *
     * @param int|null $active_rules_trustwave_log_count The number of active Trustwave rules set to log on the active or latest firewall version.
     *
     * @return self
     */
    public function setActiveRulesTrustwaveLogCount($active_rules_trustwave_log_count)
    {
        $this->container['active_rules_trustwave_log_count'] = $active_rules_trustwave_log_count;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at Time-stamp (GMT) when the firewall was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets disabled
     *
     * @return bool|null
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     *
     * @param bool|null $disabled The status of the firewall.
     *
     * @return self
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets prefetch_condition
     *
     * @return string|null
     */
    public function getPrefetchCondition()
    {
        return $this->container['prefetch_condition'];
    }

    /**
     * Sets prefetch_condition
     *
     * @param string|null $prefetch_condition Name of the corresponding condition object.
     *
     * @return self
     */
    public function setPrefetchCondition($prefetch_condition)
    {
        $this->container['prefetch_condition'] = $prefetch_condition;

        return $this;
    }

    /**
     * Gets response
     *
     * @return string|null
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param string|null $response Name of the corresponding response object.
     *
     * @return self
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets service_id
     *
     * @return string|null
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param string|null $service_id service_id
     *
     * @return self
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets service_version_number
     *
     * @return int|null
     */
    public function getServiceVersionNumber()
    {
        return $this->container['service_version_number'];
    }

    /**
     * Sets service_version_number
     *
     * @param int|null $service_version_number service_version_number
     *
     * @return self
     */
    public function setServiceVersionNumber($service_version_number)
    {
        $this->container['service_version_number'] = $service_version_number;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at Time-stamp (GMT) when the firewall was last updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


