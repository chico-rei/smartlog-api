# Swagger\Client\MdulosApi

All URIs are relative to *http://api.sistemasmartlog.com.br*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cEPsAtendidosPhpGet**](MdulosApi.md#cEPsAtendidosPhpGet) | **GET** /CEPsAtendidos.php | Consultar se o CEP é atendido.
[**cotacaoPhpPost**](MdulosApi.md#cotacaoPhpPost) | **POST** /Cotacao.php | Realizar cotação de valor de frete
[**rastreamentoPhpGet**](MdulosApi.md#rastreamentoPhpGet) | **GET** /Rastreamento.php | Consultar o status da encomenda
[**referenciaEmbarquePhpPost**](MdulosApi.md#referenciaEmbarquePhpPost) | **POST** /ReferenciaEmbarque.php | Realizar criação de código de referência de embarque


# **cEPsAtendidosPhpGet**
> cEPsAtendidosPhpGet($cnpj, $token, $cep)

Consultar se o CEP é atendido.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MdulosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = "cnpj_example"; // string | 
$token = "token_example"; // string | 
$cep = "cep_example"; // string | 

try {
    $apiInstance->cEPsAtendidosPhpGet($cnpj, $token, $cep);
} catch (Exception $e) {
    echo 'Exception when calling MdulosApi->cEPsAtendidosPhpGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cnpj** | **string**|  |
 **token** | **string**|  |
 **cep** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cotacaoPhpPost**
> cotacaoPhpPost($cnpj, $token, $peso, $cep_destino, $valor, $volumes, $altura, $largura, $comprimento)

Realizar cotação de valor de frete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MdulosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = "cnpj_example"; // string | 
$token = "token_example"; // string | 
$peso = 8.14; // float | 
$cep_destino = "cep_destino_example"; // string | 
$valor = 8.14; // float | 
$volumes = 8.14; // float | 
$altura = 8.14; // float | 
$largura = 8.14; // float | 
$comprimento = 8.14; // float | 

try {
    $apiInstance->cotacaoPhpPost($cnpj, $token, $peso, $cep_destino, $valor, $volumes, $altura, $largura, $comprimento);
} catch (Exception $e) {
    echo 'Exception when calling MdulosApi->cotacaoPhpPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cnpj** | **string**|  |
 **token** | **string**|  |
 **peso** | **float**|  |
 **cep_destino** | **string**|  |
 **valor** | **float**|  |
 **volumes** | **float**|  |
 **altura** | **float**|  |
 **largura** | **float**|  |
 **comprimento** | **float**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rastreamentoPhpGet**
> rastreamentoPhpGet($cnpj, $token, $chave_n_fe, $conhecimento)

Consultar o status da encomenda

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MdulosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = "cnpj_example"; // string | 
$token = "token_example"; // string | 
$chave_n_fe = 8.14; // float | 
$conhecimento = "conhecimento_example"; // string | 

try {
    $apiInstance->rastreamentoPhpGet($cnpj, $token, $chave_n_fe, $conhecimento);
} catch (Exception $e) {
    echo 'Exception when calling MdulosApi->rastreamentoPhpGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cnpj** | **string**|  |
 **token** | **string**|  |
 **chave_n_fe** | **float**|  | [optional]
 **conhecimento** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referenciaEmbarquePhpPost**
> referenciaEmbarquePhpPost($cnpj, $token, $unidade, $body)

Realizar criação de código de referência de embarque

Este método tem o objetivo de realizar a solicitação/criação de uma minuta eletronica de acordo com os parametros informados

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MdulosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = "cnpj_example"; // string | 
$token = "token_example"; // string | 
$unidade = "unidade_example"; // string | Sigla na unidade Smartlog
$body = new \Swagger\Client\Model\Referencia(); // \Swagger\Client\Model\Referencia | Dados do pedido ou nota fiscal

try {
    $apiInstance->referenciaEmbarquePhpPost($cnpj, $token, $unidade, $body);
} catch (Exception $e) {
    echo 'Exception when calling MdulosApi->referenciaEmbarquePhpPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cnpj** | **string**|  |
 **token** | **string**|  |
 **unidade** | **string**| Sigla na unidade Smartlog |
 **body** | [**\Swagger\Client\Model\Referencia**](../Model/Referencia.md)| Dados do pedido ou nota fiscal |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

