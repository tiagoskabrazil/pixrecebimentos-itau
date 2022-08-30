# Swagger\Client\CobranaImediataCobApi

All URIs are relative to *https:/secure.api.itau/pix_recebimentos/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getcob**](CobranaImediataCobApi.md#getcob) | **GET** /cob | 
[**getcobtxid**](CobranaImediataCobApi.md#getcobtxid) | **GET** /cob/{txid} | 
[**getcobtxidqrcode**](CobranaImediataCobApi.md#getcobtxidqrcode) | **GET** /cob/{txid}/qrcode | 
[**patchcobtxid**](CobranaImediataCobApi.md#patchcobtxid) | **PATCH** /cob/{txid} | 
[**postcob**](CobranaImediataCobApi.md#postcob) | **POST** /cob | 
[**putcobtxid**](CobranaImediataCobApi.md#putcobtxid) | **PUT** /cob/{txid} | 

# **getcob**
> \Swagger\Client\Model\Cobrancas getcob($inicio, $fim, $cpf, $cnpj, $location_presente, $status, $paginacao_pagina_atual, $paginacao_itens_por_pagina, $x_correlation_id)



Endpoint para consultar cobranças imediatas através de parâmetros como início, fim, cpf, cnpj e status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: APIGatewaySTSAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CobranaImediataCobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inicio = "inicio_example"; // string | Data inicial. Respeita RFC 3339.
$fim = "fim_example"; // string | Data de fim. Respeita RFC 3339.
$cpf = "cpf_example"; // string | CPF do pagador cadastrado na cobrança.
$cnpj = "cnpj_example"; // string | CNPJ do pagador cadastrado na cobrança.
$location_presente = true; // bool | Indicador se localização está presente.
$status = "status_example"; // string | Filtro pelo Status da cobrança. Pode ser ATIVA, CONCLUIDA, REMOVIDA_PELO_PSP OU REMOVIDA_PELO_USUARIO_RECEBEDOR
$paginacao_pagina_atual = 56; // int | Numero da Página que deseja realizar o acesso, valor considerado por default 0.
$paginacao_itens_por_pagina = 56; // int | Quantidade de ocorrência retornadas por pagina, valor por default 100.
$x_correlation_id = "x_correlation_id_example"; // string | Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail

try {
    $result = $apiInstance->getcob($inicio, $fim, $cpf, $cnpj, $location_presente, $status, $paginacao_pagina_atual, $paginacao_itens_por_pagina, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CobranaImediataCobApi->getcob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inicio** | **string**| Data inicial. Respeita RFC 3339. |
 **fim** | **string**| Data de fim. Respeita RFC 3339. |
 **cpf** | **string**| CPF do pagador cadastrado na cobrança. | [optional]
 **cnpj** | **string**| CNPJ do pagador cadastrado na cobrança. | [optional]
 **location_presente** | **bool**| Indicador se localização está presente. | [optional]
 **status** | **string**| Filtro pelo Status da cobrança. Pode ser ATIVA, CONCLUIDA, REMOVIDA_PELO_PSP OU REMOVIDA_PELO_USUARIO_RECEBEDOR | [optional]
 **paginacao_pagina_atual** | **int**| Numero da Página que deseja realizar o acesso, valor considerado por default 0. | [optional]
 **paginacao_itens_por_pagina** | **int**| Quantidade de ocorrência retornadas por pagina, valor por default 100. | [optional]
 **x_correlation_id** | **string**| Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail | [optional]

### Return type

[**\Swagger\Client\Model\Cobrancas**](../Model/Cobrancas.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getcobtxid**
> \Swagger\Client\Model\Cobranca getcobtxid($txid, $revisao)



Endpoint para consultar uma cobrança através de um determinado txid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: APIGatewaySTSAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CobranaImediataCobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$txid = "txid_example"; // string | Txid a ser consultado.
$revisao = "revisao_example"; // string | Id de transação do documento, utilizado para a sua identificação no banco central

try {
    $result = $apiInstance->getcobtxid($txid, $revisao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CobranaImediataCobApi->getcobtxid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| Txid a ser consultado. |
 **revisao** | **string**| Id de transação do documento, utilizado para a sua identificação no banco central | [optional]

### Return type

[**\Swagger\Client\Model\Cobranca**](../Model/Cobranca.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getcobtxidqrcode**
> \Swagger\Client\Model\Qrcode getcobtxidqrcode($txid, $x_correlation_id)



Operação responsável por recuperar os dados do documento

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CobranaImediataCobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$txid = "txid_example"; // string | Txid a ser consultado.
$x_correlation_id = "x_correlation_id_example"; // string | Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail

try {
    $result = $apiInstance->getcobtxidqrcode($txid, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CobranaImediataCobApi->getcobtxidqrcode: ', $e->getMessage(), PHP_EOL;
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

# **patchcobtxid**
> \Swagger\Client\Model\CobrancaPatchResponse patchcobtxid($txid, $body)



Operação responsável por revisar uma cobranca

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: APIGatewaySTSAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CobranaImediataCobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$txid = "txid_example"; // string | Txid a ser consultado.
$body = new \Swagger\Client\Model\CobrancaPatchRequest(); // \Swagger\Client\Model\CobrancaPatchRequest | 

try {
    $result = $apiInstance->patchcobtxid($txid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CobranaImediataCobApi->patchcobtxid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| Txid a ser consultado. |
 **body** | [**\Swagger\Client\Model\CobrancaPatchRequest**](../Model/CobrancaPatchRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CobrancaPatchResponse**](../Model/CobrancaPatchResponse.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postcob**
> postcob($body, $x_correlation_id)



Endpoint para criar uma cobrança imediata, neste caso, o txid deve ser definido pelo PSP.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: APIGatewaySTSAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CobranaImediataCobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CobrancaImediataPostRequest(); // \Swagger\Client\Model\CobrancaImediataPostRequest | 
$x_correlation_id = "x_correlation_id_example"; // string | Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail

try {
    $apiInstance->postcob($body, $x_correlation_id);
} catch (Exception $e) {
    echo 'Exception when calling CobranaImediataCobApi->postcob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CobrancaImediataPostRequest**](../Model/CobrancaImediataPostRequest.md)|  | [optional]
 **x_correlation_id** | **string**| Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail | [optional]

### Return type

void (empty response body)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putcobtxid**
> putcobtxid($txid, $body)



Endpoint para criar uma cobrança imediata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: APIGatewaySTSAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CobranaImediataCobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$txid = "txid_example"; // string | Txid a ser consultado.
$body = new \Swagger\Client\Model\CobrancaPutRequest(); // \Swagger\Client\Model\CobrancaPutRequest | 

try {
    $apiInstance->putcobtxid($txid, $body);
} catch (Exception $e) {
    echo 'Exception when calling CobranaImediataCobApi->putcobtxid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| Txid a ser consultado. |
 **body** | [**\Swagger\Client\Model\CobrancaPutRequest**](../Model/CobrancaPutRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

