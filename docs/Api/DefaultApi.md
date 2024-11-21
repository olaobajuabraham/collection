# Mtn\Momo\Collection\DefaultApi

All URIs are relative to https://sandbox.momodeveloper.mtn.com/collection, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bcAuthorize()**](DefaultApi.md#bcAuthorize) | **POST** /v1_0/bc-authorize | bc-authorize |
| [**cancelInvoice()**](DefaultApi.md#cancelInvoice) | **DELETE** /v2_0/invoice/{referenceId} | CancelInvoice |
| [**cancelPreApproval()**](DefaultApi.md#cancelPreApproval) | **DELETE** /v1_0/preapproval/{preapprovalid} | CancelPreApproval |
| [**createAccessToken()**](DefaultApi.md#createAccessToken) | **POST** /token/ | CreateAccessToken |
| [**createInvoice()**](DefaultApi.md#createInvoice) | **POST** /v2_0/invoice | CreateInvoice |
| [**createOauth2Token()**](DefaultApi.md#createOauth2Token) | **POST** /oauth2/token/ | CreateOauth2Token |
| [**createPayments()**](DefaultApi.md#createPayments) | **POST** /v2_0/payment | CreatePayments |
| [**getAccountBalance()**](DefaultApi.md#getAccountBalance) | **GET** /v1_0/account/balance | GetAccountBalance |
| [**getAccountBalanceInSpecificCurrency()**](DefaultApi.md#getAccountBalanceInSpecificCurrency) | **GET** /v1_0/account/balance/{currency} | GetAccountBalanceInSpecificCurrency |
| [**getApprovedPreApprovals()**](DefaultApi.md#getApprovedPreApprovals) | **GET** /v1_0/preapprovals/{accountHolderIdType}/{accountHolderId} | GetApprovedPreApprovals |
| [**getBasicUserinfo()**](DefaultApi.md#getBasicUserinfo) | **GET** /v1_0/accountholder/{accountHolderIdType}/{accountHolderId}/basicuserinfo | GetBasicUserinfo |
| [**getInvoiceStatus()**](DefaultApi.md#getInvoiceStatus) | **GET** /v2_0/invoice/{x-referenceId} | GetInvoiceStatus |
| [**getPaymentStatus()**](DefaultApi.md#getPaymentStatus) | **GET** /v2_0/payment/{x-referenceId} | GetPaymentStatus |
| [**getPreApprovalStatus()**](DefaultApi.md#getPreApprovalStatus) | **GET** /v2_0/preapproval/{referenceId} | GetPreApprovalStatus |
| [**getUserInfoWithConsent()**](DefaultApi.md#getUserInfoWithConsent) | **GET** /oauth2/v1_0/userinfo | GetUserInfoWithConsent |
| [**preApproval()**](DefaultApi.md#preApproval) | **POST** /v2_0/preapproval | PreApproval |
| [**requestToWithdrawTransactionStatus()**](DefaultApi.md#requestToWithdrawTransactionStatus) | **GET** /v1_0/requesttowithdraw/{referenceId} | RequestToWithdrawTransactionStatus |
| [**requestToWithdrawV1()**](DefaultApi.md#requestToWithdrawV1) | **POST** /v1_0/requesttowithdraw | RequestToWithdraw-V1 |
| [**requestToWithdrawV2()**](DefaultApi.md#requestToWithdrawV2) | **POST** /v2_0/requesttowithdraw | RequestToWithdraw-V2 |
| [**requesttoPay()**](DefaultApi.md#requesttoPay) | **POST** /v1_0/requesttopay | RequesttoPay |
| [**requesttoPayDeliveryNotification()**](DefaultApi.md#requesttoPayDeliveryNotification) | **POST** /v1_0/requesttopay/{referenceId}/deliverynotification | RequesttoPayDeliveryNotification |
| [**requesttoPayTransactionStatus()**](DefaultApi.md#requesttoPayTransactionStatus) | **GET** /v1_0/requesttopay/{referenceId} | RequesttoPayTransactionStatus |
| [**validateAccountHolderStatus()**](DefaultApi.md#validateAccountHolderStatus) | **GET** /v1_0/accountholder/{accountHolderIdType}/{accountHolderId}/active | ValidateAccountHolderStatus |


## `bcAuthorize()`

```php
bcAuthorize($authorization, $x_target_environment, $x_callback_url): \Mtn\Momo\Collection\Model\BcauthorizeResponse
```

bc-authorize

This operation is used to claim a consent by the account holder for the requested scopes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Bearer Token. Replace with a valid oauth2 token received from oauth2 token endpoint in Wallet Platform.
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.
$x_callback_url = 'x_callback_url_example'; // string | URL to the server where the callback should be sent.

try {
    $result = $apiInstance->bcAuthorize($authorization, $x_target_environment, $x_callback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->bcAuthorize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Token. Replace with a valid oauth2 token received from oauth2 token endpoint in Wallet Platform. | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |
| **x_callback_url** | **string**| URL to the server where the callback should be sent. | [optional] |

### Return type

[**\Mtn\Momo\Collection\Model\BcauthorizeResponse**](../Model/BcauthorizeResponse.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelInvoice()`

```php
cancelInvoice($reference_id, $authorization, $x_target_environment, $x_reference_id, $x_callback_url, $cancel_invoice_request): \Mtn\Momo\Collection\Model\CancelInvoice200Response
```

CancelInvoice

This operation is used to delete an invoice. The ReferenceId is associated with the invoice to be cancelled

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_id = 'reference_id_example'; // string | UUID of transaction to get result. An id to uniquely identify the cancelling an Invoice
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. The desired target environment to use that is allowed for the API user.
$x_reference_id = 'x_reference_id_example'; // string | Format - UUID. Recource ID of the created request to pay transaction. This ID is used, for example, validating the status of the request. ‘Universal Unique ID’ for the transaction generated using UUID version 4.
$x_callback_url = 'x_callback_url_example'; // string | PUT Callback URL to send callback to once the invoice is completed.
$cancel_invoice_request = {"externalId":"string"}; // \Mtn\Momo\Collection\Model\CancelInvoiceRequest

try {
    $result = $apiInstance->cancelInvoice($reference_id, $authorization, $x_target_environment, $x_reference_id, $x_callback_url, $cancel_invoice_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cancelInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference_id** | **string**| UUID of transaction to get result. An id to uniquely identify the cancelling an Invoice | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. The desired target environment to use that is allowed for the API user. | |
| **x_reference_id** | **string**| Format - UUID. Recource ID of the created request to pay transaction. This ID is used, for example, validating the status of the request. ‘Universal Unique ID’ for the transaction generated using UUID version 4. | |
| **x_callback_url** | **string**| PUT Callback URL to send callback to once the invoice is completed. | [optional] |
| **cancel_invoice_request** | [**\Mtn\Momo\Collection\Model\CancelInvoiceRequest**](../Model/CancelInvoiceRequest.md)|  | [optional] |

### Return type

[**\Mtn\Momo\Collection\Model\CancelInvoice200Response**](../Model/CancelInvoice200Response.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `Successful Invoice Deleted`, `Payer not found`, `application/json`, `Unspecified internal error`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelPreApproval()`

```php
cancelPreApproval($preapprovalid, $authorization, $x_target_environment)
```

CancelPreApproval

This operation is used to cancel a pre-approval. It is possible to cancel only that preapproval which is in approved state and the requesting Account Holder (Service Provider or Merchant) is the payee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$preapprovalid = 'preapprovalid_example'; // string | UUID of transaction to get result. Reference id  used when creating the PreApproval.
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $apiInstance->cancelPreApproval($preapprovalid, $authorization, $x_target_environment);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cancelPreApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **preapprovalid** | **string**| UUID of transaction to get result. Reference id  used when creating the PreApproval. | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `Unspecified internal error`, `Successful request to pay`, `Payer not found`, `application/json`, `Request to pay not found`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccessToken()`

```php
createAccessToken($authorization): \Mtn\Momo\Collection\Model\TokenPost200ApplicationJsonResponse
```

CreateAccessToken

This operation is used to create an access token which can then be used to authorize and authenticate towards the other end-points of the API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Basic authentication header containing API user ID and API key. Should be sent in as B64 encoded.

try {
    $result = $apiInstance->createAccessToken($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Basic authentication header containing API user ID and API key. Should be sent in as B64 encoded. | |

### Return type

[**\Mtn\Momo\Collection\Model\TokenPost200ApplicationJsonResponse**](../Model/TokenPost200ApplicationJsonResponse.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInvoice()`

```php
createInvoice($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $create_invoice)
```

CreateInvoice

A merchant may use this in order to create an invoice that can be paid by an intended payer via any channel at a later stage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_reference_id = 'x_reference_id_example'; // string | Format - UUID. An id to uniquely identify the making of an invoice
$x_target_environment = 'x_target_environment_example'; // string | The desired target environment to use that is allowed for the API user.
$x_callback_url = 'x_callback_url_example'; // string | PUT Callback URL to send callback to once the invoice is completed.
$create_invoice = {"externalId":"string (An external transaction id to tie to the payment.)","amount":"string","currency":"string","validityDuration":"string(The duration that the invoice is valid in seconds.)","intendedPayer":{"partyIdType":"MSISDN","partyId":"string"},"payee":{"partyIdType":"MSISDN","partyId":"string"},"description":"string (An optional description of the invoice.)"}; // \Mtn\Momo\Collection\Model\CreateInvoice

try {
    $apiInstance->createInvoice($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $create_invoice);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_reference_id** | **string**| Format - UUID. An id to uniquely identify the making of an invoice | |
| **x_target_environment** | **string**| The desired target environment to use that is allowed for the API user. | |
| **x_callback_url** | **string**| PUT Callback URL to send callback to once the invoice is completed. | [optional] |
| **create_invoice** | [**\Mtn\Momo\Collection\Model\CreateInvoice**](../Model/CreateInvoice.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `ReferenceId already in use`, `Unspecified internal error`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOauth2Token()`

```php
createOauth2Token($authorization, $x_target_environment, $grant_type, $auth_req_id, $refresh_token): \Mtn\Momo\Collection\Model\Oauth2TokenResponse
```

CreateOauth2Token

This operation is used to claim a consent by the account holder for the requested scopes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Basic authentication header containing API user ID and API key. Should be sent in as B64 encoded.
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.
$grant_type = 'grant_type_example'; // string
$auth_req_id = 'auth_req_id_example'; // string
$refresh_token = 'refresh_token_example'; // string

try {
    $result = $apiInstance->createOauth2Token($authorization, $x_target_environment, $grant_type, $auth_req_id, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createOauth2Token: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Basic authentication header containing API user ID and API key. Should be sent in as B64 encoded. | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |
| **grant_type** | **string**|  | [optional] |
| **auth_req_id** | **string**|  | [optional] |
| **refresh_token** | **string**|  | [optional] |

### Return type

[**\Mtn\Momo\Collection\Model\Oauth2TokenResponse**](../Model/Oauth2TokenResponse.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPayments()`

```php
createPayments($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $create_payments)
```

CreatePayments

Making it possible to perform payments via the partner gateway. This may be used to pay for external bills or to perform air-time top-ups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_reference_id = 'x_reference_id_example'; // string | Format - UUID. An id to uniquely identify the making of an invoice
$x_target_environment = 'x_target_environment_example'; // string | The desired target environment to use that is allowed for the API user.
$x_callback_url = 'x_callback_url_example'; // string | PUT Callback URL to send callback to once the invoice is completed.
$create_payments = {"externalTransactionId":"string (An external transaction id to tie to the payment.)","money":{"amount":"string","currency":"string"},"customerReference":"String(661551442)","serviceProviderUserName":"String"}; // \Mtn\Momo\Collection\Model\CreatePayments

try {
    $apiInstance->createPayments($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $create_payments);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_reference_id** | **string**| Format - UUID. An id to uniquely identify the making of an invoice | |
| **x_target_environment** | **string**| The desired target environment to use that is allowed for the API user. | |
| **x_callback_url** | **string**| PUT Callback URL to send callback to once the invoice is completed. | [optional] |
| **create_payments** | [**\Mtn\Momo\Collection\Model\CreatePayments**](../Model/CreatePayments.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `ReferenceId already in use`, `Unspecified internal error`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountBalance()`

```php
getAccountBalance($authorization, $x_target_environment): \Mtn\Momo\Collection\Model\Balance
```

GetAccountBalance

Get the balance of own account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $result = $apiInstance->getAccountBalance($authorization, $x_target_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAccountBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

[**\Mtn\Momo\Collection\Model\Balance**](../Model/Balance.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Incorrect target environment`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountBalanceInSpecificCurrency()`

```php
getAccountBalanceInSpecificCurrency($currency, $authorization, $x_target_environment): \Mtn\Momo\Collection\Model\Balance
```

GetAccountBalanceInSpecificCurrency

Get the balance of own account. Currency parameter passed in GET

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'currency_example'; // string | Should be in ISO4217 Currency
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $result = $apiInstance->getAccountBalanceInSpecificCurrency($currency, $authorization, $x_target_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAccountBalanceInSpecificCurrency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | **string**| Should be in ISO4217 Currency | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

[**\Mtn\Momo\Collection\Model\Balance**](../Model/Balance.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Incorrect target environment`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApprovedPreApprovals()`

```php
getApprovedPreApprovals($account_holder_id_type, $account_holder_id, $authorization, $x_target_environment): \Mtn\Momo\Collection\Model\PreApprovalDetails[]
```

GetApprovedPreApprovals

This operation is used to get approved pre-approvals of an account holder. Only those pre-approvals of account holder, where requesting Account Holder (Service Provider or Merchant) is the payee, are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_holder_id_type = 'msisdn'; // string | Specifies the type of the accountHolderId.  Allowed values: msisdn email id alias
$account_holder_id = 'account_holder_id_example'; // string | The AccountHolderId .  Validated according to the accountHolderIdType: msisdn - Mobile Number. Validated with IsMSISDN. email - E-mail. Validated with IsEmail. id - Internal Id of Account Holder. Validated with IsLongString. alias - Alias of the party. Validated with IsAlias.
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $result = $apiInstance->getApprovedPreApprovals($account_holder_id_type, $account_holder_id, $authorization, $x_target_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getApprovedPreApprovals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_holder_id_type** | **string**| Specifies the type of the accountHolderId.  Allowed values: msisdn email id alias | [default to &#39;msisdn&#39;] |
| **account_holder_id** | **string**| The AccountHolderId .  Validated according to the accountHolderIdType: msisdn - Mobile Number. Validated with IsMSISDN. email - E-mail. Validated with IsEmail. id - Internal Id of Account Holder. Validated with IsLongString. alias - Alias of the party. Validated with IsAlias. | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

[**\Mtn\Momo\Collection\Model\PreApprovalDetails[]**](../Model/PreApprovalDetails.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Unspecified internal error`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBasicUserinfo()`

```php
getBasicUserinfo($account_holder_id_type, $account_holder_id, $authorization, $x_target_environment): \Mtn\Momo\Collection\Model\BasicUserInfoJsonResponse
```

GetBasicUserinfo

This operation returns personal information of the account holder. The operation does not need any consent by the account holder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_holder_id_type = 'account_holder_id_type_example'; // string | Type of account holder identity passed in accountHolderId path param.  Possible values: MSISDN  Email  Alias  ID (account ID)
$account_holder_id = 'account_holder_id_example'; // string | ID of the account holder.
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $result = $apiInstance->getBasicUserinfo($account_holder_id_type, $account_holder_id, $authorization, $x_target_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBasicUserinfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_holder_id_type** | **string**| Type of account holder identity passed in accountHolderId path param.  Possible values: MSISDN  Email  Alias  ID (account ID) | |
| **account_holder_id** | **string**| ID of the account holder. | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

[**\Mtn\Momo\Collection\Model\BasicUserInfoJsonResponse**](../Model/BasicUserInfoJsonResponse.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceStatus()`

```php
getInvoiceStatus($x_reference_id, $authorization, $x_target_environment): \Mtn\Momo\Collection\Model\InvoiceResult
```

GetInvoiceStatus

This operation is used to get the status of an invoice. X-Reference-Id that was passed in the post is used as reference to the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_reference_id = 'x_reference_id_example'; // string | UUID of transaction to get result. Reference id  used when creating the Invoice.
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $result = $apiInstance->getInvoiceStatus($x_reference_id, $authorization, $x_target_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getInvoiceStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_reference_id** | **string**| UUID of transaction to get result. Reference id  used when creating the Invoice. | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

[**\Mtn\Momo\Collection\Model\InvoiceResult**](../Model/InvoiceResult.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `Successful Invoice Created`, `Payer not found`, `application/json`, `Request to pay not found`, `Unspecified internal error`, `Successful request to pay`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentStatus()`

```php
getPaymentStatus($x_reference_id, $authorization, $x_target_environment): \Mtn\Momo\Collection\Model\PaymentResult
```

GetPaymentStatus

This operation is used to get the status of a Payment. X-Reference-Id that was passed in the post is used as reference to the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_reference_id = 'x_reference_id_example'; // string | UUID of transaction to get result. Reference id  used when creating the Payment.
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $result = $apiInstance->getPaymentStatus($x_reference_id, $authorization, $x_target_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPaymentStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_reference_id** | **string**| UUID of transaction to get result. Reference id  used when creating the Payment. | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

[**\Mtn\Momo\Collection\Model\PaymentResult**](../Model/PaymentResult.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `Successful Payment Created`, `Payer not found`, `application/json`, `Payment not found`, `Unspecified internal error`, `Successful request to pay`, `Request to pay not found`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPreApprovalStatus()`

```php
getPreApprovalStatus($reference_id, $authorization, $x_target_environment): \Mtn\Momo\Collection\Model\PreApprovalResult
```

GetPreApprovalStatus

This operation is used to get the status of a pre-approval. X-Reference-Id that was passed in the post is used as reference to the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_id = 'reference_id_example'; // string | UUID of transaction to get result. Reference id  used when creating the PreApproval.
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $result = $apiInstance->getPreApprovalStatus($reference_id, $authorization, $x_target_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPreApprovalStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference_id** | **string**| UUID of transaction to get result. Reference id  used when creating the PreApproval. | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

[**\Mtn\Momo\Collection\Model\PreApprovalResult**](../Model/PreApprovalResult.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `Successful Invoice Created`, `Payer not found`, `application/json`, `Unspecified internal error`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserInfoWithConsent()`

```php
getUserInfoWithConsent($authorization, $x_target_environment): \Mtn\Momo\Collection\Model\ConsentkycResponse
```

GetUserInfoWithConsent

This operation is used to claim a consent by the account holder for the requested scopes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Bearer Token. Replace with a valid oauth2 token received from oauth2 token endpoint in Wallet Platform.
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $result = $apiInstance->getUserInfoWithConsent($authorization, $x_target_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUserInfoWithConsent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Token. Replace with a valid oauth2 token received from oauth2 token endpoint in Wallet Platform. | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

[**\Mtn\Momo\Collection\Model\ConsentkycResponse**](../Model/ConsentkycResponse.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `preApproval()`

```php
preApproval($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $pre_approval)
```

PreApproval

Preapproval operation is used to create a pre-approval.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_reference_id = 'x_reference_id_example'; // string | Format - UUID. An id to uniquely identify the making of an invoice
$x_target_environment = 'x_target_environment_example'; // string | The desired target environment to use that is allowed for the API user.
$x_callback_url = 'x_callback_url_example'; // string | PUT Callback URL to send callback to once the invoice is completed.
$pre_approval = {"payer":{"partyIdType":"MSISDN","partyId":"string"},"payerCurrency":"string(The currency code of the sending account. Amount to be paid.)","payerMessage":"string (Message to the end user.)","validityTime":"integer (The time duration in seconds that the pre-approval is valid once it is accepted.)"}; // \Mtn\Momo\Collection\Model\PreApproval

try {
    $apiInstance->preApproval($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $pre_approval);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->preApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_reference_id** | **string**| Format - UUID. An id to uniquely identify the making of an invoice | |
| **x_target_environment** | **string**| The desired target environment to use that is allowed for the API user. | |
| **x_callback_url** | **string**| PUT Callback URL to send callback to once the invoice is completed. | [optional] |
| **pre_approval** | [**\Mtn\Momo\Collection\Model\PreApproval**](../Model/PreApproval.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `ReferenceId already in use`, `Unspecified internal error`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestToWithdrawTransactionStatus()`

```php
requestToWithdrawTransactionStatus($reference_id, $authorization, $x_target_environment): \Mtn\Momo\Collection\Model\RequestToPayResult
```

RequestToWithdrawTransactionStatus

This operation is used to get the status of a request to withdraw. X-Reference-Id that was passed in the post is used as reference to the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_id = 'reference_id_example'; // string | UUID of transaction to get result. Reference id  used when creating the RequestToWithdraw.
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $result = $apiInstance->requestToWithdrawTransactionStatus($reference_id, $authorization, $x_target_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->requestToWithdrawTransactionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference_id** | **string**| UUID of transaction to get result. Reference id  used when creating the RequestToWithdraw. | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

[**\Mtn\Momo\Collection\Model\RequestToPayResult**](../Model/RequestToPayResult.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `Successful request to pay`, `Payer not found`, `application/json`, `Request to pay not found`, `Unspecified internal error`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestToWithdrawV1()`

```php
requestToWithdrawV1($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $request_to_pay)
```

RequestToWithdraw-V1

This operation is used to request a withdrawal (cash-out) from a consumer (Payer). The payer will be asked to authorize the withdrawal. The transaction will be executed once the payer has authorized the withdrawal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_reference_id = 'x_reference_id_example'; // string | Format - UUID. Recource ID of the created request to pay transaction. This ID is used, for example, validating the status of the request. ‘Universal Unique ID’ for the transaction generated using UUID version 4.
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.
$x_callback_url = 'x_callback_url_example'; // string | POST Callback URL to the server where the callback should be sent.
$request_to_pay = {"payeeNote":"string","externalId":"string","amount":"string","currency":"string","payer":{"partyIdType":"MSISDN","partyId":"string"},"payerMessage":"string"}; // \Mtn\Momo\Collection\Model\RequestToPay

try {
    $apiInstance->requestToWithdrawV1($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $request_to_pay);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->requestToWithdrawV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_reference_id** | **string**| Format - UUID. Recource ID of the created request to pay transaction. This ID is used, for example, validating the status of the request. ‘Universal Unique ID’ for the transaction generated using UUID version 4. | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |
| **x_callback_url** | **string**| POST Callback URL to the server where the callback should be sent. | [optional] |
| **request_to_pay** | [**\Mtn\Momo\Collection\Model\RequestToPay**](../Model/RequestToPay.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `ReferenceId already in use`, `Unspecified internal error`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestToWithdrawV2()`

```php
requestToWithdrawV2($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $request_to_pay)
```

RequestToWithdraw-V2

This operation is used to request a withdrawal (cash-out) from a consumer (Payer). The payer will be asked to authorize the withdrawal. The transaction will be executed once the payer has authorized the withdrawal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_reference_id = 'x_reference_id_example'; // string | Format - UUID. Recource ID of the created request to pay transaction. This ID is used, for example, validating the status of the request. ‘Universal Unique ID’ for the transaction generated using UUID version 4.
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.
$x_callback_url = 'x_callback_url_example'; // string | PUT Callback URL to the server where the callback should be sent.
$request_to_pay = {"payeeNote":"string","externalId":"string","amount":"string","currency":"string","payer":{"partyIdType":"MSISDN","partyId":"string"},"payerMessage":"string"}; // \Mtn\Momo\Collection\Model\RequestToPay

try {
    $apiInstance->requestToWithdrawV2($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $request_to_pay);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->requestToWithdrawV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_reference_id** | **string**| Format - UUID. Recource ID of the created request to pay transaction. This ID is used, for example, validating the status of the request. ‘Universal Unique ID’ for the transaction generated using UUID version 4. | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |
| **x_callback_url** | **string**| PUT Callback URL to the server where the callback should be sent. | [optional] |
| **request_to_pay** | [**\Mtn\Momo\Collection\Model\RequestToPay**](../Model/RequestToPay.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `ReferenceId already in use`, `Unspecified internal error`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requesttoPay()`

```php
requesttoPay($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $request_to_pay)
```

RequesttoPay

This operation is used to request a payment from a consumer (Payer). The payer will be asked to authorize the payment. The transaction will be executed once the payer has authorized the payment. The requesttopay will be in status PENDING until the transaction is authorized or declined by the payer or it is timed out by the system.   Status of the transaction can be validated by using the GET /requesttopay/\\<resourceId\\>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_reference_id = 'x_reference_id_example'; // string | Format - UUID. Recource ID of the created request to pay transaction. This ID is used, for example, validating the status of the request. ‘Universal Unique ID’ for the transaction generated using UUID version 4.
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.
$x_callback_url = 'x_callback_url_example'; // string | URL to the server where the callback should be sent.
$request_to_pay = {"amount":"string","currency":"string","externalId":"string","payer":{"partyIdType":"MSISDN","partyId":"string"},"payerMessage":"string","payeeNote":"string"}; // \Mtn\Momo\Collection\Model\RequestToPay

try {
    $apiInstance->requesttoPay($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $request_to_pay);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->requesttoPay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_reference_id** | **string**| Format - UUID. Recource ID of the created request to pay transaction. This ID is used, for example, validating the status of the request. ‘Universal Unique ID’ for the transaction generated using UUID version 4. | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |
| **x_callback_url** | **string**| URL to the server where the callback should be sent. | [optional] |
| **request_to_pay** | [**\Mtn\Momo\Collection\Model\RequestToPay**](../Model/RequestToPay.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `ReferenceId already in use`, `Unspecified internal error`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requesttoPayDeliveryNotification()`

```php
requesttoPayDeliveryNotification($reference_id, $notification_message, $authorization, $x_target_environment, $language, $deliverynotification)
```

RequesttoPayDeliveryNotification

This operation is used to send additional Notification to an End User.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_id = 'reference_id_example'; // string | UUID of transaction to get result. Reference id used when creating the RequesttoPay.
$notification_message = 'notification_message_example'; // string | The message to send in the delivery notification. Max              length 160.
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.
$language = 'language_example'; // string | An ISO 639-1 or ISO 639-3 language code. The language is used to select the best matching notification template when sending the delivery notification to the end-user. A default value is used if not specified.
$deliverynotification = {"notificationMessage":"string"}; // \Mtn\Momo\Collection\Model\Deliverynotification

try {
    $apiInstance->requesttoPayDeliveryNotification($reference_id, $notification_message, $authorization, $x_target_environment, $language, $deliverynotification);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->requesttoPayDeliveryNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference_id** | **string**| UUID of transaction to get result. Reference id used when creating the RequesttoPay. | |
| **notification_message** | **string**| The message to send in the delivery notification. Max              length 160. | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |
| **language** | **string**| An ISO 639-1 or ISO 639-3 language code. The language is used to select the best matching notification template when sending the delivery notification to the end-user. A default value is used if not specified. | [optional] |
| **deliverynotification** | [**\Mtn\Momo\Collection\Model\Deliverynotification**](../Model/Deliverynotification.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requesttoPayTransactionStatus()`

```php
requesttoPayTransactionStatus($reference_id, $authorization, $x_target_environment): \Mtn\Momo\Collection\Model\RequestToPayResult
```

RequesttoPayTransactionStatus

This operation is used to get the status of a request to pay. X-Reference-Id that was passed in the post is used as reference to the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_id = 'reference_id_example'; // string | UUID of transaction to get result. Reference id  used when creating the request to pay.
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $result = $apiInstance->requesttoPayTransactionStatus($reference_id, $authorization, $x_target_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->requesttoPayTransactionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference_id** | **string**| UUID of transaction to get result. Reference id  used when creating the request to pay. | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

[**\Mtn\Momo\Collection\Model\RequestToPayResult**](../Model/RequestToPayResult.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `Successful request to pay`, `Payer not found`, `application/json`, `Request to pay not found`, `Unspecified internal error`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateAccountHolderStatus()`

```php
validateAccountHolderStatus($account_holder_id, $account_holder_id_type, $authorization, $x_target_environment)
```

ValidateAccountHolderStatus

Operation is used  to check if an account holder is registered and active in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Collection\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Collection\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_holder_id = 'account_holder_id_example'; // string | The AccountHolder number. Validated according to the AccountHolder ID type (case Sensitive). <br> msisdn - Mobile Number validated according to ITU-T E.164. Validated with IsMSISDN<br> email - Validated to be a valid e-mail format. Validated with IsEmail
$account_holder_id_type = 'account_holder_id_type_example'; // string | Specifies the type of the AccountHolder ID. Allowed values [msisdn, email].  <br> accountHolderId should explicitly be in small letters.
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $apiInstance->validateAccountHolderStatus($account_holder_id, $account_holder_id_type, $authorization, $x_target_environment);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->validateAccountHolderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_holder_id** | **string**| The AccountHolder number. Validated according to the AccountHolder ID type (case Sensitive). &lt;br&gt; msisdn - Mobile Number validated according to ITU-T E.164. Validated with IsMSISDN&lt;br&gt; email - Validated to be a valid e-mail format. Validated with IsEmail | |
| **account_holder_id_type** | **string**| Specifies the type of the AccountHolder ID. Allowed values [msisdn, email].  &lt;br&gt; accountHolderId should explicitly be in small letters. | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `Incorrect target environment`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
