# # CreateInvoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | External id is used as a reference to the transaction. External id is used for reconciliation. The external id will be included in transaction history report. &lt;br&gt;External id is not required to be unique. | [optional]
**amount** | **string** | Amount that will be debited from the payer account. | [optional]
**currency** | **string** | ISO4217 Currency | [optional]
**validity_duration** | **string** | ValidityTime - The duration that the invoice is valid in seconds. | [optional]
**intended_payer** | [**\Mtn\Momo\Collection\Model\Party**](Party.md) |  | [optional]
**payee** | [**\Mtn\Momo\Collection\Model\Party**](Party.md) |  | [optional]
**description** | **string** | Message that will be written in the payer transaction history message field. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
