# OpenAPIClient-php

Enable remote collection of bills, fees or taxes


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://sandbox.momodeveloper.mtn.com/collection*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**bcAuthorize**](docs/Api/DefaultApi.md#bcauthorize) | **POST** /v1_0/bc-authorize | bc-authorize
*DefaultApi* | [**cancelInvoice**](docs/Api/DefaultApi.md#cancelinvoice) | **DELETE** /v2_0/invoice/{referenceId} | CancelInvoice
*DefaultApi* | [**cancelPreApproval**](docs/Api/DefaultApi.md#cancelpreapproval) | **DELETE** /v1_0/preapproval/{preapprovalid} | CancelPreApproval
*DefaultApi* | [**createAccessToken**](docs/Api/DefaultApi.md#createaccesstoken) | **POST** /token/ | CreateAccessToken
*DefaultApi* | [**createInvoice**](docs/Api/DefaultApi.md#createinvoice) | **POST** /v2_0/invoice | CreateInvoice
*DefaultApi* | [**createOauth2Token**](docs/Api/DefaultApi.md#createoauth2token) | **POST** /oauth2/token/ | CreateOauth2Token
*DefaultApi* | [**createPayments**](docs/Api/DefaultApi.md#createpayments) | **POST** /v2_0/payment | CreatePayments
*DefaultApi* | [**getAccountBalance**](docs/Api/DefaultApi.md#getaccountbalance) | **GET** /v1_0/account/balance | GetAccountBalance
*DefaultApi* | [**getAccountBalanceInSpecificCurrency**](docs/Api/DefaultApi.md#getaccountbalanceinspecificcurrency) | **GET** /v1_0/account/balance/{currency} | GetAccountBalanceInSpecificCurrency
*DefaultApi* | [**getApprovedPreApprovals**](docs/Api/DefaultApi.md#getapprovedpreapprovals) | **GET** /v1_0/preapprovals/{accountHolderIdType}/{accountHolderId} | GetApprovedPreApprovals
*DefaultApi* | [**getBasicUserinfo**](docs/Api/DefaultApi.md#getbasicuserinfo) | **GET** /v1_0/accountholder/{accountHolderIdType}/{accountHolderId}/basicuserinfo | GetBasicUserinfo
*DefaultApi* | [**getInvoiceStatus**](docs/Api/DefaultApi.md#getinvoicestatus) | **GET** /v2_0/invoice/{x-referenceId} | GetInvoiceStatus
*DefaultApi* | [**getPaymentStatus**](docs/Api/DefaultApi.md#getpaymentstatus) | **GET** /v2_0/payment/{x-referenceId} | GetPaymentStatus
*DefaultApi* | [**getPreApprovalStatus**](docs/Api/DefaultApi.md#getpreapprovalstatus) | **GET** /v2_0/preapproval/{referenceId} | GetPreApprovalStatus
*DefaultApi* | [**getUserInfoWithConsent**](docs/Api/DefaultApi.md#getuserinfowithconsent) | **GET** /oauth2/v1_0/userinfo | GetUserInfoWithConsent
*DefaultApi* | [**preApproval**](docs/Api/DefaultApi.md#preapproval) | **POST** /v2_0/preapproval | PreApproval
*DefaultApi* | [**requestToWithdrawTransactionStatus**](docs/Api/DefaultApi.md#requesttowithdrawtransactionstatus) | **GET** /v1_0/requesttowithdraw/{referenceId} | RequestToWithdrawTransactionStatus
*DefaultApi* | [**requestToWithdrawV1**](docs/Api/DefaultApi.md#requesttowithdrawv1) | **POST** /v1_0/requesttowithdraw | RequestToWithdraw-V1
*DefaultApi* | [**requestToWithdrawV2**](docs/Api/DefaultApi.md#requesttowithdrawv2) | **POST** /v2_0/requesttowithdraw | RequestToWithdraw-V2
*DefaultApi* | [**requesttoPay**](docs/Api/DefaultApi.md#requesttopay) | **POST** /v1_0/requesttopay | RequesttoPay
*DefaultApi* | [**requesttoPayDeliveryNotification**](docs/Api/DefaultApi.md#requesttopaydeliverynotification) | **POST** /v1_0/requesttopay/{referenceId}/deliverynotification | RequesttoPayDeliveryNotification
*DefaultApi* | [**requesttoPayTransactionStatus**](docs/Api/DefaultApi.md#requesttopaytransactionstatus) | **GET** /v1_0/requesttopay/{referenceId} | RequesttoPayTransactionStatus
*DefaultApi* | [**validateAccountHolderStatus**](docs/Api/DefaultApi.md#validateaccountholderstatus) | **GET** /v1_0/accountholder/{accountHolderIdType}/{accountHolderId}/active | ValidateAccountHolderStatus

## Models

- [Address](docs/Model/Address.md)
- [Balance](docs/Model/Balance.md)
- [BasicUserInfoJsonResponse](docs/Model/BasicUserInfoJsonResponse.md)
- [Bcauthorize](docs/Model/Bcauthorize.md)
- [BcauthorizeResponse](docs/Model/BcauthorizeResponse.md)
- [BooleanResult](docs/Model/BooleanResult.md)
- [CancelInvoice200Response](docs/Model/CancelInvoice200Response.md)
- [CancelInvoiceRequest](docs/Model/CancelInvoiceRequest.md)
- [ConsentkycResponse](docs/Model/ConsentkycResponse.md)
- [CreateInvoice](docs/Model/CreateInvoice.md)
- [CreatePayments](docs/Model/CreatePayments.md)
- [Deliverynotification](docs/Model/Deliverynotification.md)
- [ErrorReason](docs/Model/ErrorReason.md)
- [InvoiceResult](docs/Model/InvoiceResult.md)
- [Money](docs/Model/Money.md)
- [Oauth2TokenRequest](docs/Model/Oauth2TokenRequest.md)
- [Oauth2TokenResponse](docs/Model/Oauth2TokenResponse.md)
- [Party](docs/Model/Party.md)
- [PaymentResult](docs/Model/PaymentResult.md)
- [PreApproval](docs/Model/PreApproval.md)
- [PreApprovalDetails](docs/Model/PreApprovalDetails.md)
- [PreApprovalResult](docs/Model/PreApprovalResult.md)
- [RequestToPay](docs/Model/RequestToPay.md)
- [RequestToPayResult](docs/Model/RequestToPayResult.md)
- [TokenPost200ApplicationJsonResponse](docs/Model/TokenPost200ApplicationJsonResponse.md)
- [TokenPost401ApplicationJsonResponse](docs/Model/TokenPost401ApplicationJsonResponse.md)
- [Transfer](docs/Model/Transfer.md)
- [TransferResult](docs/Model/TransferResult.md)

## Authorization

Authentication schemes defined for the API:
### apiKeyHeader

- **Type**: API key
- **API key parameter name**: Ocp-Apim-Subscription-Key
- **Location**: HTTP header


### apiKeyQuery

- **Type**: API key
- **API key parameter name**: subscription-key
- **Location**: URL query string


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
