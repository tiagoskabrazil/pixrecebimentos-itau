<?php
/**
 * CobrancaVencimentoPutResponse
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
 * CobrancaVencimentoPutResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CobrancaVencimentoPutResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'cobrancaVencimentoPutResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
'txid' => 'string',
'revisao' => 'int',
'devedor' => '\Swagger\Client\Model\Devedor',
'recebedor' => '\Swagger\Client\Model\Recebedor',
'valor' => '\Swagger\Client\Model\CobrancaVencimentoPutRequestPropertiesValor',
'chave' => 'string',
'solicitacao_pagador' => 'string',
'calendario' => '\Swagger\Client\Model\CobrancaVencimentoPatchResponseCalendario',
'loc' => '\Swagger\Client\Model\Location',
'info_adicionais' => '\Swagger\Client\Model\InformacaoAdicional[]',
'pix_copia_e_cola' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
'txid' => null,
'revisao' => null,
'devedor' => null,
'recebedor' => null,
'valor' => null,
'chave' => null,
'solicitacao_pagador' => null,
'calendario' => null,
'loc' => null,
'info_adicionais' => null,
'pix_copia_e_cola' => null    ];

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
        'status' => 'status',
'txid' => 'txid',
'revisao' => 'revisao',
'devedor' => 'devedor',
'recebedor' => 'recebedor',
'valor' => 'valor',
'chave' => 'chave',
'solicitacao_pagador' => 'solicitacaoPagador',
'calendario' => 'calendario',
'loc' => 'loc',
'info_adicionais' => 'infoAdicionais',
'pix_copia_e_cola' => 'pixCopiaECola'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
'txid' => 'setTxid',
'revisao' => 'setRevisao',
'devedor' => 'setDevedor',
'recebedor' => 'setRecebedor',
'valor' => 'setValor',
'chave' => 'setChave',
'solicitacao_pagador' => 'setSolicitacaoPagador',
'calendario' => 'setCalendario',
'loc' => 'setLoc',
'info_adicionais' => 'setInfoAdicionais',
'pix_copia_e_cola' => 'setPixCopiaECola'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
'txid' => 'getTxid',
'revisao' => 'getRevisao',
'devedor' => 'getDevedor',
'recebedor' => 'getRecebedor',
'valor' => 'getValor',
'chave' => 'getChave',
'solicitacao_pagador' => 'getSolicitacaoPagador',
'calendario' => 'getCalendario',
'loc' => 'getLoc',
'info_adicionais' => 'getInfoAdicionais',
'pix_copia_e_cola' => 'getPixCopiaECola'    ];

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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['txid'] = isset($data['txid']) ? $data['txid'] : null;
        $this->container['revisao'] = isset($data['revisao']) ? $data['revisao'] : null;
        $this->container['devedor'] = isset($data['devedor']) ? $data['devedor'] : null;
        $this->container['recebedor'] = isset($data['recebedor']) ? $data['recebedor'] : null;
        $this->container['valor'] = isset($data['valor']) ? $data['valor'] : null;
        $this->container['chave'] = isset($data['chave']) ? $data['chave'] : null;
        $this->container['solicitacao_pagador'] = isset($data['solicitacao_pagador']) ? $data['solicitacao_pagador'] : null;
        $this->container['calendario'] = isset($data['calendario']) ? $data['calendario'] : null;
        $this->container['loc'] = isset($data['loc']) ? $data['loc'] : null;
        $this->container['info_adicionais'] = isset($data['info_adicionais']) ? $data['info_adicionais'] : null;
        $this->container['pix_copia_e_cola'] = isset($data['pix_copia_e_cola']) ? $data['pix_copia_e_cola'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['txid'] === null) {
            $invalidProperties[] = "'txid' can't be null";
        }
        if ($this->container['revisao'] === null) {
            $invalidProperties[] = "'revisao' can't be null";
        }
        if ($this->container['devedor'] === null) {
            $invalidProperties[] = "'devedor' can't be null";
        }
        if ($this->container['recebedor'] === null) {
            $invalidProperties[] = "'recebedor' can't be null";
        }
        if ($this->container['valor'] === null) {
            $invalidProperties[] = "'valor' can't be null";
        }
        if ($this->container['chave'] === null) {
            $invalidProperties[] = "'chave' can't be null";
        }
        if ($this->container['calendario'] === null) {
            $invalidProperties[] = "'calendario' can't be null";
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
     * @param string $status Status da cobrança. <table><tr><td>ENUM</td></tr><tr><td>ATIVA</td></tr><tr><td>CONCLUIDA</td></tr><tr><td>REMOVIDA_PELO_USUARIO_RECEBEDOR</td></tr><tr><td>REMOVIDA_PELO_PSP</td></tr></table>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets txid
     *
     * @return string
     */
    public function getTxid()
    {
        return $this->container['txid'];
    }

    /**
     * Sets txid
     *
     * @param string $txid O campo txid determina o identificador da transação. O objetivo desse campo é ser um elemento que possibilite a conciliação de pagamentos. O txid é criado exclusivamente pelo usuário recebedor e está sob sua responsabilidade. Deve ser único por CNPJ do recebedor. Para Code dinâmico o campo deve possuir de 26 posição até 35 posições. Os caracteres permitidos no contexto do Pix para o campo txId são: Letras minúsculas, de ‘a’ a ‘z’, Letras maiúsculas, de ‘A’ a ‘Z’, Dígitos decimais, de ‘0’ a ‘9’
     *
     * @return $this
     */
    public function setTxid($txid)
    {
        $this->container['txid'] = $txid;

        return $this;
    }

    /**
     * Gets revisao
     *
     * @return int
     */
    public function getRevisao()
    {
        return $this->container['revisao'];
    }

    /**
     * Sets revisao
     *
     * @param int $revisao Quantidade de revisões da cobrança.
     *
     * @return $this
     */
    public function setRevisao($revisao)
    {
        $this->container['revisao'] = $revisao;

        return $this;
    }

    /**
     * Gets devedor
     *
     * @return \Swagger\Client\Model\Devedor
     */
    public function getDevedor()
    {
        return $this->container['devedor'];
    }

    /**
     * Sets devedor
     *
     * @param \Swagger\Client\Model\Devedor $devedor devedor
     *
     * @return $this
     */
    public function setDevedor($devedor)
    {
        $this->container['devedor'] = $devedor;

        return $this;
    }

    /**
     * Gets recebedor
     *
     * @return \Swagger\Client\Model\Recebedor
     */
    public function getRecebedor()
    {
        return $this->container['recebedor'];
    }

    /**
     * Sets recebedor
     *
     * @param \Swagger\Client\Model\Recebedor $recebedor recebedor
     *
     * @return $this
     */
    public function setRecebedor($recebedor)
    {
        $this->container['recebedor'] = $recebedor;

        return $this;
    }

    /**
     * Gets valor
     *
     * @return \Swagger\Client\Model\CobrancaVencimentoPutRequestPropertiesValor
     */
    public function getValor()
    {
        return $this->container['valor'];
    }

    /**
     * Sets valor
     *
     * @param \Swagger\Client\Model\CobrancaVencimentoPutRequestPropertiesValor $valor valor
     *
     * @return $this
     */
    public function setValor($valor)
    {
        $this->container['valor'] = $valor;

        return $this;
    }

    /**
     * Gets chave
     *
     * @return string
     */
    public function getChave()
    {
        return $this->container['chave'];
    }

    /**
     * Sets chave
     *
     * @param string $chave Chave DICT do recebedor
     *
     * @return $this
     */
    public function setChave($chave)
    {
        $this->container['chave'] = $chave;

        return $this;
    }

    /**
     * Gets solicitacao_pagador
     *
     * @return string
     */
    public function getSolicitacaoPagador()
    {
        return $this->container['solicitacao_pagador'];
    }

    /**
     * Sets solicitacao_pagador
     *
     * @param string $solicitacao_pagador O campo solicitacaoPagador, determina um texto a ser apresentado ao pagador para que ele possa digitar uma informação correlata, em formato livre, a ser enviada ao recebedor
     *
     * @return $this
     */
    public function setSolicitacaoPagador($solicitacao_pagador)
    {
        $this->container['solicitacao_pagador'] = $solicitacao_pagador;

        return $this;
    }

    /**
     * Gets calendario
     *
     * @return \Swagger\Client\Model\CobrancaVencimentoPatchResponseCalendario
     */
    public function getCalendario()
    {
        return $this->container['calendario'];
    }

    /**
     * Sets calendario
     *
     * @param \Swagger\Client\Model\CobrancaVencimentoPatchResponseCalendario $calendario calendario
     *
     * @return $this
     */
    public function setCalendario($calendario)
    {
        $this->container['calendario'] = $calendario;

        return $this;
    }

    /**
     * Gets loc
     *
     * @return \Swagger\Client\Model\Location
     */
    public function getLoc()
    {
        return $this->container['loc'];
    }

    /**
     * Sets loc
     *
     * @param \Swagger\Client\Model\Location $loc loc
     *
     * @return $this
     */
    public function setLoc($loc)
    {
        $this->container['loc'] = $loc;

        return $this;
    }

    /**
     * Gets info_adicionais
     *
     * @return \Swagger\Client\Model\InformacaoAdicional[]
     */
    public function getInfoAdicionais()
    {
        return $this->container['info_adicionais'];
    }

    /**
     * Sets info_adicionais
     *
     * @param \Swagger\Client\Model\InformacaoAdicional[] $info_adicionais Cada respectiva informação adicional contida na lista (nome e valor) deve ser apresentada ao pagador
     *
     * @return $this
     */
    public function setInfoAdicionais($info_adicionais)
    {
        $this->container['info_adicionais'] = $info_adicionais;

        return $this;
    }

    /**
     * Gets pix_copia_e_cola
     *
     * @return string
     */
    public function getPixCopiaECola()
    {
        return $this->container['pix_copia_e_cola'];
    }

    /**
     * Sets pix_copia_e_cola
     *
     * @param string $pix_copia_e_cola Este campo retorna o valor do Pix Copia e Cola correspondente à cobrança. Trata-se da sequência de caracteres que representa o BR Code.
     *
     * @return $this
     */
    public function setPixCopiaECola($pix_copia_e_cola)
    {
        $this->container['pix_copia_e_cola'] = $pix_copia_e_cola;

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
