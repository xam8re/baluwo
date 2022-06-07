# Swagger\Client\TransactionApi

All URIs are relative to *https://app.baluwo.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**calculateOrder**](TransactionApi.md#calculateOrder) | **POST** /v1/external/transaction/calculate | 
[**createTransaction**](TransactionApi.md#createTransaction) | **POST** /v1/external/transaction | 
[**getConditions**](TransactionApi.md#getConditions) | **GET** /v1/external/transaction/conditions | 
[**getPromoTransactionNoBuyer**](TransactionApi.md#getPromoTransactionNoBuyer) | **GET** /v1/external/transaction/promotion/{transactionId} | 
[**getTransaction**](TransactionApi.md#getTransaction) | **GET** /v1/external/transaction/{transactionId} | 
[**getTransactions**](TransactionApi.md#getTransactions) | **GET** /v1/external/transaction | 
[**getTransactionsForBuyer**](TransactionApi.md#getTransactionsForBuyer) | **GET** /v1/external/transaction/buyer/{buyerMobile} | 
[**payTransaction**](TransactionApi.md#payTransaction) | **POST** /v1/external/transaction/pay/{transactionId} | 


# **calculateOrder**
> \Swagger\Client\Model\OrderDto calculateOrder($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrderDto(); // \Swagger\Client\Model\OrderDto | 

try {
    $result = $apiInstance->calculateOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->calculateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderDto**](../Model/OrderDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\OrderDto**](../Model/OrderDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTransaction**
> \Swagger\Client\Model\ExternalTransactionInfoDto createTransaction($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ExternalTransactionDto(); // \Swagger\Client\Model\ExternalTransactionDto | 

try {
    $result = $apiInstance->createTransaction($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ExternalTransactionDto**](../Model/ExternalTransactionDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ExternalTransactionInfoDto**](../Model/ExternalTransactionInfoDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConditions**
> \Swagger\Client\Model\OrderRestrictions getConditions()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConditions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->getConditions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\OrderRestrictions**](../Model/OrderRestrictions.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromoTransactionNoBuyer**
> \Swagger\Client\Model\ExternalTransactionInfoDto getPromoTransactionNoBuyer($transaction_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 789; // int | 

try {
    $result = $apiInstance->getPromoTransactionNoBuyer($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->getPromoTransactionNoBuyer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ExternalTransactionInfoDto**](../Model/ExternalTransactionInfoDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransaction**
> \Swagger\Client\Model\ExternalTransactionInfoDto getTransaction($transaction_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 789; // int | 

try {
    $result = $apiInstance->getTransaction($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->getTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ExternalTransactionInfoDto**](../Model/ExternalTransactionInfoDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactions**
> \Swagger\Client\Model\ExternalTransactionInfoDto[] getTransactions($from, $to, $state)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$state = 56; // int | 

try {
    $result = $apiInstance->getTransactions($from, $to, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->getTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **state** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ExternalTransactionInfoDto[]**](../Model/ExternalTransactionInfoDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionsForBuyer**
> \Swagger\Client\Model\ExternalTransactionInfoDto[] getTransactionsForBuyer($buyer_mobile, $from, $to, $state)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buyer_mobile = "buyer_mobile_example"; // string | 
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$state = 56; // int | 

try {
    $result = $apiInstance->getTransactionsForBuyer($buyer_mobile, $from, $to, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->getTransactionsForBuyer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyer_mobile** | **string**|  |
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **state** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ExternalTransactionInfoDto[]**](../Model/ExternalTransactionInfoDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payTransaction**
> payTransaction($transaction_id, $coupon)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 789; // int | 
$coupon = "coupon_example"; // string | 

try {
    $apiInstance->payTransaction($transaction_id, $coupon);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->payTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **int**|  |
 **coupon** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

