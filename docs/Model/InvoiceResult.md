# # InvoiceResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference_id** | **string** | The reference id for this invoice. | [optional]
**external_id** | **string** | An external transaction id to tie to the payment. | [optional]
**amount** | **string** | A positive amount for this invoice. | [optional]
**currency** | **string** | ISO4217 Currency - The currency used in this invoice. | [optional]
**status** | **string** |  | [optional]
**payment_reference** | **string** | A unique id that identifies a pending invoice. | [optional]
**invoice_id** | **string** | An id for the invoice. | [optional]
**expiry_date_time** | **string** | DateTime for when invoice expires, in YYYY-MM-DD:THH:mm:ss format. | [optional]
**payee_first_name** | **string** | First name of the payee in this invoice. | [optional]
**payee_last_name** | **string** | Surname of the payee in this invoice | [optional]
**error_reason** | [**\Mtn\Momo\Collection\Model\ErrorReason**](ErrorReason.md) |  | [optional]
**intended_payer** | [**\Mtn\Momo\Collection\Model\Party**](Party.md) |  | [optional]
**description** | **string** | An optional description of the invoice. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
