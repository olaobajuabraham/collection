# # PreApprovalDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pre_approval_id** | **string** | The ID of the pre-approval. Parameter cannot be NULL. |
**to_fri** | **string** | The Financial Resource Identifier of the receiving account. |
**from_fri** | **string** | The Financial Resource Identifier of the sending account. |
**from_currency** | **string** | The currency of the account holder from where the debit happens. ISO4217 Currency |
**created_time** | **string** | The date and time at which the pre-approval was created. Validated with IsIso8601DateTime. Parameter can not be NULL |
**approved_time** | **string** | The date and time at which the pre-approval was approved. Validated with IsIso8601DateTime. Parameter can not be NULL. | [optional]
**expiry_time** | **string** | The date and time at which the pre-approval expires. Validated with IsIso8601DateTime. Parameter can not be NULL. | [optional]
**status** | **string** |  |
**message** | **string** | Message. Validated with IsRestirctedString. Parameter can not be NULL. |
**frequency** | **string** |  | [optional]
**start_date** | **string** | The start date of the pre-approval. Validated with IsDateString. Parameter can not be NULL. | [optional]
**last_used_date** | **string** | The date pre-approval was used last. Validated with IsIso8601DateTime. Parameter can not be NULL. | [optional]
**offer** | **string** | The offer description. Validated with IsRestrictedString. Parameter can not be NULL. | [optional]
**external_id** | **string** | The external reference id. Validated with IsExternalReferenceString. Parameter can not be NULL. | [optional]
**max_debit_amount** | **string** | The max debit amount allowed. Contains a non-negative amount. Validated with IsAmount. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
