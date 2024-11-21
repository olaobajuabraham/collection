<?php
/**
 * PreApprovalDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Mtn\Momo\Collection
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Collection
 *
 * Enable remote collection of bills, fees or taxes
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Mtn\Momo\Collection\Model;

use \ArrayAccess;
use \Mtn\Momo\Collection\ObjectSerializer;

/**
 * PreApprovalDetails Class Doc Comment
 *
 * @category Class
 * @package  Mtn\Momo\Collection
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PreApprovalDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PreApprovalDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pre_approval_id' => 'string',
        'to_fri' => 'string',
        'from_fri' => 'string',
        'from_currency' => 'string',
        'created_time' => 'string',
        'approved_time' => 'string',
        'expiry_time' => 'string',
        'status' => 'string',
        'message' => 'string',
        'frequency' => 'string',
        'start_date' => 'string',
        'last_used_date' => 'string',
        'offer' => 'string',
        'external_id' => 'string',
        'max_debit_amount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pre_approval_id' => null,
        'to_fri' => null,
        'from_fri' => null,
        'from_currency' => null,
        'created_time' => null,
        'approved_time' => null,
        'expiry_time' => null,
        'status' => null,
        'message' => null,
        'frequency' => null,
        'start_date' => null,
        'last_used_date' => null,
        'offer' => null,
        'external_id' => null,
        'max_debit_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pre_approval_id' => false,
        'to_fri' => false,
        'from_fri' => false,
        'from_currency' => false,
        'created_time' => false,
        'approved_time' => false,
        'expiry_time' => false,
        'status' => false,
        'message' => false,
        'frequency' => false,
        'start_date' => false,
        'last_used_date' => false,
        'offer' => false,
        'external_id' => false,
        'max_debit_amount' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pre_approval_id' => 'preApprovalId',
        'to_fri' => 'toFri',
        'from_fri' => 'fromFri',
        'from_currency' => 'fromCurrency',
        'created_time' => 'createdTime',
        'approved_time' => 'approvedTime',
        'expiry_time' => 'expiryTime',
        'status' => 'status',
        'message' => 'message',
        'frequency' => 'frequency',
        'start_date' => 'startDate',
        'last_used_date' => 'lastUsedDate',
        'offer' => 'offer',
        'external_id' => 'externalId',
        'max_debit_amount' => 'maxDebitAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pre_approval_id' => 'setPreApprovalId',
        'to_fri' => 'setToFri',
        'from_fri' => 'setFromFri',
        'from_currency' => 'setFromCurrency',
        'created_time' => 'setCreatedTime',
        'approved_time' => 'setApprovedTime',
        'expiry_time' => 'setExpiryTime',
        'status' => 'setStatus',
        'message' => 'setMessage',
        'frequency' => 'setFrequency',
        'start_date' => 'setStartDate',
        'last_used_date' => 'setLastUsedDate',
        'offer' => 'setOffer',
        'external_id' => 'setExternalId',
        'max_debit_amount' => 'setMaxDebitAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pre_approval_id' => 'getPreApprovalId',
        'to_fri' => 'getToFri',
        'from_fri' => 'getFromFri',
        'from_currency' => 'getFromCurrency',
        'created_time' => 'getCreatedTime',
        'approved_time' => 'getApprovedTime',
        'expiry_time' => 'getExpiryTime',
        'status' => 'getStatus',
        'message' => 'getMessage',
        'frequency' => 'getFrequency',
        'start_date' => 'getStartDate',
        'last_used_date' => 'getLastUsedDate',
        'offer' => 'getOffer',
        'external_id' => 'getExternalId',
        'max_debit_amount' => 'getMaxDebitAmount'
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

    public const STATUS_APPROVED = 'APPROVED';
    public const STATUS_CANCELLED = 'CANCELLED';
    public const STATUS_EXPIRED = 'EXPIRED';
    public const STATUS_REJECTED = 'REJECTED';
    public const STATUS_PENDING = 'PENDING';
    public const FREQUENCY_DAILY = 'DAILY';
    public const FREQUENCY_MONTHLY = 'MONTHLY';
    public const FREQUENCY_WEEKLY = 'WEEKLY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_APPROVED,
            self::STATUS_CANCELLED,
            self::STATUS_EXPIRED,
            self::STATUS_REJECTED,
            self::STATUS_PENDING,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrequencyAllowableValues()
    {
        return [
            self::FREQUENCY_DAILY,
            self::FREQUENCY_MONTHLY,
            self::FREQUENCY_WEEKLY,
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
        $this->setIfExists('pre_approval_id', $data ?? [], null);
        $this->setIfExists('to_fri', $data ?? [], null);
        $this->setIfExists('from_fri', $data ?? [], null);
        $this->setIfExists('from_currency', $data ?? [], null);
        $this->setIfExists('created_time', $data ?? [], null);
        $this->setIfExists('approved_time', $data ?? [], null);
        $this->setIfExists('expiry_time', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('frequency', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('last_used_date', $data ?? [], null);
        $this->setIfExists('offer', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('max_debit_amount', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pre_approval_id'] === null) {
            $invalidProperties[] = "'pre_approval_id' can't be null";
        }
        if ($this->container['to_fri'] === null) {
            $invalidProperties[] = "'to_fri' can't be null";
        }
        if ($this->container['from_fri'] === null) {
            $invalidProperties[] = "'from_fri' can't be null";
        }
        if ($this->container['from_currency'] === null) {
            $invalidProperties[] = "'from_currency' can't be null";
        }
        if ($this->container['created_time'] === null) {
            $invalidProperties[] = "'created_time' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($this->container['frequency']) && !in_array($this->container['frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'frequency', must be one of '%s'",
                $this->container['frequency'],
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
     * Gets pre_approval_id
     *
     * @return string
     */
    public function getPreApprovalId()
    {
        return $this->container['pre_approval_id'];
    }

    /**
     * Sets pre_approval_id
     *
     * @param string $pre_approval_id The ID of the pre-approval. Parameter cannot be NULL.
     *
     * @return self
     */
    public function setPreApprovalId($pre_approval_id)
    {
        if (is_null($pre_approval_id)) {
            throw new \InvalidArgumentException('non-nullable pre_approval_id cannot be null');
        }
        $this->container['pre_approval_id'] = $pre_approval_id;

        return $this;
    }

    /**
     * Gets to_fri
     *
     * @return string
     */
    public function getToFri()
    {
        return $this->container['to_fri'];
    }

    /**
     * Sets to_fri
     *
     * @param string $to_fri The Financial Resource Identifier of the receiving account.
     *
     * @return self
     */
    public function setToFri($to_fri)
    {
        if (is_null($to_fri)) {
            throw new \InvalidArgumentException('non-nullable to_fri cannot be null');
        }
        $this->container['to_fri'] = $to_fri;

        return $this;
    }

    /**
     * Gets from_fri
     *
     * @return string
     */
    public function getFromFri()
    {
        return $this->container['from_fri'];
    }

    /**
     * Sets from_fri
     *
     * @param string $from_fri The Financial Resource Identifier of the sending account.
     *
     * @return self
     */
    public function setFromFri($from_fri)
    {
        if (is_null($from_fri)) {
            throw new \InvalidArgumentException('non-nullable from_fri cannot be null');
        }
        $this->container['from_fri'] = $from_fri;

        return $this;
    }

    /**
     * Gets from_currency
     *
     * @return string
     */
    public function getFromCurrency()
    {
        return $this->container['from_currency'];
    }

    /**
     * Sets from_currency
     *
     * @param string $from_currency The currency of the account holder from where the debit happens. ISO4217 Currency
     *
     * @return self
     */
    public function setFromCurrency($from_currency)
    {
        if (is_null($from_currency)) {
            throw new \InvalidArgumentException('non-nullable from_currency cannot be null');
        }
        $this->container['from_currency'] = $from_currency;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return string
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param string $created_time The date and time at which the pre-approval was created. Validated with IsIso8601DateTime. Parameter can not be NULL
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        if (is_null($created_time)) {
            throw new \InvalidArgumentException('non-nullable created_time cannot be null');
        }
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets approved_time
     *
     * @return string|null
     */
    public function getApprovedTime()
    {
        return $this->container['approved_time'];
    }

    /**
     * Sets approved_time
     *
     * @param string|null $approved_time The date and time at which the pre-approval was approved. Validated with IsIso8601DateTime. Parameter can not be NULL.
     *
     * @return self
     */
    public function setApprovedTime($approved_time)
    {
        if (is_null($approved_time)) {
            throw new \InvalidArgumentException('non-nullable approved_time cannot be null');
        }
        $this->container['approved_time'] = $approved_time;

        return $this;
    }

    /**
     * Gets expiry_time
     *
     * @return string|null
     */
    public function getExpiryTime()
    {
        return $this->container['expiry_time'];
    }

    /**
     * Sets expiry_time
     *
     * @param string|null $expiry_time The date and time at which the pre-approval expires. Validated with IsIso8601DateTime. Parameter can not be NULL.
     *
     * @return self
     */
    public function setExpiryTime($expiry_time)
    {
        if (is_null($expiry_time)) {
            throw new \InvalidArgumentException('non-nullable expiry_time cannot be null');
        }
        $this->container['expiry_time'] = $expiry_time;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message Message. Validated with IsRestirctedString. Parameter can not be NULL.
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return string|null
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string|null $frequency frequency
     *
     * @return self
     */
    public function setFrequency($frequency)
    {
        if (is_null($frequency)) {
            throw new \InvalidArgumentException('non-nullable frequency cannot be null');
        }
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!in_array($frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'frequency', must be one of '%s'",
                    $frequency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date The start date of the pre-approval. Validated with IsDateString. Parameter can not be NULL.
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets last_used_date
     *
     * @return string|null
     */
    public function getLastUsedDate()
    {
        return $this->container['last_used_date'];
    }

    /**
     * Sets last_used_date
     *
     * @param string|null $last_used_date The date pre-approval was used last. Validated with IsIso8601DateTime. Parameter can not be NULL.
     *
     * @return self
     */
    public function setLastUsedDate($last_used_date)
    {
        if (is_null($last_used_date)) {
            throw new \InvalidArgumentException('non-nullable last_used_date cannot be null');
        }
        $this->container['last_used_date'] = $last_used_date;

        return $this;
    }

    /**
     * Gets offer
     *
     * @return string|null
     */
    public function getOffer()
    {
        return $this->container['offer'];
    }

    /**
     * Sets offer
     *
     * @param string|null $offer The offer description. Validated with IsRestrictedString. Parameter can not be NULL.
     *
     * @return self
     */
    public function setOffer($offer)
    {
        if (is_null($offer)) {
            throw new \InvalidArgumentException('non-nullable offer cannot be null');
        }
        $this->container['offer'] = $offer;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id The external reference id. Validated with IsExternalReferenceString. Parameter can not be NULL.
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets max_debit_amount
     *
     * @return string|null
     */
    public function getMaxDebitAmount()
    {
        return $this->container['max_debit_amount'];
    }

    /**
     * Sets max_debit_amount
     *
     * @param string|null $max_debit_amount The max debit amount allowed. Contains a non-negative amount. Validated with IsAmount.
     *
     * @return self
     */
    public function setMaxDebitAmount($max_debit_amount)
    {
        if (is_null($max_debit_amount)) {
            throw new \InvalidArgumentException('non-nullable max_debit_amount cannot be null');
        }
        $this->container['max_debit_amount'] = $max_debit_amount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


