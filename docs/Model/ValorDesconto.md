# ValorDesconto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**modalidade** | **int** | Modalidade de descontos &lt;table&gt;&lt;tr&gt;&lt;td&gt;Descrição&lt;/td&gt;&lt;td&gt;Dominio&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;Valor Fixo até a[s] data[s] informada[s]&lt;/td&gt;&lt;td&gt;1&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;Percentual até a data informada&lt;/td&gt;&lt;td&gt;2&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;Valor por antecipação dia corrido&lt;/td&gt;&lt;td&gt;3&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;Valor por antecipação dia útil&lt;/td&gt;&lt;td&gt;4&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;Percentual por antecipação dia corrido&lt;/td&gt;&lt;td&gt;5&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;Percentual por antecipação dia útil&lt;/td&gt;&lt;td&gt;6&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt; | 
**valor_perc** | **string** | Abatimentos ou outras deduções aplicadas ao documento, em valor absoluto ou percentual do valor original do documento. (Não deve ser enviado valorPerc e descontoDataFixa juntos) | 
**desconto_data_fixa** | [**\Swagger\Client\Model\ValorDescontoDescontoDataFixa[]**](ValorDescontoDescontoDataFixa.md) | Data limite para o desconto absoluto da cobrança. (A data de desconto obrigatoriamente deverá ser menor que a data de vencimento da cobrança) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

