# CobrancaVencimento

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**txid** | **string** | O campo txid determina o identificador da transação. O objetivo desse campo é ser um elemento que possibilite a conciliação de pagamentos. O txid é criado exclusivamente pelo usuário recebedor e está sob sua responsabilidade. Deve ser único por CNPJ do recebedor. Para Code dinâmico o campo deve possuir de 26 posição até 35 posições. Os caracteres permitidos no contexto do Pix para o campo txId são: Letras minúsculas, de ‘a’ a ‘z’, Letras maiúsculas, de ‘A’ a ‘Z’, Dígitos decimais, de ‘0’ a ‘9’ | 
**status** | **string** | Status da solicitação de criação/alteração da cobrança no contexto de criação via lote &lt;table&gt;&lt;tr&gt;&lt;td&gt;ENUM&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;EM_PROCESSAMENTO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;CRIADA&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;NEGADA&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt; | 
**criacao** | **string** | Data e hora em que a cobrança foi criada. Respeita RFC 3339. | [optional] 
**problema** | [**\Swagger\Client\Model\Problema**](Problema.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

