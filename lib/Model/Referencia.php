<?php
/**
 * Referencia
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API Smartlog
 *
 * API para cálculo de valor de frete,rastreamento de encomendas e CEP's atendidos na plataforma Smartlog
 *
 * OpenAPI spec version: 2.0.1
 * Contact: junior@sistemasmartlog.com.br
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
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
 * Referencia Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Referencia implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'referencia';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'numero_pedido' => 'string',
        'pesototal' => 'float',
        'volumestotal' => 'float',
        'valortotal' => 'float',
        'notas_fiscais' => '\Swagger\Client\Model\NotasFiscais[]',
        'destinatario' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'numero_pedido' => null,
        'pesototal' => null,
        'volumestotal' => null,
        'valortotal' => null,
        'notas_fiscais' => null,
        'destinatario' => null
    ];

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
        'numero_pedido' => 'numeroPedido',
        'pesototal' => 'pesototal',
        'volumestotal' => 'volumestotal',
        'valortotal' => 'valortotal',
        'notas_fiscais' => 'notasFiscais',
        'destinatario' => 'destinatario'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'numero_pedido' => 'setNumeroPedido',
        'pesototal' => 'setPesototal',
        'volumestotal' => 'setVolumestotal',
        'valortotal' => 'setValortotal',
        'notas_fiscais' => 'setNotasFiscais',
        'destinatario' => 'setDestinatario'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'numero_pedido' => 'getNumeroPedido',
        'pesototal' => 'getPesototal',
        'volumestotal' => 'getVolumestotal',
        'valortotal' => 'getValortotal',
        'notas_fiscais' => 'getNotasFiscais',
        'destinatario' => 'getDestinatario'
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
        $this->container['numero_pedido'] = isset($data['numero_pedido']) ? $data['numero_pedido'] : null;
        $this->container['pesototal'] = isset($data['pesototal']) ? $data['pesototal'] : null;
        $this->container['volumestotal'] = isset($data['volumestotal']) ? $data['volumestotal'] : null;
        $this->container['valortotal'] = isset($data['valortotal']) ? $data['valortotal'] : null;
        $this->container['notas_fiscais'] = isset($data['notas_fiscais']) ? $data['notas_fiscais'] : null;
        $this->container['destinatario'] = isset($data['destinatario']) ? $data['destinatario'] : null;
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
     * Gets numero_pedido
     *
     * @return string
     */
    public function getNumeroPedido()
    {
        return $this->container['numero_pedido'];
    }

    /**
     * Sets numero_pedido
     *
     * @param string $numero_pedido numero_pedido
     *
     * @return $this
     */
    public function setNumeroPedido($numero_pedido)
    {
        $this->container['numero_pedido'] = $numero_pedido;

        return $this;
    }

    /**
     * Gets pesototal
     *
     * @return float
     */
    public function getPesototal()
    {
        return $this->container['pesototal'];
    }

    /**
     * Sets pesototal
     *
     * @param float $pesototal Peso Total
     *
     * @return $this
     */
    public function setPesototal($pesototal)
    {
        $this->container['pesototal'] = $pesototal;

        return $this;
    }

    /**
     * Gets volumestotal
     *
     * @return float
     */
    public function getVolumestotal()
    {
        return $this->container['volumestotal'];
    }

    /**
     * Sets volumestotal
     *
     * @param float $volumestotal Total de volumes
     *
     * @return $this
     */
    public function setVolumestotal($volumestotal)
    {
        $this->container['volumestotal'] = $volumestotal;

        return $this;
    }

    /**
     * Gets valortotal
     *
     * @return float
     */
    public function getValortotal()
    {
        return $this->container['valortotal'];
    }

    /**
     * Sets valortotal
     *
     * @param float $valortotal Valor Total do pedido
     *
     * @return $this
     */
    public function setValortotal($valortotal)
    {
        $this->container['valortotal'] = $valortotal;

        return $this;
    }

    /**
     * Gets notas_fiscais
     *
     * @return \Swagger\Client\Model\NotasFiscais[]
     */
    public function getNotasFiscais()
    {
        return $this->container['notas_fiscais'];
    }

    /**
     * Sets notas_fiscais
     *
     * @param \Swagger\Client\Model\NotasFiscais[] $notas_fiscais notas_fiscais
     *
     * @return $this
     */
    public function setNotasFiscais($notas_fiscais)
    {
        $this->container['notas_fiscais'] = $notas_fiscais;

        return $this;
    }

    /**
     * Gets destinatario
     *
     * @return object
     */
    public function getDestinatario()
    {
        return $this->container['destinatario'];
    }

    /**
     * Sets destinatario
     *
     * @param object $destinatario destinatario
     *
     * @return $this
     */
    public function setDestinatario($destinatario)
    {
        $this->container['destinatario'] = $destinatario;

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


