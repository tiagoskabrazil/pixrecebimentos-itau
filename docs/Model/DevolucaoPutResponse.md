# DevolucaoPutResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id gerado pelo cliente para representar unicamente uma devolução. | 
**rtr_id** | **string** | ReturnIdentification que transita na PACS004. | 
**valor** | **string** | Valor a devolver. | 
**natureza** | **string** | Indica qual é a natureza da devolução. Uma devolução pode ser relacionada a um Pix comum (corresponde ao código MD06 da pacs.004), ou a um Pix de Saque ou Troco (corresponde ao código SL02 da pacs.004). Na ausência deste campo a natureza deve ser interpretada como sendo de um Pix comum (ORIGINAL). | [optional] 
**descricao** | **string** | O campo descricao, opcional, determina um texto a ser apresentado ao pagador contendo informações sobre a devolução. Esse texto será preenchido, na pacs.004, pelo PSP do recebedor, no campo RemittanceInformation. O tamanho do campo na pacs.004 está limitado a 140 caracteres. | [optional] 
**horario** | [**\Swagger\Client\Model\DevolucaoPutResponseHorario**](DevolucaoPutResponseHorario.md) |  | [optional] 
**status** | **string** | Status da Devolução &lt;table&gt;&lt;tr&gt;&lt;td&gt;ENUM&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;EM_PROCESSAMENTO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;DEVOLVIDO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;NAO_REALIZADO&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt; | 
**motivo** | **string** | Campo opcional que pode ser utilizado pelo PSP recebedor para detalhar os motivos de a devolução ter atingido o status em questão. Pode ser utilizado, por exemplo, para detalhar o motivo de a devolução não ter sido realizada. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

