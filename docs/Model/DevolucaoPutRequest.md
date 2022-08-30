# DevolucaoPutRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**valor** | **string** | Valor da devolução | 
**natureza** | **string** | Indica qual é a natureza da devolução. Uma devolução pode ser relacionada a um Pix comum (corresponde ao código MD06 da pacs.004), ou a um Pix de Saque ou Troco (corresponde ao código SL02 da pacs.004). Na ausência deste campo a natureza deve ser interpretada como sendo de um Pix comum (ORIGINAL). | [optional] 
**descricao** | **string** | O campo descricao, opcional, determina um texto a ser apresentado ao pagador contendo informações sobre a devolução. Esse texto será preenchido, na pacs.004, pelo PSP do recebedor, no campo RemittanceInformation. O tamanho do campo na pacs.004 está limitado a 140 caracteres. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

