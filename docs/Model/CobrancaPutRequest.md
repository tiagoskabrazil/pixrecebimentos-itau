# CobrancaPutRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**devedor** | [**\Swagger\Client\Model\Pessoa**](Pessoa.md) |  | [optional] 
**valor** | [**\Swagger\Client\Model\CobrancaPutRequestValor**](CobrancaPutRequestValor.md) |  | 
**loc** | **object** | Estrutura com informações do identificador da localização do payload. | [optional] 
**chave** | **string** | Chave DICT do recebedor | 
**solicitacao_pagador** | **string** | O campo solicitacaoPagador, determina um texto a ser apresentado ao pagador para que ele possa digitar uma informação correlata, em formato livre, a ser enviada ao recebedor | [optional] 
**calendario** | [**\Swagger\Client\Model\CobrancaPatchRequestCalendario**](CobrancaPatchRequestCalendario.md) |  | 
**info_adicionais** | [**\Swagger\Client\Model\InformacaoAdicional[]**](InformacaoAdicional.md) | Cada respectiva informação adicional contida na lista (nome e valor) deve ser apresentada ao pagador | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

