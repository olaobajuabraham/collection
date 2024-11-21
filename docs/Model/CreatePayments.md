# # CreatePayments

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_transaction_id** | **string** | An external transaction id to tie to the payment. | [optional]
**money** | [**\Mtn\Momo\Collection\Model\Money**](Money.md) |  | [optional]
**customer_reference** | **string** | A customer reference for a provider. Example: +46070911111 | [optional]
**service_provider_user_name** | **string** | A service provider name. Example: Electricity Inc. | [optional]
**coupon_id** | **string** | A coupon the user would like to redeem and use the reward as part of this payment. | [optional]
**product_id** | **string** | Optional id of a product, used if paying for a product. | [optional]
**product_offering_id** | **string** | Optional id of a product offering, used when paying for a particular offering of a product. | [optional]
**receiver_message** | **string** | A descriptive note for receiver transaction history. | [optional]
**sender_note** | **string** | A descriptive note for sender transaction history. | [optional]
**max_number_of_retries** | **int** | maxNumberOfRetries | [optional]
**include_sender_charges** | **bool** | Specifies if sender charges, this is, fee and tax paid by the sender, should be included in the specified transaction amount. This means that the charges will be deducted from the transaction amount before the remaining amount is transferred to the receiver.True indicates that charges shall be included in the specified transaction amount. The default value is false, meaning that sender charges are charged on top of the transaction amount. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
