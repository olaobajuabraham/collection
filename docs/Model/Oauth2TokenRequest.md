# # Oauth2TokenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**grant_type** | **string** | Value can be either \&quot;urn:openid:params:grant-type:ciba\&quot; or \&quot;refresh_token\&quot; | [optional]
**auth_req_id** | **string** | Authentication request ID.Value is only mandatory if grant_type is \&quot;urn:openid:params:grant-type:ciba\&quot; | [optional]
**refresh_token** | **string** | UUID.Refresh token retrieved from oauth2 token endpoint for consents with grant_type offline. This parameter is only valid if grant_type is refresh_token. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
