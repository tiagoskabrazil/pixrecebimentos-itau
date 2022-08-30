# Problema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | URI de referência que identifica o tipo de problema. De acordo com a RFC 7807. | 
**title** | **string** | Descrição resumida do problema. | 
**status** | **int** | Código HTTP do status retornado. | 
**detail** | **string** | Descrição completa do problema. | [optional] 
**correlation_id** | **string** | Identificador de correlação do problema para fins de suporte | [optional] 
**violacoes** | [**\Swagger\Client\Model\ProblemaViolacoes[]**](ProblemaViolacoes.md) | Violações registradas no documento | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

