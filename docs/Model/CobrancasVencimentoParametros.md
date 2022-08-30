# CobrancasVencimentoParametros

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inicio** | **string** | Data inicial. Respeita RFC 3339. | 
**fim** | **string** | Data de fim. Respeita RFC 3339. | 
**txid** | **string** | ID de identificação do documento entre os bancos e o cliente emissor. O campo txid é obrigatório e determina o identificador da transação.O objetivo desse campo é ser um elemento que possibilite a conciliação de pagamentos. O txid é criado exclusivamente pelo usuário recebedor e está sob sua responsabilidade. Deve ser único por CNPJ do recebedor. Apesar de possuir o tamanho de 35 posições (PAC008), para QR Code Estático o tamanho máximo permitido é de 25 posições (limitação EMV). No caso do QR Code dinâmico o campo deve possuir de 26 posição até 35 posições. Os caracteres permitidos no contexto do Pix para o campo txId são:Letras minúsculas, de ‘a’ a ‘z’, Letras maiúsculas, de ‘A’ a ‘Z’, Dígitos decimais, de ‘0’ a ‘9’ | [optional] 
**tx_id_presente** | **bool** | Indicador do indentificador da taxa. | [optional] 
**devolucao_presente** | **bool** | Indicador de devolução. | [optional] 
**cpf** | **string** | CPF do pagador cadastrado na cobrança | [optional] 
**cnpj** | **string** | CNPJ do pagador cadastrado na cobrança. | [optional] 
**location_presente** | **bool** | Filtro pela existência de location vinculada. | [optional] 
**status** | **bool** | Filtro pelo status das cobranças. | [optional] 
**paginacao** | [**\Swagger\Client\Model\CobrancasVencimentoParametrosPaginacao**](CobrancasVencimentoParametrosPaginacao.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

