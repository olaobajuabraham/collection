# # Oauth2TokenResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_token** | **string** | Oauth2 JWT access token.The generated token is valid 3600 seconds as default. | [optional]
**token_type** | **string** | Value is Bearer | [optional]
**expires_in** | **float** | Shows when the authentication request ID expires, in seconds. | [optional]
**scope** | **string** | List of scopes that belongs to the authentication request ID. | [optional]
**refresh_token** | **string** | UUID of the refresh_token | [optional]
**refresh_token_expired_in** | **int** | The time in seconds until the consent can no longer be refreshed. Based on the default value for consent validity, or the value set to parameter consent_valid_in sent in the bc-authorize request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
