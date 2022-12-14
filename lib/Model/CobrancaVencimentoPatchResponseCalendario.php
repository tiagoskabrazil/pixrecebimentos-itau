<?php
/**
 * CobrancaVencimentoPatchResponseCalendario
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
 * CobrancaVencimentoPatchResponseCalendario Class Doc Comment
 *
 * @category Class
 * @description Os campos aninhados sob o identificador calendário e que organizam informações a respeito de controle de tempo da cobrança
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CobrancaVencimentoPatchResponseCalendario implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'cobrancaVencimentoPatchResponse_calendario';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'criacao' => 'string',
'data_de_vencimento' => 'string',
'validade_apos_vencimento' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'criacao' => null,
'data_de_vencimento' => null,
'validade_apos_vencimento' => null    ];

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
        'criacao' => 'criacao',
'data_de_vencimento' => 'dataDeVencimento',
'validade_apos_vencimento' => 'validadeAposVencimento'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'criacao' => 'setCriacao',
'data_de_vencimento' => 'setDataDeVencimento',
'validade_apos_vencimento' => 'setValidadeAposVencimento'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'criacao' => 'getCriacao',
'data_de_vencimento' => 'getDataDeVencimento',
'validade_apos_vencimento' => 'getValidadeAposVencimento'    ];

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
        $this->container['criacao'] = isset($data['criacao']) ? $data['criacao'] : null;
        $this->container['data_de_vencimento'] = isset($data['data_de_vencimento']) ? $data['data_de_vencimento'] : null;
        $this->container['validade_apos_vencimento'] = isset($data['validade_apos_vencimento']) ? $data['validade_apos_vencimento'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['criacao'] === null) {
            $invalidProperties[] = "'criacao' can't be null";
        }
        if ($this->container['data_de_vencimento'] === null) {
            $invalidProperties[] = "'data_de_vencimento' can't be null";
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
     * Gets criacao
     *
     * @return string
     */
    public function getCriacao()
    {
        return $this->container['criacao'];
    }

    /**
     * Sets criacao
     *
     * @param string $criacao Data e Hora de criação da cobrança
     *
     * @return $this
     */
    public function setCriacao($criacao)
    {
        $this->container['criacao'] = $criacao;

        return $this;
    }

    /**
     * Gets data_de_vencimento
     *
     * @return string
     */
    public function getDataDeVencimento()
    {
        return $this->container['data_de_vencimento'];
    }

    /**
     * Sets data_de_vencimento
     *
     * @param string $data_de_vencimento Data de vencimento da cobrança
     *
     * @return $this
     */
    public function setDataDeVencimento($data_de_vencimento)
    {
        $this->container['data_de_vencimento'] = $data_de_vencimento;

        return $this;
    }

    /**
     * Gets validade_apos_vencimento
     *
     * @return int
     */
    public function getValidadeAposVencimento()
    {
        return $this->container['validade_apos_vencimento'];
    }

    /**
     * Sets validade_apos_vencimento
     *
     * @param int $validade_apos_vencimento Quantidade de dias corridos após o vencimento em que a cobrança poderá ser paga
     *
     * @return $this
     */
    public function setValidadeAposVencimento($validade_apos_vencimento)
    {
        $this->container['validade_apos_vencimento'] = $validade_apos_vencimento;

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
