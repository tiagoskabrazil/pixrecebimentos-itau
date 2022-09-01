# Swagger\Client\PixRecebidosPixApi

All URIs are relative to *https:/secure.api.itau/pix_recebimentos/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getpix**](PixRecebidosPixApi.md#getpix) | **GET** /pix | 
[**getpixe2eid**](PixRecebidosPixApi.md#getpixe2eid) | **GET** /pix/{e2eid} | 
[**getpixe2eiddevolucaoid**](PixRecebidosPixApi.md#getpixe2eiddevolucaoid) | **GET** /pix/{e2eid}/devolucao/{id} | 
[**putpixe2eiddevolucaoid**](PixRecebidosPixApi.md#putpixe2eiddevolucaoid) | **PUT** /pix/{e2eid}/devolucao/{id} | 

# **getpix**
> \Swagger\Client\Model\Pixs getpix($inicio, $fim, $txid, $txid_presente, $devolucao_presente, $cpf, $cnpj, $paginacao_pagina_atual, $paginacao_itens_por_pagina, $x_correlation_id)



Operação responsável por recuperar os dados de documentos de acordo com os filtros enviados

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

$apiInstance = new Swagger\Client\Api\PixRecebidosPixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inicio = "inicio_example"; // string | Data inicial. Respeita RFC 3339.
$fim = "fim_example"; // string | Data de fim. Respeita RFC 3339.
$txid = "txid_example"; // string | ID de identificação do documento entre os bancos e o cliente emissor. O campo txid é obrigatório e determina o identificador da transação.O objetivo desse campo é ser um elemento que possibilite a conciliação de pagamentos. O txid é criado exclusivamente pelo usuário recebedor e está sob sua responsabilidade. Deve ser único por CNPJ do recebedor. Apesar de possuir o tamanho de 35 posições (PAC008), para QR Code Estático o tamanho máximo permitido é de 25 posições (limitação EMV). No caso do QR Code dinâmico o campo deve possuir de 26 posição até 35 posições. Os caracteres permitidos no contexto do Pix para o campo txId são:Letras minúsculas, de ‘a’ a ‘z’, Letras maiúsculas, de ‘A’ a ‘Z’, Dígitos decimais, de ‘0’ a ‘9’
$txid_presente = true; // bool | Indicador do indentificador da taxa.
$devolucao_presente = true; // bool | Indicador de devolução.
$cpf = "cpf_example"; // string | CPF do pagador cadastrado na cobrança
$cnpj = "cnpj_example"; // string | CNPJ do pagador cadastrado na cobrança.
$paginacao_pagina_atual = 56; // int | Numero da Página que deseja realizar o acesso, valor considerado por default 0.
$paginacao_itens_por_pagina = 56; // int | Quantidade de ocorrência retornadas por pagina, valor por default 100.
$x_correlation_id = "x_correlation_id_example"; // string | Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail

try {
    $result = $apiInstance->getpix($inicio, $fim, $txid, $txid_presente, $devolucao_presente, $cpf, $cnpj, $paginacao_pagina_atual, $paginacao_itens_por_pagina, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixRecebidosPixApi->getpix: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inicio** | **string**| Data inicial. Respeita RFC 3339. |
 **fim** | **string**| Data de fim. Respeita RFC 3339. |
 **txid** | **string**| ID de identificação do documento entre os bancos e o cliente emissor. O campo txid é obrigatório e determina o identificador da transação.O objetivo desse campo é ser um elemento que possibilite a conciliação de pagamentos. O txid é criado exclusivamente pelo usuário recebedor e está sob sua responsabilidade. Deve ser único por CNPJ do recebedor. Apesar de possuir o tamanho de 35 posições (PAC008), para QR Code Estático o tamanho máximo permitido é de 25 posições (limitação EMV). No caso do QR Code dinâmico o campo deve possuir de 26 posição até 35 posições. Os caracteres permitidos no contexto do Pix para o campo txId são:Letras minúsculas, de ‘a’ a ‘z’, Letras maiúsculas, de ‘A’ a ‘Z’, Dígitos decimais, de ‘0’ a ‘9’ | [optional]
 **txid_presente** | **bool**| Indicador do indentificador da taxa. | [optional]
 **devolucao_presente** | **bool**| Indicador de devolução. | [optional]
 **cpf** | **string**| CPF do pagador cadastrado na cobrança | [optional]
 **cnpj** | **string**| CNPJ do pagador cadastrado na cobrança. | [optional]
 **paginacao_pagina_atual** | **int**| Numero da Página que deseja realizar o acesso, valor considerado por default 0. | [optional]
 **paginacao_itens_por_pagina** | **int**| Quantidade de ocorrência retornadas por pagina, valor por default 100. | [optional]
 **x_correlation_id** | **string**| Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail | [optional]

### Return type

[**\Swagger\Client\Model\Pixs**](../Model/Pixs.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getpixe2eid**
> \Swagger\Client\Model\Pix getpixe2eid($e2eid)



Operação responsável por recuperar os dados do documento pelo id transacional

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

$apiInstance = new Swagger\Client\Api\PixRecebidosPixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$e2eid = "e2eid_example"; // string | Id fim a fim da transação.

try {
    $result = $apiInstance->getpixe2eid($e2eid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixRecebidosPixApi->getpixe2eid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **e2eid** | **string**| Id fim a fim da transação. |

### Return type

[**\Swagger\Client\Model\Pix**](../Model/Pix.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getpixe2eiddevolucaoid**
> \Swagger\Client\Model\Devolucao getpixe2eiddevolucaoid($e2eid, $id)



Operação responsavel por resgatar um pagamento específico para o PIX.

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

$apiInstance = new Swagger\Client\Api\PixRecebidosPixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$e2eid = "e2eid_example"; // string | Id fim a fim da transação.
$id = "id_example"; // string | id da devolução

try {
    $result = $apiInstance->getpixe2eiddevolucaoid($e2eid, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixRecebidosPixApi->getpixe2eiddevolucaoid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **e2eid** | **string**| Id fim a fim da transação. |
 **id** | **string**| id da devolução |

### Return type

[**\Swagger\Client\Model\Devolucao**](../Model/Devolucao.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putpixe2eiddevolucaoid**
> putpixe2eiddevolucaoid($e2eid, $id, $body)



Operação responsável por solicitar um nova devolução, por meio do e2eid e do ID da devolução

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

$apiInstance = new Swagger\Client\Api\PixRecebidosPixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$e2eid = "e2eid_example"; // string | Id fim a fim da transação.
$id = "id_example"; // string | id da devolução
$body = new \Swagger\Client\Model\DevolucaoPutRequest(); // \Swagger\Client\Model\DevolucaoPutRequest | 

try {
    $apiInstance->putpixe2eiddevolucaoid($e2eid, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PixRecebidosPixApi->putpixe2eiddevolucaoid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **e2eid** | **string**| Id fim a fim da transação. |
 **id** | **string**| id da devolução |
 **body** | [**\Swagger\Client\Model\DevolucaoPutRequest**](../Model/DevolucaoPutRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

