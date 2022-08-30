# Swagger\Client\CobranaComVencimentoCobvApi

All URIs are relative to *https:/secure.api.itau/pix_recebimentos/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getcobv**](CobranaComVencimentoCobvApi.md#getcobv) | **GET** /cobv | 
[**getcobvtxid**](CobranaComVencimentoCobvApi.md#getcobvtxid) | **GET** /cobv/{txid} | 
[**getcobvtxidqrcode**](CobranaComVencimentoCobvApi.md#getcobvtxidqrcode) | **GET** /cobv/{txid}/qrcode | 
[**patchcobvtxid**](CobranaComVencimentoCobvApi.md#patchcobvtxid) | **PATCH** /cobv/{txid} | 
[**putcobvtxid**](CobranaComVencimentoCobvApi.md#putcobvtxid) | **PUT** /cobv/{txid} | 

# **getcobv**
> \Swagger\Client\Model\CobrancasVencimento getcobv($inicio, $fim, $cpf, $cnpj, $location_presente, $status, $lote_cob_v_id, $paginacao_pagina_atual, $paginacao_itens_por_pagina, $x_correlation_id)



Endpoint para consultar cobranças com vencimento através de parâmetros como início, fim, cpf, cnpj e status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: APIGatewaySTSAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CobranaComVencimentoCobvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inicio = "inicio_example"; // string | Data inicial. Respeita RFC 3339.
$fim = "fim_example"; // string | Data de fim. Respeita RFC 3339.
$cpf = "cpf_example"; // string | CPF do devedor cadastrado na cobrança.
$cnpj = "cnpj_example"; // string | CNPJ do devedor cadastrado na cobrança.
$location_presente = true; // bool | Indicador se localização está presente.
$status = "status_example"; // string | Filtro pelo Status da cobrança. Pode ser ATIVA, CONCLUIDA, REMOVIDA_PELO_PSP OU REMOVIDA_PELO_USUARIO_RECEBEDOR
$lote_cob_v_id = 56; // int | Id do lote de cobrança com vencimento.
$paginacao_pagina_atual = 56; // int | Numero da Página que deseja realizar o acesso, valor considerado por default 0.
$paginacao_itens_por_pagina = 56; // int | Quantidade de ocorrência retornadas por pagina, valor por default 100.
$x_correlation_id = "x_correlation_id_example"; // string | Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail

try {
    $result = $apiInstance->getcobv($inicio, $fim, $cpf, $cnpj, $location_presente, $status, $lote_cob_v_id, $paginacao_pagina_atual, $paginacao_itens_por_pagina, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CobranaComVencimentoCobvApi->getcobv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inicio** | **string**| Data inicial. Respeita RFC 3339. |
 **fim** | **string**| Data de fim. Respeita RFC 3339. |
 **cpf** | **string**| CPF do devedor cadastrado na cobrança. | [optional]
 **cnpj** | **string**| CNPJ do devedor cadastrado na cobrança. | [optional]
 **location_presente** | **bool**| Indicador se localização está presente. | [optional]
 **status** | **string**| Filtro pelo Status da cobrança. Pode ser ATIVA, CONCLUIDA, REMOVIDA_PELO_PSP OU REMOVIDA_PELO_USUARIO_RECEBEDOR | [optional]
 **lote_cob_v_id** | **int**| Id do lote de cobrança com vencimento. | [optional]
 **paginacao_pagina_atual** | **int**| Numero da Página que deseja realizar o acesso, valor considerado por default 0. | [optional]
 **paginacao_itens_por_pagina** | **int**| Quantidade de ocorrência retornadas por pagina, valor por default 100. | [optional]
 **x_correlation_id** | **string**| Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail | [optional]

### Return type

[**\Swagger\Client\Model\CobrancasVencimento**](../Model/CobrancasVencimento.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getcobvtxid**
> \Swagger\Client\Model\CobrancaVencimento getcobvtxid($txid, $revisao)



Endpoint para consultar uma cobrança com vencimento através de um determinado txid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: APIGatewaySTSAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CobranaComVencimentoCobvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$txid = "txid_example"; // string | Txid a ser consultado.
$revisao = "revisao_example"; // string | Revisão do documento, utilizado para a sua identificação no banco central

try {
    $result = $apiInstance->getcobvtxid($txid, $revisao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CobranaComVencimentoCobvApi->getcobvtxid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| Txid a ser consultado. |
 **revisao** | **string**| Revisão do documento, utilizado para a sua identificação no banco central | [optional]

### Return type

[**\Swagger\Client\Model\CobrancaVencimento**](../Model/CobrancaVencimento.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getcobvtxidqrcode**
> \Swagger\Client\Model\Qrcode getcobvtxidqrcode($txid, $x_correlation_id)



Operação responsável por recuperar os dados de QR Code relacionado a cobranca com vencimento

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CobranaComVencimentoCobvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$txid = "txid_example"; // string | Txid a ser consultado.
$x_correlation_id = "x_correlation_id_example"; // string | Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail

try {
    $result = $apiInstance->getcobvtxidqrcode($txid, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CobranaComVencimentoCobvApi->getcobvtxidqrcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| Txid a ser consultado. |
 **x_correlation_id** | **string**| Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail | [optional]

### Return type

[**\Swagger\Client\Model\Qrcode**](../Model/Qrcode.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchcobvtxid**
> patchcobvtxid($txid, $body)



Endpoint responsável por revisar uma cobranca com vencimento

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: APIGatewaySTSAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CobranaComVencimentoCobvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$txid = "txid_example"; // string | Txid a ser consultado.
$body = new \Swagger\Client\Model\CobrancaVencimentoPatchRequest(); // \Swagger\Client\Model\CobrancaVencimentoPatchRequest | 

try {
    $apiInstance->patchcobvtxid($txid, $body);
} catch (Exception $e) {
    echo 'Exception when calling CobranaComVencimentoCobvApi->patchcobvtxid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| Txid a ser consultado. |
 **body** | [**\Swagger\Client\Model\CobrancaVencimentoPatchRequest**](../Model/CobrancaVencimentoPatchRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putcobvtxid**
> putcobvtxid($txid, $body)



Endpoint para criar uma cobrança com vencimento.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: APIGatewaySTSAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CobranaComVencimentoCobvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$txid = "txid_example"; // string | Txid a ser consultado.
$body = new \Swagger\Client\Model\CobrancaVencimentoPutRequest(); // \Swagger\Client\Model\CobrancaVencimentoPutRequest | 

try {
    $apiInstance->putcobvtxid($txid, $body);
} catch (Exception $e) {
    echo 'Exception when calling CobranaComVencimentoCobvApi->putcobvtxid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| Txid a ser consultado. |
 **body** | [**\Swagger\Client\Model\CobrancaVencimentoPutRequest**](../Model/CobrancaVencimentoPutRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

