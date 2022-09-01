# Swagger\Client\LocationEndereoURLEImagemApi

All URIs are relative to *https:/secure.api.itau/pix_recebimentos/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletelocidtxid**](LocationEndereoURLEImagemApi.md#deletelocidtxid) | **DELETE** /loc/{id}/txid | 
[**getloc**](LocationEndereoURLEImagemApi.md#getloc) | **GET** /loc | 
[**getlocid**](LocationEndereoURLEImagemApi.md#getlocid) | **GET** /loc/{id} | 
[**postloc**](LocationEndereoURLEImagemApi.md#postloc) | **POST** /loc | 

# **deletelocidtxid**
> \Swagger\Client\Model\LocationPostResponse deletelocidtxid($id, $x_correlation_id)



Endpoint utilizado para desvincular uma cobrança de uma location. Se executado com sucesso, a entidade loc não apresentará mais um txid, se apresentava anteriormente à chamada. Adicionalmente, a entidade cob ou cobv associada ao txid desvinculado também passará a não mais apresentar um location. Esta operação não altera o status da cob ou cobv em questão.

### Example
```php
<?php
require_once('/path/para/pixrecebimentos-itau/vendor/autoload.php')

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

$apiInstance = new Swagger\Client\Api\LocationEndereoURLEImagemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id da devolução
$x_correlation_id = "x_correlation_id_example"; // string | Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail

try {
    $result = $apiInstance->deletelocidtxid($id, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationEndereoURLEImagemApi->deletelocidtxid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id da devolução |
 **x_correlation_id** | **string**| Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail | [optional]

### Return type

[**\Swagger\Client\Model\LocationPostResponse**](../Model/LocationPostResponse.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getloc**
> \Swagger\Client\Model\Locs getloc($inicio, $fim, $tx_id_presente, $tipo_cob, $paginacao_pagina_atual, $paginacao_itens_por_pagina, $x_correlation_id)



Operação responsável por recuperar os dados de location de acordo com os filtros enviados

### Example
```php
<?php
require_once('/path/para/pixrecebimentos-itau/vendor/autoload.php')

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

$apiInstance = new Swagger\Client\Api\LocationEndereoURLEImagemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inicio = "inicio_example"; // string | Data inicial. Respeita RFC 3339.
$fim = "fim_example"; // string | Data de fim. Respeita RFC 3339.
$tx_id_presente = true; // bool | Filtro pela existência de txid.
$tipo_cob = "tipo_cob_example"; // string | Define se o tipo do documento é imediata ou vencimento <table><tr><td>ENUM</td></tr><tr><td>cob</td></tr><tr><td>cobv</td></tr></table>
$paginacao_pagina_atual = 56; // int | Numero da Página que deseja realizar o acesso, valor considerado por default 0.
$paginacao_itens_por_pagina = 56; // int | Quantidade de ocorrência retornadas por pagina, valor por default 100.
$x_correlation_id = "x_correlation_id_example"; // string | Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail

try {
    $result = $apiInstance->getloc($inicio, $fim, $tx_id_presente, $tipo_cob, $paginacao_pagina_atual, $paginacao_itens_por_pagina, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationEndereoURLEImagemApi->getloc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inicio** | **string**| Data inicial. Respeita RFC 3339. |
 **fim** | **string**| Data de fim. Respeita RFC 3339. |
 **tx_id_presente** | **bool**| Filtro pela existência de txid. | [optional]
 **tipo_cob** | **string**| Define se o tipo do documento é imediata ou vencimento &lt;table&gt;&lt;tr&gt;&lt;td&gt;ENUM&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;cob&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;cobv&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt; | [optional]
 **paginacao_pagina_atual** | **int**| Numero da Página que deseja realizar o acesso, valor considerado por default 0. | [optional]
 **paginacao_itens_por_pagina** | **int**| Quantidade de ocorrência retornadas por pagina, valor por default 100. | [optional]
 **x_correlation_id** | **string**| Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail | [optional]

### Return type

[**\Swagger\Client\Model\Locs**](../Model/Locs.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getlocid**
> \Swagger\Client\Model\LocationIdGetResponse getlocid($id)



Recupera a location do payload

### Example
```php
<?php
require_once('/path/para/pixrecebimentos-itau/vendor/autoload.php')

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

$apiInstance = new Swagger\Client\Api\LocationEndereoURLEImagemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id da devolução

try {
    $result = $apiInstance->getlocid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationEndereoURLEImagemApi->getlocid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id da devolução |

### Return type

[**\Swagger\Client\Model\LocationIdGetResponse**](../Model/LocationIdGetResponse.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postloc**
> postloc($body, $x_correlation_id)



Criar location do payload

### Example
```php
<?php
require_once('/path/para/pixrecebimentos-itau/vendor/autoload.php')

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

$apiInstance = new Swagger\Client\Api\LocationEndereoURLEImagemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LocationPostRequest(); // \Swagger\Client\Model\LocationPostRequest | 
$x_correlation_id = "x_correlation_id_example"; // string | Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail

try {
    $apiInstance->postloc($body, $x_correlation_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationEndereoURLEImagemApi->postloc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LocationPostRequest**](../Model/LocationPostRequest.md)|  | [optional]
 **x_correlation_id** | **string**| Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail | [optional]

### Return type

void (empty response body)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

