# Swagger\Client\LoteDeCobranaComVencimentoLotecobvApi

All URIs are relative to *https:/secure.api.itau/pix_recebimentos/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getlotecobv**](LoteDeCobranaComVencimentoLotecobvApi.md#getlotecobv) | **GET** /lotecobv | 
[**getlotecobvid**](LoteDeCobranaComVencimentoLotecobvApi.md#getlotecobvid) | **GET** /lotecobv/{id} | 
[**patchlotecobvid**](LoteDeCobranaComVencimentoLotecobvApi.md#patchlotecobvid) | **PATCH** /lotecobv/{id} | 
[**putlotecobvid**](LoteDeCobranaComVencimentoLotecobvApi.md#putlotecobvid) | **PUT** /lotecobv/{id} | 

# **getlotecobv**
> \Swagger\Client\Model\LoteCobrancaVencimentoGetResponse getlotecobv($inicio, $fim, $paginacao_pagina_atual, $paginacao_itens_por_pagina, $x_correlation_id)



Endpoint para consultar lista de lotes de cobranças com vencimento.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

/**
 * ##################################################################
 * Configurando para uso em ambiente desenvolvimento (SandBox Itaú)
 * ##################################################################
 * 
 * 
 * (OBS): Para modo producao = TRUE
 *        Em modo produção é necessário o uso de certificado digital , chave privada.
 *        Também é preciso alterar o Host Base da API, assim como a Url Oauth2.
 *        Ex:
 *        $config->setModoProducao(true);
*         $config->setHost('https:/secure.api.itau/pix_recebimentos/v2');
*         $config->setUrlOAuth('https://sts.itau.com.br/api/jwt');
*         $config->setApiKey('client_id','XXXXXXXXXXX');
*         $config->setApiKey('client_secret','YYYYYYYYYYYY');
*         $config->setPathCertificado('c:\\caminho\\certificado\\itau\\certificado.pem');
*         $config->setPathPrivateKey('c:\\caminho\\private\\key\\itau\\private_key.pem');
*         $clienteOauth = new Swagger\Client\Api\OauthApi(new GuzzleHttp\Client(),$config);
*         $accessTokenOauth = $clienteOauth->gerarAccessToken();
*         $config->setAccessToken($accessTokenOauth);
 *      
 */
$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setModoProducao(false);
$config->setHost('https://devportal.itau.com.br/sandboxapi/pix_recebimentos_ext_v2/v2');
$config->setUrlOAuth('https://devportal.itau.com.br/api/jwt');
$config->setApiKey('client_id','c82c8177-5f5a-349e-88e2-30a5b2a78a54');
$config->setApiKey('client_secret','f013e480-92ec-4828-9d65-8d9b3100a885');
$clienteOauth = new Swagger\Client\Api\OauthApi(new GuzzleHttp\Client(),$config);
$accessTokenOauth = $clienteOauth->gerarAccessToken();
$config->setAccessToken($accessTokenOauth);

echo "Dados usados na configuração:\n";
echo "Modo Produção: ". $config->isModoProducao() ."\n";
echo "Host Base Api Recebimentos PIX: " . $config->getHost() . "\n";
echo "Url Oauth: " . $config->getUrlOAuth() . "\n";
echo "Client_id:" . $config->getApiKey('client_id') . "\n";
echo "Client_secret:" . $config->getApiKey('client_secret') . "\n";
echo "Access_token:" . $config->getAccessToken() . "\n";
echo "\n\n";
/**
 * Fim da configuração do ambiente SandBox
 */

$apiInstance = new Swagger\Client\Api\LoteDeCobranaComVencimentoLotecobvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inicio = "inicio_example"; // string | Data inicial. Respeita RFC 3339.
$fim = "fim_example"; // string | Data de fim. Respeita RFC 3339.
$paginacao_pagina_atual = 56; // int | Numero da Página que deseja realizar o acesso, valor considerado por default 0.
$paginacao_itens_por_pagina = 56; // int | Quantidade de ocorrência retornadas por pagina, valor por default 100.
$x_correlation_id = "x_correlation_id_example"; // string | Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail

try {
    $result = $apiInstance->getlotecobv($inicio, $fim, $paginacao_pagina_atual, $paginacao_itens_por_pagina, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoteDeCobranaComVencimentoLotecobvApi->getlotecobv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inicio** | **string**| Data inicial. Respeita RFC 3339. |
 **fim** | **string**| Data de fim. Respeita RFC 3339. |
 **paginacao_pagina_atual** | **int**| Numero da Página que deseja realizar o acesso, valor considerado por default 0. | [optional]
 **paginacao_itens_por_pagina** | **int**| Quantidade de ocorrência retornadas por pagina, valor por default 100. | [optional]
 **x_correlation_id** | **string**| Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail | [optional]

### Return type

[**\Swagger\Client\Model\LoteCobrancaVencimentoGetResponse**](../Model/LoteCobrancaVencimentoGetResponse.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getlotecobvid**
> \Swagger\Client\Model\LoteCobrancaVencimentoIdGetResponse getlotecobvid($id)



Consultar um lote de cobranças com vencimento.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

/**
 * ##################################################################
 * Configurando para uso em ambiente desenvolvimento (SandBox Itaú)
 * ##################################################################
 * 
 * 
 * (OBS): Para modo producao = TRUE
 *        Em modo produção é necessário o uso de certificado digital , chave privada.
 *        Também é preciso alterar o Host Base da API, assim como a Url Oauth2.
 *        Ex:
 *        $config->setModoProducao(true);
*         $config->setHost('https:/secure.api.itau/pix_recebimentos/v2');
*         $config->setUrlOAuth('https://sts.itau.com.br/api/jwt');
*         $config->setApiKey('client_id','XXXXXXXXXXX');
*         $config->setApiKey('client_secret','YYYYYYYYYYYY');
*         $config->setPathCertificado('c:\\caminho\\certificado\\itau\\certificado.pem');
*         $config->setPathPrivateKey('c:\\caminho\\private\\key\\itau\\private_key.pem');
*         $clienteOauth = new Swagger\Client\Api\OauthApi(new GuzzleHttp\Client(),$config);
*         $accessTokenOauth = $clienteOauth->gerarAccessToken();
*         $config->setAccessToken($accessTokenOauth);
 *      
 */
$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setModoProducao(false);
$config->setHost('https://devportal.itau.com.br/sandboxapi/pix_recebimentos_ext_v2/v2');
$config->setUrlOAuth('https://devportal.itau.com.br/api/jwt');
$config->setApiKey('client_id','c82c8177-5f5a-349e-88e2-30a5b2a78a54');
$config->setApiKey('client_secret','f013e480-92ec-4828-9d65-8d9b3100a885');
$clienteOauth = new Swagger\Client\Api\OauthApi(new GuzzleHttp\Client(),$config);
$accessTokenOauth = $clienteOauth->gerarAccessToken();
$config->setAccessToken($accessTokenOauth);

echo "Dados usados na configuração:\n";
echo "Modo Produção: ". $config->isModoProducao() ."\n";
echo "Host Base Api Recebimentos PIX: " . $config->getHost() . "\n";
echo "Url Oauth: " . $config->getUrlOAuth() . "\n";
echo "Client_id:" . $config->getApiKey('client_id') . "\n";
echo "Client_secret:" . $config->getApiKey('client_secret') . "\n";
echo "Access_token:" . $config->getAccessToken() . "\n";
echo "\n\n";
/**
 * Fim da configuração do ambiente SandBox
 */

$apiInstance = new Swagger\Client\Api\LoteDeCobranaComVencimentoLotecobvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id da devolução

try {
    $result = $apiInstance->getlotecobvid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoteDeCobranaComVencimentoLotecobvApi->getlotecobvid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id da devolução |

### Return type

[**\Swagger\Client\Model\LoteCobrancaVencimentoIdGetResponse**](../Model/LoteCobrancaVencimentoIdGetResponse.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchlotecobvid**
> patchlotecobvid($id, $body)



Endpoint utilizado para revisar cobranças específicas dentro de um lote de cobranças com vencimento. A diferença deste endpoint para o endpoint PUT correlato é que este endpoint admite um array cobsv com menos solicitações de criação ou alteração de cobranças do que o array atribuído na requisição originária do lote. Não se pode, entretanto, utilizar esse endpoint para agregar ou remover solicitações de alteração ou criação de cobranças conforme constam na requisição originária do lote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

/**
 * ##################################################################
 * Configurando para uso em ambiente desenvolvimento (SandBox Itaú)
 * ##################################################################
 * 
 * 
 * (OBS): Para modo producao = TRUE
 *        Em modo produção é necessário o uso de certificado digital , chave privada.
 *        Também é preciso alterar o Host Base da API, assim como a Url Oauth2.
 *        Ex:
 *        $config->setModoProducao(true);
*         $config->setHost('https:/secure.api.itau/pix_recebimentos/v2');
*         $config->setUrlOAuth('https://sts.itau.com.br/api/jwt');
*         $config->setApiKey('client_id','XXXXXXXXXXX');
*         $config->setApiKey('client_secret','YYYYYYYYYYYY');
*         $config->setPathCertificado('c:\\caminho\\certificado\\itau\\certificado.pem');
*         $config->setPathPrivateKey('c:\\caminho\\private\\key\\itau\\private_key.pem');
*         $clienteOauth = new Swagger\Client\Api\OauthApi(new GuzzleHttp\Client(),$config);
*         $accessTokenOauth = $clienteOauth->gerarAccessToken();
*         $config->setAccessToken($accessTokenOauth);
 *      
 */
$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setModoProducao(false);
$config->setHost('https://devportal.itau.com.br/sandboxapi/pix_recebimentos_ext_v2/v2');
$config->setUrlOAuth('https://devportal.itau.com.br/api/jwt');
$config->setApiKey('client_id','c82c8177-5f5a-349e-88e2-30a5b2a78a54');
$config->setApiKey('client_secret','f013e480-92ec-4828-9d65-8d9b3100a885');
$clienteOauth = new Swagger\Client\Api\OauthApi(new GuzzleHttp\Client(),$config);
$accessTokenOauth = $clienteOauth->gerarAccessToken();
$config->setAccessToken($accessTokenOauth);

echo "Dados usados na configuração:\n";
echo "Modo Produção: ". $config->isModoProducao() ."\n";
echo "Host Base Api Recebimentos PIX: " . $config->getHost() . "\n";
echo "Url Oauth: " . $config->getUrlOAuth() . "\n";
echo "Client_id:" . $config->getApiKey('client_id') . "\n";
echo "Client_secret:" . $config->getApiKey('client_secret') . "\n";
echo "Access_token:" . $config->getAccessToken() . "\n";
echo "\n\n";
/**
 * Fim da configuração do ambiente SandBox
 */

$apiInstance = new Swagger\Client\Api\LoteDeCobranaComVencimentoLotecobvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id da devolução
$body = new \Swagger\Client\Model\LoteCobrancaVencimentoPatchRequest(); // \Swagger\Client\Model\LoteCobrancaVencimentoPatchRequest | 

try {
    $apiInstance->patchlotecobvid($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling LoteDeCobranaComVencimentoLotecobvApi->patchlotecobvid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id da devolução |
 **body** | [**\Swagger\Client\Model\LoteCobrancaVencimentoPatchRequest**](../Model/LoteCobrancaVencimentoPatchRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putlotecobvid**
> putlotecobvid($id, $body)



Endpoint utilizado para criar ou alterar um lote de cobranças com vencimento. Para o caso de uso de alteração de cobranças, o array a ser atribuído na requisicão deve ser composto pelas exatas requisições de criação de cobranças que constaram no array atribuído na requisição originária. Não se pode utilizar este endpoint para alterar um lote de cobranças com vencimento agregando ou removendo cobranças já existentes dentro do conjunto de cobranças criadas na requisição originária do lote. Em outras palavras, se originalmente criou-se um lote, por exemplo, com as cobranças [a, b e c], não se pode alterar esse conjunto de cobranças original que o lote representa para [a, b, c, d], ou para [a, b]. Por outro lado, pode-se alterar, em lote as cobranças [a, b, c], conforme originalmente constam na requisição originária do lote. Uma solicitação de criação de cobrança com status \"EM_PROCESSAMENTO\" ou \"NEGADA\" está associada a uma cobrança não existe de fato, portanto não será listada em GET /cobv ou GET /cobv/{txid}. Uma cobrança, uma vez criada via PUT /cobv/{txid}, não pode ser associada a um lote posteriormente. Uma cobrança, uma vez criada via PUT /lotecobv/{id}, não pode ser associada a um novo lote posteriormente.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

/**
 * ##################################################################
 * Configurando para uso em ambiente desenvolvimento (SandBox Itaú)
 * ##################################################################
 * 
 * 
 * (OBS): Para modo producao = TRUE
 *        Em modo produção é necessário o uso de certificado digital , chave privada.
 *        Também é preciso alterar o Host Base da API, assim como a Url Oauth2.
 *        Ex:
 *        $config->setModoProducao(true);
*         $config->setHost('https:/secure.api.itau/pix_recebimentos/v2');
*         $config->setUrlOAuth('https://sts.itau.com.br/api/jwt');
*         $config->setApiKey('client_id','XXXXXXXXXXX');
*         $config->setApiKey('client_secret','YYYYYYYYYYYY');
*         $config->setPathCertificado('c:\\caminho\\certificado\\itau\\certificado.pem');
*         $config->setPathPrivateKey('c:\\caminho\\private\\key\\itau\\private_key.pem');
*         $clienteOauth = new Swagger\Client\Api\OauthApi(new GuzzleHttp\Client(),$config);
*         $accessTokenOauth = $clienteOauth->gerarAccessToken();
*         $config->setAccessToken($accessTokenOauth);
 *      
 */
$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setModoProducao(false);
$config->setHost('https://devportal.itau.com.br/sandboxapi/pix_recebimentos_ext_v2/v2');
$config->setUrlOAuth('https://devportal.itau.com.br/api/jwt');
$config->setApiKey('client_id','c82c8177-5f5a-349e-88e2-30a5b2a78a54');
$config->setApiKey('client_secret','f013e480-92ec-4828-9d65-8d9b3100a885');
$clienteOauth = new Swagger\Client\Api\OauthApi(new GuzzleHttp\Client(),$config);
$accessTokenOauth = $clienteOauth->gerarAccessToken();
$config->setAccessToken($accessTokenOauth);

echo "Dados usados na configuração:\n";
echo "Modo Produção: ". $config->isModoProducao() ."\n";
echo "Host Base Api Recebimentos PIX: " . $config->getHost() . "\n";
echo "Url Oauth: " . $config->getUrlOAuth() . "\n";
echo "Client_id:" . $config->getApiKey('client_id') . "\n";
echo "Client_secret:" . $config->getApiKey('client_secret') . "\n";
echo "Access_token:" . $config->getAccessToken() . "\n";
echo "\n\n";
/**
 * Fim da configuração do ambiente SandBox
 */

$apiInstance = new Swagger\Client\Api\LoteDeCobranaComVencimentoLotecobvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id da devolução
$body = new \Swagger\Client\Model\LoteCobrancaVencimentoPutRequest(); // \Swagger\Client\Model\LoteCobrancaVencimentoPutRequest | 

try {
    $apiInstance->putlotecobvid($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling LoteDeCobranaComVencimentoLotecobvApi->putlotecobvid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id da devolução |
 **body** | [**\Swagger\Client\Model\LoteCobrancaVencimentoPutRequest**](../Model/LoteCobrancaVencimentoPutRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

