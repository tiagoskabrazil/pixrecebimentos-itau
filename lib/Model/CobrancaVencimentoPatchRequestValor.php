<?php
/**
 * CobrancaVencimentoPatchRequestValor
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
 * CobrancaVencimentoPatchRequestValor Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CobrancaVencimentoPatchRequestValor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'cobrancaVencimentoPatchRequest_valor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'original' => 'string',
'multa' => '\Swagger\Client\Model\ValorMulta',
'juros' => '\Swagger\Client\Model\ValorJuros',
'abatimento' => '\Swagger\Client\Model\ValorAbatimento',
'desconto' => '\Swagger\Client\Model\ValorDesconto'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'original' => null,
'multa' => null,
'juros' => null,
'abatimento' => null,
'desconto' => null    ];

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
        'original' => 'original',
'multa' => 'multa',
'juros' => 'juros',
'abatimento' => 'abatimento',
'desconto' => 'desconto'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'original' => 'setOriginal',
'multa' => 'setMulta',
'juros' => 'setJuros',
'abatimento' => 'setAbatimento',
'desconto' => 'setDesconto'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'original' => 'getOriginal',
'multa' => 'getMulta',
'juros' => 'getJuros',
'abatimento' => 'getAbatimento',
'desconto' => 'getDesconto'    ];

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
        $this->container['original'] = isset($data['original']) ? $data['original'] : null;
        $this->container['multa'] = isset($data['multa']) ? $data['multa'] : null;
        $this->container['juros'] = isset($data['juros']) ? $data['juros'] : null;
        $this->container['abatimento'] = isset($data['abatimento']) ? $data['abatimento'] : null;
        $this->container['desconto'] = isset($data['desconto']) ? $data['desconto'] : null;
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
     * Gets original
     *
     * @return string
     */
    public function getOriginal()
    {
        return $this->container['original'];
    }

    /**
     * Sets original
     *
     * @param string $original Valor nominal/original da cobrança.
     *
     * @return $this
     */
    public function setOriginal($original)
    {
        $this->container['original'] = $original;

        return $this;
    }

    /**
     * Gets multa
     *
     * @return \Swagger\Client\Model\ValorMulta
     */
    public function getMulta()
    {
        return $this->container['multa'];
    }

    /**
     * Sets multa
     *
     * @param \Swagger\Client\Model\ValorMulta $multa multa
     *
     * @return $this
     */
    public function setMulta($multa)
    {
        $this->container['multa'] = $multa;

        return $this;
    }

    /**
     * Gets juros
     *
     * @return \Swagger\Client\Model\ValorJuros
     */
    public function getJuros()
    {
        return $this->container['juros'];
    }

    /**
     * Sets juros
     *
     * @param \Swagger\Client\Model\ValorJuros $juros juros
     *
     * @return $this
     */
    public function setJuros($juros)
    {
        $this->container['juros'] = $juros;

        return $this;
    }

    /**
     * Gets abatimento
     *
     * @return \Swagger\Client\Model\ValorAbatimento
     */
    public function getAbatimento()
    {
        return $this->container['abatimento'];
    }

    /**
     * Sets abatimento
     *
     * @param \Swagger\Client\Model\ValorAbatimento $abatimento abatimento
     *
     * @return $this
     */
    public function setAbatimento($abatimento)
    {
        $this->container['abatimento'] = $abatimento;

        return $this;
    }

    /**
     * Gets desconto
     *
     * @return \Swagger\Client\Model\ValorDesconto
     */
    public function getDesconto()
    {
        return $this->container['desconto'];
    }

    /**
     * Sets desconto
     *
     * @param \Swagger\Client\Model\ValorDesconto $desconto desconto
     *
     * @return $this
     */
    public function setDesconto($desconto)
    {
        $this->container['desconto'] = $desconto;

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
