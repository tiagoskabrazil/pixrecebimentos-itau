# ClientePIXItau-Recebimentos
Recebimentos Pix - Banco Itaú

2.41.15
Tipo: REST
Especificação em ./docs/openapi_pix_recebimentos_ext_v2.json

*** Documentação sobre autenticação e autorização em ambiente PRODUTIVO ITAÚ
https://devportal.itau.com.br/autenticacao-documentacao#client-jwt-tls

Base Path - Ambiente Produtivo Itaú:
https:/secure.api.itau/pix_recebimentos/v2

Sandbox Path (Ambiente para testes):
https://devportal.itau.com.br/sandboxapi/pix_recebimentos_ext_v2/v2


## Requisitos

PHP 5.5 ou posterior

## Instalação & Uso
### Composer

Via [Composer](http://getcomposer.org/), adicione as linhas abaixo no arquivo `composer.json`:

```
{
  "repositories": [
    {
      "type": "vcs",
      "url": "git@github.com:tiagoskabrazil/pixrecebimentos-itau.git"
    }
  ],
  "require": {
    "tiagoskabrazil/pixrecebimentos-itau": "*@dev"
  }
}

```

Em seguida, execute `composer install`

### Instalação Manual

Faça o download dos arquivos e inclua o `autoload.php`:

```php
    require_once('/path/para/pixrecebimentos-itau/vendor/autoload.php');
```

## Testes

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Para começar

Primeiramente siga os passos dos procedimentos de instalação [installation procedure](#installation--usage) e então execute o exemplo abaixo:

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

/**
 * 
 * Iniciando qual API se deseja consumir
 * Por exemplo, Cobrança com Vencimentos (/cobv/{txid}/qrcode)
 * Operação responsável por recuperar os dados de QR Code relacionado a cobranca com vencimento
*/
$apiInstance = new Swagger\Client\Api\CobranaComVencimentoCobvApi(new GuzzleHttp\Client(),$config);
$txid = "123"; 
$x_correlation_id = null; 

try {
    $result = $apiInstance->getcobvtxidqrcode($txid, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CobranaComVencimentoCobvApi->getcobvtxidqrcode: ', $e->getMessage(), PHP_EOL;
}

/**
 * Response de Exemplo: 
 */

(
    [pix_link] => https://pix.bcb.gov.br/qr/MDAwMjAxMDEwMjExMjY5NTAwMTRCUi5HT1YuQkNCLlBJWDI1NzNzcGkuZGV2LmNsb3VkLml0YXUuY29tLmJyL2RvY3VtZW50b3MvMTk4ZTQ5YzUtMjMzMC00YWQ3LTlkMGItOTY3YzdiNTM3MTIyNTIwNDAwMDA1MzAzOTg2NTgwMkJSNTkyM1BNRCBHb3RoYW0gTmVnQSBjaW9zIE1FNjAwOVNBTyBQQVVMTzYyNDEwNTAzKioqNTAzMDAwMTdCUi5HT1YuQkNCLkJSQ09ERTAxMDUxLjAuMDYzMDQwODY2
    [emv] => 00020101021126950014BR.GOV.BCB.PIX2573spi.dev.cloud.itau.com.br/documentos/198e49c5-2330-4ad7-9d0b-967c7b5371225204000053039865802BR5923PMD Gotham NegA cios ME6009SAO PAULO62410503***50300017BR.GOV.BCB.BRCODE01051.0.063040866
    [imagem_base64] => iVBORw0KGgoAAAANSUhEUgAAAPoAAAD6AQAAAACgl2eQAAADCUlEQVR4Xu2XUW4cIRBE6YvA/W+Ro8BFIPWKsWU5kpWPbOVn8SaZhWep1F1dTNr5ef1q33e+rTdw1xu466+A2VqtXbuP3etMPY9zlrdjwPLnrNm1NceaNXtv426nAOliqw5K+1io3IBhoFyZsWuaE/UfgM1h0xpzTMqUBfRxXZB2ONylhy/Nej0wMe2fi+0Y4KUend1omcZHR7vufgigNMzLEDXFbL63Pj6bFQBkld57MS0KkEWfdhOg3sWAI0mYRUIJMkvGwq5VCJhWtwkwAWoXIcJvjRxw9WnL/YKQWxejPGKAxvZgEHWoBKlhErztmBhgafaMXCtqWKVDJQYc2oNndY5llncEspUDlOFFrXRA23QiUl9jwB7aPvhkoE5UGeQxBlyFLEaXCbrW+XT16wGe9Kcsk25JsH/oWgjw9PbGge+ysdAtgRAhwNm1iW+rXN5pV2oMuEaVTHlXL30iFaySXU+hAsBGpJulzAAclE3geEQGAIzCfcKrFv7VEVna3LAQMIcNyiue7lKSg1ppQ0OcAshPWWT4amNtarb4GgN8qcmwvlAk8qNRtC4GuEVKLn13fKlUUuxepQC+C9NWJ9ZlHRu5iLMUMPGrdhkZLKwLpvQfoXvXhoCDzsZP0beFgagefgkC0yWiVbxqFBmmn/Xh6tcDyxnGtUpskJ/Mb0dpDGBQnSJSJ7NKHYahaR+Fej3wWMSqMI/+Utmkmm6lgCewfICwmyPdHg4BGtRBkHp+m29VqbPyHCCPKL+pFzpJUiZIep9CBQAnOZ+nQwu3TP8bAybjqvJgkyI+DjLF07gQ4M5wXEibvtod5u0RGQDYKhhZFX3ca9hYuRID9GbDidql+kgt/eKCpYMpwGaVIAZGAaKObZyL1BygxTMgMUKXuOEXbQwBFEWaOt4tusQW/eKXQsDic0vE+17njA4SrjFg8n43XCwbZQsdfooCC4eSJJoXJVkRYJ/NSgHEOBIJ8wtYeAzQh0HpCjLop3GDeU4BtEU2kUpXR1YhQqlXDvhxvYG73sBd/wD4Df7+v4eqIoYgAAAAAElFTkSuQmCC
)

?>
```

## Documentação dos Endpoints da API Recebimentos PIX Itaú

Classe | Metodo | HTTP request | Descrição
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

## Documentação dos Models

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




