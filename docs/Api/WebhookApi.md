# Swagger\Client\WebhookApi

All URIs are relative to *https:/secure.api.itau/pix_recebimentos/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletewebhookchave**](WebhookApi.md#deletewebhookchave) | **DELETE** /webhook/{chave} | 
[**getwebhook**](WebhookApi.md#getwebhook) | **GET** /webhook | 
[**getwebhookchave**](WebhookApi.md#getwebhookchave) | **GET** /webhook/{chave} | 
[**putwebhookchave**](WebhookApi.md#putwebhookchave) | **PUT** /webhook/{chave} | 

# **deletewebhookchave**
> deletewebhookchave($chave)



Operação responsável por deletar webhook para aviso de recebimentos pix por chave

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: APIGatewaySTSAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chave = "chave_example"; // string | Chave de endereçamento do recebedor

try {
    $apiInstance->deletewebhookchave($chave);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->deletewebhookchave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chave** | **string**| Chave de endereçamento do recebedor |

### Return type

void (empty response body)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getwebhook**
> \Swagger\Client\Model\Webhooks getwebhook($inicio, $fim, $paginacao_pagina_atual, $paginacao_itens_por_pagina, $x_correlation_id)



Operação responsável por resgatar webhooks de aviso de recebimentos pix para um parceiro

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: APIGatewaySTSAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inicio = "inicio_example"; // string | Data de inicio da pesquisa de webhooks, no formato de acordo com RFC3339
$fim = "fim_example"; // string | Data fim da pesquisa de webhooks, no formato de acordo com RFC3339
$paginacao_pagina_atual = 56; // int | Numero da Página que deseja realizar o acesso, valor considerado por default 0
$paginacao_itens_por_pagina = 56; // int | Quantidade de ocorrência retornadas por pagina, valor por default 100
$x_correlation_id = "x_correlation_id_example"; // string | Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail

try {
    $result = $apiInstance->getwebhook($inicio, $fim, $paginacao_pagina_atual, $paginacao_itens_por_pagina, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getwebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inicio** | **string**| Data de inicio da pesquisa de webhooks, no formato de acordo com RFC3339 | [optional]
 **fim** | **string**| Data fim da pesquisa de webhooks, no formato de acordo com RFC3339 | [optional]
 **paginacao_pagina_atual** | **int**| Numero da Página que deseja realizar o acesso, valor considerado por default 0 | [optional]
 **paginacao_itens_por_pagina** | **int**| Quantidade de ocorrência retornadas por pagina, valor por default 100 | [optional]
 **x_correlation_id** | **string**| Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail | [optional]

### Return type

[**\Swagger\Client\Model\Webhooks**](../Model/Webhooks.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getwebhookchave**
> \Swagger\Client\Model\Webhook getwebhookchave($chave)



Operação responsável por resgatar webhook de aviso de recebimentos pix por chave

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: APIGatewaySTSAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chave = "chave_example"; // string | Chave de endereçamento do recebedor

try {
    $result = $apiInstance->getwebhookchave($chave);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getwebhookchave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chave** | **string**| Chave de endereçamento do recebedor |

### Return type

[**\Swagger\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putwebhookchave**
> putwebhookchave($chave, $body)



Operação responsável por cadastrar webhook para aviso de recebimentos pix por chave

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: APIGatewaySTSAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chave = "chave_example"; // string | Chave de endereçamento do recebedor
$body = new \Swagger\Client\Model\WebhookPut(); // \Swagger\Client\Model\WebhookPut | 

try {
    $apiInstance->putwebhookchave($chave, $body);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->putwebhookchave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chave** | **string**| Chave de endereçamento do recebedor |
 **body** | [**\Swagger\Client\Model\WebhookPut**](../Model/WebhookPut.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

