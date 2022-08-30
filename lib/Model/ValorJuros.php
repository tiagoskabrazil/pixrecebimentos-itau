<?php
/**
 * ValorJuros
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Recebimentos Pix
 *
 * Recebimentos Pix
 *
 * OpenAPI spec version: 2.41.15
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.35
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
 * ValorJuros Class Doc Comment
 *
 * @category Class
 * @description Juros aplicado a cobranca
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ValorJuros implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'valor_juros';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'modalidade' => 'int',
'valor_perc' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'modalidade' => null,
'valor_perc' => null    ];

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
        'modalidade' => 'modalidade',
'valor_perc' => 'valorPerc'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'modalidade' => 'setModalidade',
'valor_perc' => 'setValorPerc'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'modalidade' => 'getModalidade',
'valor_perc' => 'getValorPerc'    ];

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
        $this->container['modalidade'] = isset($data['modalidade']) ? $data['modalidade'] : null;
        $this->container['valor_perc'] = isset($data['valor_perc']) ? $data['valor_perc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['modalidade'] === null) {
            $invalidProperties[] = "'modalidade' can't be null";
        }
        if ($this->container['valor_perc'] === null) {
            $invalidProperties[] = "'valor_perc' can't be null";
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
     * Gets modalidade
     *
     * @return int
     */
    public function getModalidade()
    {
        return $this->container['modalidade'];
    }

    /**
     * Sets modalidade
     *
     * @param int $modalidade Modalidade do juros <table><tr><td>Descrição</td><td>Dominio</td></tr><tr><td>Valor (dias corridos)</td><td>1</td></tr><tr><td>Percentual ao dia (dias corridos)</td><td>2</td></tr><tr><td>Percentual ao mês (dias corridos)</td><td>3</td></tr><tr><td>Percentual ao ano (dias corridos)</td><td>4</td></tr><tr><td>Valor (dias úteis)</td><td>5</td></tr><tr><td>Percentual ao dia (dias úteis)</td><td>6</td></tr><tr><td>Percentual ao mês (dias úteis)</td><td>7</td></tr><tr><td>Percentual ao ano (dias úteis)</td><td>8</td></tr></table>
     *
     * @return $this
     */
    public function setModalidade($modalidade)
    {
        $this->container['modalidade'] = $modalidade;

        return $this;
    }

    /**
     * Gets valor_perc
     *
     * @return string
     */
    public function getValorPerc()
    {
        return $this->container['valor_perc'];
    }

    /**
     * Sets valor_perc
     *
     * @param string $valor_perc Juros do documento em valor absoluto ou percentual.
     *
     * @return $this
     */
    public function setValorPerc($valor_perc)
    {
        $this->container['valor_perc'] = $valor_perc;

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
