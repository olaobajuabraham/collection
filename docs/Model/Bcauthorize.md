# # Bcauthorize

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**scope** | **string** | Space separated list of scopes. | [optional]
**login_hint** | **string** | The identity of the account holder. | [optional]
**access_type** | **string** | Value either online, or offline. | [optional]
**consent_valid_in** | **int** | The validity time of the consent in secondsThis parameter can only be used together with access type offline. | [optional]
**client_notification_token** | **string** | This token is required when the client is using Ping or Push mode. | [optional]
**scope_instruction** | **string** | Base64 encoded Instrcution of the financial transaction. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
