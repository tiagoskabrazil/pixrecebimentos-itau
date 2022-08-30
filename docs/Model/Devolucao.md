# Devolucao

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id da devolução | 
**rtr_id** | **string** | ReturnIdentification (Transita na PACS004). | 
**valor** | **string** | Valor a devolver. | 
**natureza** | **string** | Natureza da Devolução &lt;table&gt;&lt;tr&gt;&lt;td&gt;ENUM&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;ORIGINAL&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;RETIRADA&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;MED_OPERACIONAL&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;MED_FRAUDE&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt; | [optional] 
**descricao** | **string** | O campo descricao, opcional, determina um texto a ser apresentado ao pagador contendo informações sobre a devolução. Esse texto será preenchido, na pacs.004, pelo PSP do recebedor, no campo RemittanceInformation. O tamanho do campo na pacs.004 está limitado a 140 caracteres. | [optional] 
**horario** | [**\Swagger\Client\Model\DevolucaoHorario**](DevolucaoHorario.md) |  | [optional] 
**status** | **string** | Status da Devolução &lt;table&gt;&lt;tr&gt;&lt;td&gt;ENUM&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;EM_PROCESSAMENTO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;DEVOLVIDO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;NAO_REALIZADO&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt; | 
**motivo** | **string** | Campo opcional que pode ser utilizado pelo PSP recebedor para detalhar os motivos de a devolução ter atingido o status em questão. Pode ser utilizado, por exemplo, para detalhar o motivo de a devolução não ter sido realizada. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

