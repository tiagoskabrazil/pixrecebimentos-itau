# LoteCobrancaVencimentoPatchRequestCobsv

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Status da cobrança. &lt;table&gt;&lt;tr&gt;&lt;td&gt;ENUM&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;REMOVIDA_PELO_USUARIO_RECEBEDOR&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt; | [optional] 
**devedor** | [**\Swagger\Client\Model\Devedor**](Devedor.md) |  | [optional] 
**valor** | [**\Swagger\Client\Model\Valor**](Valor.md) |  | [optional] 
**loc** | [**\Swagger\Client\Model\CobrancaVencimentoPatchRequestLoc**](CobrancaVencimentoPatchRequestLoc.md) |  | [optional] 
**chave** | **string** | Chave DICT do recebedor | [optional] 
**solicitacao_pagador** | **string** | O campo solicitacaoPagador, determina um texto a ser apresentado ao pagador para que ele possa digitar uma informação correlata, em formato livre, a ser enviada ao recebedor | [optional] 
**txid** | **string** | O campo txid determina o identificador da transação. O objetivo desse campo é ser um elemento que possibilite a conciliação de pagamentos. O txid é criado exclusivamente pelo usuário recebedor e está sob sua responsabilidade. Deve ser único por CNPJ do recebedor. Para Code dinâmico o campo deve possuir de 26 posição até 35 posições. Os caracteres permitidos no contexto do Pix para o campo txId são: Letras minúsculas, de ‘a’ a ‘z’, Letras maiúsculas, de ‘A’ a ‘Z’, Dígitos decimais, de ‘0’ a ‘9’ | 
**calendario** | [**\Swagger\Client\Model\LoteCobrancaVencimentoPutRequestCalendario**](LoteCobrancaVencimentoPutRequestCalendario.md) |  | [optional] 
**info_adicionais** | [**\Swagger\Client\Model\InformacaoAdicional[]**](InformacaoAdicional.md) | Cada respectiva informação adicional contida na lista (nome e valor) deve ser apresentada ao pagador | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

