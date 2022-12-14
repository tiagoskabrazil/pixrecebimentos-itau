<?php
/**
 * DevolucaoPutResponse
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
 * DevolucaoPutResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DevolucaoPutResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'devolucaoPutResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'rtr_id' => 'string',
'valor' => 'string',
'natureza' => 'string',
'descricao' => 'string',
'horario' => '\Swagger\Client\Model\DevolucaoPutResponseHorario',
'status' => 'string',
'motivo' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'rtr_id' => null,
'valor' => null,
'natureza' => null,
'descricao' => null,
'horario' => null,
'status' => null,
'motivo' => null    ];

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
        'id' => 'id',
'rtr_id' => 'rtrId',
'valor' => 'valor',
'natureza' => 'natureza',
'descricao' => 'descricao',
'horario' => 'horario',
'status' => 'status',
'motivo' => 'motivo'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'rtr_id' => 'setRtrId',
'valor' => 'setValor',
'natureza' => 'setNatureza',
'descricao' => 'setDescricao',
'horario' => 'setHorario',
'status' => 'setStatus',
'motivo' => 'setMotivo'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'rtr_id' => 'getRtrId',
'valor' => 'getValor',
'natureza' => 'getNatureza',
'descricao' => 'getDescricao',
'horario' => 'getHorario',
'status' => 'getStatus',
'motivo' => 'getMotivo'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['rtr_id'] = isset($data['rtr_id']) ? $data['rtr_id'] : null;
        $this->container['valor'] = isset($data['valor']) ? $data['valor'] : null;
        $this->container['natureza'] = isset($data['natureza']) ? $data['natureza'] : null;
        $this->container['descricao'] = isset($data['descricao']) ? $data['descricao'] : null;
        $this->container['horario'] = isset($data['horario']) ? $data['horario'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['motivo'] = isset($data['motivo']) ? $data['motivo'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['rtr_id'] === null) {
            $invalidProperties[] = "'rtr_id' can't be null";
        }
        if ($this->container['valor'] === null) {
            $invalidProperties[] = "'valor' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Id gerado pelo cliente para representar unicamente uma devolu????o.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets rtr_id
     *
     * @return string
     */
    public function getRtrId()
    {
        return $this->container['rtr_id'];
    }

    /**
     * Sets rtr_id
     *
     * @param string $rtr_id ReturnIdentification que transita na PACS004.
     *
     * @return $this
     */
    public function setRtrId($rtr_id)
    {
        $this->container['rtr_id'] = $rtr_id;

        return $this;
    }

    /**
     * Gets valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->container['valor'];
    }

    /**
     * Sets valor
     *
     * @param string $valor Valor a devolver.
     *
     * @return $this
     */
    public function setValor($valor)
    {
        $this->container['valor'] = $valor;

        return $this;
    }

    /**
     * Gets natureza
     *
     * @return string
     */
    public function getNatureza()
    {
        return $this->container['natureza'];
    }

    /**
     * Sets natureza
     *
     * @param string $natureza Indica qual ?? a natureza da devolu????o. Uma devolu????o pode ser relacionada a um Pix comum (corresponde ao c??digo MD06 da pacs.004), ou a um Pix de Saque ou Troco (corresponde ao c??digo SL02 da pacs.004). Na aus??ncia deste campo a natureza deve ser interpretada como sendo de um Pix comum (ORIGINAL).
     *
     * @return $this
     */
    public function setNatureza($natureza)
    {
        $this->container['natureza'] = $natureza;

        return $this;
    }

    /**
     * Gets descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->container['descricao'];
    }

    /**
     * Sets descricao
     *
     * @param string $descricao O campo descricao, opcional, determina um texto a ser apresentado ao pagador contendo informa????es sobre a devolu????o. Esse texto ser?? preenchido, na pacs.004, pelo PSP do recebedor, no campo RemittanceInformation. O tamanho do campo na pacs.004 est?? limitado a 140 caracteres.
     *
     * @return $this
     */
    public function setDescricao($descricao)
    {
        $this->container['descricao'] = $descricao;

        return $this;
    }

    /**
     * Gets horario
     *
     * @return \Swagger\Client\Model\DevolucaoPutResponseHorario
     */
    public function getHorario()
    {
        return $this->container['horario'];
    }

    /**
     * Sets horario
     *
     * @param \Swagger\Client\Model\DevolucaoPutResponseHorario $horario horario
     *
     * @return $this
     */
    public function setHorario($horario)
    {
        $this->container['horario'] = $horario;

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
     * @param string $status Status da Devolu????o <table><tr><td>ENUM</td></tr><tr><td>EM_PROCESSAMENTO</td></tr><tr><td>DEVOLVIDO</td></tr><tr><td>NAO_REALIZADO</td></tr></table>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets motivo
     *
     * @return string
     */
    public function getMotivo()
    {
        return $this->container['motivo'];
    }

    /**
     * Sets motivo
     *
     * @param string $motivo Campo opcional que pode ser utilizado pelo PSP recebedor para detalhar os motivos de a devolu????o ter atingido o status em quest??o. Pode ser utilizado, por exemplo, para detalhar o motivo de a devolu????o n??o ter sido realizada.
     *
     * @return $this
     */
    public function setMotivo($motivo)
    {
        $this->container['motivo'] = $motivo;

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
