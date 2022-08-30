# CobrancasVencimentoCobs

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**calendario** | [**\Swagger\Client\Model\Calendario**](Calendario.md) |  | 
**devedor** | [**\Swagger\Client\Model\Devedor**](Devedor.md) |  | 
**loc** | [**\Swagger\Client\Model\Loc**](Loc.md) |  | [optional] 
**valor** | [**\Swagger\Client\Model\CobrancaVencimentoPutRequestPropertiesValor**](CobrancaVencimentoPutRequestPropertiesValor.md) |  | 
**chave** | **string** | Chave Pix do Sistema DICT - BACEN | 
**solicitacao_pagador** | **string** | O campo solicitacaoPagador, determina um texto a ser apresentado ao pagador para que ele possa digitar uma informação correlata, em formato livre, a ser enviada ao recebedor | [optional] 
**info_adicionais** | [**\Swagger\Client\Model\InformacaoAdicional[]**](InformacaoAdicional.md) | Cada respectiva informação adicional contida na lista (nome e valor) deve ser apresentada ao pagador | [optional] 
**txid** | **string** | O campo txid determina o identificador da transação. O objetivo desse campo é ser um elemento que possibilite a conciliação de pagamentos. O txid é criado exclusivamente pelo usuário recebedor e está sob sua responsabilidade. Deve ser único por CNPJ do recebedor. Para Code dinâmico o campo deve possuir de 26 posição até 35 posições. Os caracteres permitidos no contexto do Pix para o campo txId são: Letras minúsculas, de ‘a’ a ‘z’, Letras maiúsculas, de ‘A’ a ‘Z’, Dígitos decimais, de ‘0’ a ‘9’ | 
**revisao** | **int** | Quantidade de revisões da cobrança. | 
**recebedor** | [**\Swagger\Client\Model\Recebedor**](Recebedor.md) |  | 
**status** | **string** | Status do registro da cobrança. &lt;table&gt;&lt;tr&gt;&lt;td&gt;ENUM&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;ATIVA&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;CONCLUIDA&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;REMOVIDA_PELO_USUARIO_RECEBEDOR&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;REMOVIDA_PELO_PSP&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt; | 
**pix_copia_e_cola** | **string** | Este campo retorna o valor do Pix Copia e Cola correspondente à cobrança. Trata-se da sequência de caracteres que representa o BR Code. | [optional] 
**pix** | [**\Swagger\Client\Model\Pix[]**](Pix.md) | Lista de Pix recebidos | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

