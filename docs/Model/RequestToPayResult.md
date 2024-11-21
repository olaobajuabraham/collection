# # RequestToPayResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Amount that will be debited from the payer account. | [optional]
**currency** | **string** | ISO4217 Currency | [optional]
**financial_transaction_id** | **string** | Financial transactionIdd from mobile money manager.&lt;br&gt; Used to connect to the specific financial transaction made in the account | [optional]
**external_id** | **string** | External id provided in the creation of the requestToPay transaction. | [optional]
**payer** | [**\Mtn\Momo\Collection\Model\Party**](Party.md) |  | [optional]
**payer_message** | **string** | Message that will be written in the payer transaction history message field. | [optional]
**payee_note** | **string** | Message that will be written in the payee transaction history note field. | [optional]
**status** | **string** |  | [optional]
**reason** | [**\Mtn\Momo\Collection\Model\ErrorReason**](ErrorReason.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
