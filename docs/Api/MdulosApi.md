# Swagger\Client\MdulosApi

All URIs are relative to *http://api.sistemasmartlog.com.br*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cEPsAtendidosColetaPhpGet**](MdulosApi.md#cEPsAtendidosColetaPhpGet) | **GET** /CEPsAtendidosColeta.php | Consultar os CEP&#39;s onde a coleta está disponível
[**cEPsAtendidosEntregaPhpGet**](MdulosApi.md#cEPsAtendidosEntregaPhpGet) | **GET** /CEPsAtendidosEntrega.php | Consultar os CEP&#39;s onde a entrega está disponível
[**cotacaoPhpPost**](MdulosApi.md#cotacaoPhpPost) | **POST** /Cotacao.php | Realizar cotação de valor de frete
[**rastreamentoPhpGet**](MdulosApi.md#rastreamentoPhpGet) | **GET** /Rastreamento.php | Consultar o status da encomenda


# **cEPsAtendidosColetaPhpGet**
> cEPsAtendidosColetaPhpGet($cnpj, $token)

Consultar os CEP's onde a coleta está disponível

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

try {
    $apiInstance->cEPsAtendidosColetaPhpGet($cnpj, $token);
} catch (Exception $e) {
    echo 'Exception when calling MdulosApi->cEPsAtendidosColetaPhpGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cnpj** | **string**|  |
 **token** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cEPsAtendidosEntregaPhpGet**
> cEPsAtendidosEntregaPhpGet($cnpj, $token)

Consultar os CEP's onde a entrega está disponível

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

try {
    $apiInstance->cEPsAtendidosEntregaPhpGet($cnpj, $token);
} catch (Exception $e) {
    echo 'Exception when calling MdulosApi->cEPsAtendidosEntregaPhpGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cnpj** | **string**|  |
 **token** | **string**|  |

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
> rastreamentoPhpGet($cnpj, $token, $chave_n_fe, $conhecimento, $chave_c_te)

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
$chave_c_te = 8.14; // float | 

try {
    $apiInstance->rastreamentoPhpGet($cnpj, $token, $chave_n_fe, $conhecimento, $chave_c_te);
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
 **chave_c_te** | **float**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

