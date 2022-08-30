# Pix

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**end_to_end_id** | **string** | Id fim a fim da transação. Esse campo é o \&quot;id do pagamento\&quot;. Transita nas mensagens de recebimento dos QR Codes e transferências. | 
**txid** | **string** | O campo txid determina o identificador da transação. O objetivo desse campo é ser um elemento que possibilite a conciliação de pagamentos. O txid é criado exclusivamente pelo usuário recebedor e está sob sua responsabilidade. Deve ser único por CNPJ do recebedor. Para Code dinâmico o campo deve possuir de 26 posição até 35 posições. Os caracteres permitidos no contexto do Pix para o campo txId são: Letras minúsculas, de ‘a’ a ‘z’, Letras maiúsculas, de ‘A’ a ‘Z’, Dígitos decimais, de ‘0’ a ‘9’ | [optional] 
**valor** | **string** | Valor do pagamento. | 
**componentes_valor** | [**\Swagger\Client\Model\ComponentesValor[]**](ComponentesValor.md) | O objetivo dessa estrutura é explicar os elementos de composição do valor do Pix, incluindo informações sobre as multas, juros, descontos e abatimentos quando o Pix for relativo a cobranças com vencimento. | [optional] 
**chave** | **string** | Chave DICT do recebedor | 
**horario** | **string** | Horário do pagamento. | 
**info_pagador** | **string** | Informação livre do pagador. | 
**devolucoes** | [**\Swagger\Client\Model\Devolucao[]**](Devolucao.md) | Devolucoes registradas no documento | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

