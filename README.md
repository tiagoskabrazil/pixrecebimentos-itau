# ClientePIXItau-Recebimentos
Recebimentos Pix - Banco Itaú

2.41.15
Especificação em ./docs/openapi_pix_recebimentos_ext_v2.json

Base Path:
https:/secure.api.itau/pix_recebimentos/v2

Sandbox Path:
https://devportal.itau.com.br/sandboxapi/pix_recebimentos_ext_v2/v2

Tipo:
REST

## Requisitos

PHP 5.5 ou posterior

## Instalação & Uso
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https:/secure.api.itau/pix_recebimentos/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CobranaComVencimentoCobvApi* | [**getcobv**](docs/Api/CobranaComVencimentoCobvApi.md#getcobv) | **GET** /cobv | 
*CobranaComVencimentoCobvApi* | [**getcobvtxid**](docs/Api/CobranaComVencimentoCobvApi.md#getcobvtxid) | **GET** /cobv/{txid} | 
*CobranaComVencimentoCobvApi* | [**getcobvtxidqrcode**](docs/Api/CobranaComVencimentoCobvApi.md#getcobvtxidqrcode) | **GET** /cobv/{txid}/qrcode | 
*CobranaComVencimentoCobvApi* | [**patchcobvtxid**](docs/Api/CobranaComVencimentoCobvApi.md#patchcobvtxid) | **PATCH** /cobv/{txid} | 
*CobranaComVencimentoCobvApi* | [**putcobvtxid**](docs/Api/CobranaComVencimentoCobvApi.md#putcobvtxid) | **PUT** /cobv/{txid} | 
*CobranaImediataCobApi* | [**getcob**](docs/Api/CobranaImediataCobApi.md#getcob) | **GET** /cob | 
*CobranaImediataCobApi* | [**getcobtxid**](docs/Api/CobranaImediataCobApi.md#getcobtxid) | **GET** /cob/{txid} | 
*CobranaImediataCobApi* | [**getcobtxidqrcode**](docs/Api/CobranaImediataCobApi.md#getcobtxidqrcode) | **GET** /cob/{txid}/qrcode | 
*CobranaImediataCobApi* | [**patchcobtxid**](docs/Api/CobranaImediataCobApi.md#patchcobtxid) | **PATCH** /cob/{txid} | 
*CobranaImediataCobApi* | [**postcob**](docs/Api/CobranaImediataCobApi.md#postcob) | **POST** /cob | 
*CobranaImediataCobApi* | [**putcobtxid**](docs/Api/CobranaImediataCobApi.md#putcobtxid) | **PUT** /cob/{txid} | 
*LocationEndereoURLEImagemApi* | [**deletelocidtxid**](docs/Api/LocationEndereoURLEImagemApi.md#deletelocidtxid) | **DELETE** /loc/{id}/txid | 
*LocationEndereoURLEImagemApi* | [**getloc**](docs/Api/LocationEndereoURLEImagemApi.md#getloc) | **GET** /loc | 
*LocationEndereoURLEImagemApi* | [**getlocid**](docs/Api/LocationEndereoURLEImagemApi.md#getlocid) | **GET** /loc/{id} | 
*LocationEndereoURLEImagemApi* | [**postloc**](docs/Api/LocationEndereoURLEImagemApi.md#postloc) | **POST** /loc | 
*LoteDeCobranaComVencimentoLotecobvApi* | [**getlotecobv**](docs/Api/LoteDeCobranaComVencimentoLotecobvApi.md#getlotecobv) | **GET** /lotecobv | 
*LoteDeCobranaComVencimentoLotecobvApi* | [**getlotecobvid**](docs/Api/LoteDeCobranaComVencimentoLotecobvApi.md#getlotecobvid) | **GET** /lotecobv/{id} | 
*LoteDeCobranaComVencimentoLotecobvApi* | [**patchlotecobvid**](docs/Api/LoteDeCobranaComVencimentoLotecobvApi.md#patchlotecobvid) | **PATCH** /lotecobv/{id} | 
*LoteDeCobranaComVencimentoLotecobvApi* | [**putlotecobvid**](docs/Api/LoteDeCobranaComVencimentoLotecobvApi.md#putlotecobvid) | **PUT** /lotecobv/{id} | 
*PixRecebidosPixApi* | [**getpix**](docs/Api/PixRecebidosPixApi.md#getpix) | **GET** /pix | 
*PixRecebidosPixApi* | [**getpixe2eid**](docs/Api/PixRecebidosPixApi.md#getpixe2eid) | **GET** /pix/{e2eid} | 
*PixRecebidosPixApi* | [**getpixe2eiddevolucaoid**](docs/Api/PixRecebidosPixApi.md#getpixe2eiddevolucaoid) | **GET** /pix/{e2eid}/devolucao/{id} | 
*PixRecebidosPixApi* | [**putpixe2eiddevolucaoid**](docs/Api/PixRecebidosPixApi.md#putpixe2eiddevolucaoid) | **PUT** /pix/{e2eid}/devolucao/{id} | 
*WebhookApi* | [**deletewebhookchave**](docs/Api/WebhookApi.md#deletewebhookchave) | **DELETE** /webhook/{chave} | 
*WebhookApi* | [**getwebhook**](docs/Api/WebhookApi.md#getwebhook) | **GET** /webhook | 
*WebhookApi* | [**getwebhookchave**](docs/Api/WebhookApi.md#getwebhookchave) | **GET** /webhook/{chave} | 
*WebhookApi* | [**putwebhookchave**](docs/Api/WebhookApi.md#putwebhookchave) | **PUT** /webhook/{chave} | 

## Documentation For Models

 - [Calendario](docs/Model/Calendario.md)
 - [Cobranca](docs/Model/Cobranca.md)
 - [CobrancaCalendario](docs/Model/CobrancaCalendario.md)
 - [CobrancaImediataPostRequest](docs/Model/CobrancaImediataPostRequest.md)
 - [CobrancaImediataPostRequestCalendario](docs/Model/CobrancaImediataPostRequestCalendario.md)
 - [CobrancaImediataPostRequestLoc](docs/Model/CobrancaImediataPostRequestLoc.md)
 - [CobrancaImediataPostRequestValor](docs/Model/CobrancaImediataPostRequestValor.md)
 - [CobrancaImediataPostResponse](docs/Model/CobrancaImediataPostResponse.md)
 - [CobrancaPatchRequest](docs/Model/CobrancaPatchRequest.md)
 - [CobrancaPatchRequestCalendario](docs/Model/CobrancaPatchRequestCalendario.md)
 - [CobrancaPatchRequestLoc](docs/Model/CobrancaPatchRequestLoc.md)
 - [CobrancaPatchRequestValor](docs/Model/CobrancaPatchRequestValor.md)
 - [CobrancaPatchResponse](docs/Model/CobrancaPatchResponse.md)
 - [CobrancaPatchResponseCalendario](docs/Model/CobrancaPatchResponseCalendario.md)
 - [CobrancaPutRequest](docs/Model/CobrancaPutRequest.md)
 - [CobrancaPutRequestValor](docs/Model/CobrancaPutRequestValor.md)
 - [CobrancaPutResponse](docs/Model/CobrancaPutResponse.md)
 - [CobrancaPutResponseCalendario](docs/Model/CobrancaPutResponseCalendario.md)
 - [CobrancaPutResponseValor](docs/Model/CobrancaPutResponseValor.md)
 - [CobrancaValor](docs/Model/CobrancaValor.md)
 - [CobrancaVencimento](docs/Model/CobrancaVencimento.md)
 - [CobrancaVencimento400](docs/Model/CobrancaVencimento400.md)
 - [CobrancaVencimento403](docs/Model/CobrancaVencimento403.md)
 - [CobrancaVencimento403Violacoes](docs/Model/CobrancaVencimento403Violacoes.md)
 - [CobrancaVencimento404](docs/Model/CobrancaVencimento404.md)
 - [CobrancaVencimento503](docs/Model/CobrancaVencimento503.md)
 - [CobrancaVencimentoPatchRequest](docs/Model/CobrancaVencimentoPatchRequest.md)
 - [CobrancaVencimentoPatchRequestCalendario](docs/Model/CobrancaVencimentoPatchRequestCalendario.md)
 - [CobrancaVencimentoPatchRequestLoc](docs/Model/CobrancaVencimentoPatchRequestLoc.md)
 - [CobrancaVencimentoPatchRequestValor](docs/Model/CobrancaVencimentoPatchRequestValor.md)
 - [CobrancaVencimentoPatchResponse](docs/Model/CobrancaVencimentoPatchResponse.md)
 - [CobrancaVencimentoPatchResponseCalendario](docs/Model/CobrancaVencimentoPatchResponseCalendario.md)
 - [CobrancaVencimentoPutRequest](docs/Model/CobrancaVencimentoPutRequest.md)
 - [CobrancaVencimentoPutRequestValor](docs/Model/CobrancaVencimentoPutRequestValor.md)
 - [CobrancaVencimentoPutResponse](docs/Model/CobrancaVencimentoPutResponse.md)
 - [Cobrancas](docs/Model/Cobrancas.md)
 - [CobrancasParametros](docs/Model/CobrancasParametros.md)
 - [CobrancasParametrosPaginacao](docs/Model/CobrancasParametrosPaginacao.md)
 - [CobrancasVencimento](docs/Model/CobrancasVencimento.md)
 - [CobrancasVencimentoCobs](docs/Model/CobrancasVencimentoCobs.md)
 - [CobrancasVencimentoParametros](docs/Model/CobrancasVencimentoParametros.md)
 - [CobrancasVencimentoParametrosPaginacao](docs/Model/CobrancasVencimentoParametrosPaginacao.md)
 - [ComponentesValor](docs/Model/ComponentesValor.md)
 - [ComponentesValorAbatimento](docs/Model/ComponentesValorAbatimento.md)
 - [ComponentesValorDesconto](docs/Model/ComponentesValorDesconto.md)
 - [ComponentesValorJuros](docs/Model/ComponentesValorJuros.md)
 - [ComponentesValorMulta](docs/Model/ComponentesValorMulta.md)
 - [ComponentesValorOriginal](docs/Model/ComponentesValorOriginal.md)
 - [Devedor](docs/Model/Devedor.md)
 - [Devolucao](docs/Model/Devolucao.md)
 - [DevolucaoHorario](docs/Model/DevolucaoHorario.md)
 - [DevolucaoPix](docs/Model/DevolucaoPix.md)
 - [DevolucaoPutRequest](docs/Model/DevolucaoPutRequest.md)
 - [DevolucaoPutResponse](docs/Model/DevolucaoPutResponse.md)
 - [DevolucaoPutResponseHorario](docs/Model/DevolucaoPutResponseHorario.md)
 - [Erro400](docs/Model/Erro400.md)
 - [InformacaoAdicional](docs/Model/InformacaoAdicional.md)
 - [Loc](docs/Model/Loc.md)
 - [Location](docs/Model/Location.md)
 - [LocationIdGetResponse](docs/Model/LocationIdGetResponse.md)
 - [LocationPostRequest](docs/Model/LocationPostRequest.md)
 - [LocationPostResponse](docs/Model/LocationPostResponse.md)
 - [Locs](docs/Model/Locs.md)
 - [LocsParametros](docs/Model/LocsParametros.md)
 - [LocsParametrosPaginacao](docs/Model/LocsParametrosPaginacao.md)
 - [LoteCobrancaVencimentoGetResponse](docs/Model/LoteCobrancaVencimentoGetResponse.md)
 - [LoteCobrancaVencimentoIdGetResponse](docs/Model/LoteCobrancaVencimentoIdGetResponse.md)
 - [LoteCobrancaVencimentoIdGetResponseCobsv](docs/Model/LoteCobrancaVencimentoIdGetResponseCobsv.md)
 - [LoteCobrancaVencimentoPatchRequest](docs/Model/LoteCobrancaVencimentoPatchRequest.md)
 - [LoteCobrancaVencimentoPatchRequestCobsv](docs/Model/LoteCobrancaVencimentoPatchRequestCobsv.md)
 - [LoteCobrancaVencimentoPutRequest](docs/Model/LoteCobrancaVencimentoPutRequest.md)
 - [LoteCobrancaVencimentoPutRequestCalendario](docs/Model/LoteCobrancaVencimentoPutRequestCalendario.md)
 - [LoteCobrancaVencimentoPutRequestCobsv](docs/Model/LoteCobrancaVencimentoPutRequestCobsv.md)
 - [Lotes](docs/Model/Lotes.md)
 - [Parametros](docs/Model/Parametros.md)
 - [ParametrosPaginacao](docs/Model/ParametrosPaginacao.md)
 - [Pessoa](docs/Model/Pessoa.md)
 - [Pix](docs/Model/Pix.md)
 - [Pixs](docs/Model/Pixs.md)
 - [PixsParametros](docs/Model/PixsParametros.md)
 - [PixsParametrosPaginacao](docs/Model/PixsParametrosPaginacao.md)
 - [Problema](docs/Model/Problema.md)
 - [ProblemaViolacoes](docs/Model/ProblemaViolacoes.md)
 - [Qrcode](docs/Model/Qrcode.md)
 - [Recebedor](docs/Model/Recebedor.md)
 - [Retirada](docs/Model/Retirada.md)
 - [Saque](docs/Model/Saque.md)
 - [SaqueCv](docs/Model/SaqueCv.md)
 - [Troco](docs/Model/Troco.md)
 - [TrocoCv](docs/Model/TrocoCv.md)
 - [Valor](docs/Model/Valor.md)
 - [ValorAbatimento](docs/Model/ValorAbatimento.md)
 - [ValorDesconto](docs/Model/ValorDesconto.md)
 - [ValorDescontoDescontoDataFixa](docs/Model/ValorDescontoDescontoDataFixa.md)
 - [ValorJuros](docs/Model/ValorJuros.md)
 - [ValorMulta](docs/Model/ValorMulta.md)
 - [Webhook](docs/Model/Webhook.md)
 - [WebhookPut](docs/Model/WebhookPut.md)
 - [Webhooks](docs/Model/Webhooks.md)
 - [WebhooksParametros](docs/Model/WebhooksParametros.md)
 - [WebhooksParametrosPaginacao](docs/Model/WebhooksParametrosPaginacao.md)

## Documentation For Authorization


## APIGatewaySTSAuthorizer

- **Type**: HTTP basic authentication

## oauth2

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 


## Author



