# Swagger\Client\CouponApi

All URIs are relative to *https://app.baluwo.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkPin1**](CouponApi.md#checkPin1) | **POST** /v1/external/coupon/check | 
[**checkPinForTransaction**](CouponApi.md#checkPinForTransaction) | **POST** /v1/external/coupon/check/{transactionId} | 
[**generateCouponForBeneficiary**](CouponApi.md#generateCouponForBeneficiary) | **GET** /v1/external/coupon/beneficiary/{beneficiary} | 
[**getCouponByTransaction**](CouponApi.md#getCouponByTransaction) | **GET** /v1/external/coupon/transaction/{transactionId} | 


# **checkPin1**
> \Swagger\Client\Model\CouponDto checkPin1($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BaluwoPinDto(); // \Swagger\Client\Model\BaluwoPinDto | 

try {
    $result = $apiInstance->checkPin1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->checkPin1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BaluwoPinDto**](../Model/BaluwoPinDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CouponDto**](../Model/CouponDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkPinForTransaction**
> \Swagger\Client\Model\CouponDto checkPinForTransaction($transaction_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 789; // int | 
$body = new \Swagger\Client\Model\BaluwoPinDto(); // \Swagger\Client\Model\BaluwoPinDto | 

try {
    $result = $apiInstance->checkPinForTransaction($transaction_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->checkPinForTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\BaluwoPinDto**](../Model/BaluwoPinDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CouponDto**](../Model/CouponDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateCouponForBeneficiary**
> \Swagger\Client\Model\CouponDto[] generateCouponForBeneficiary($beneficiary)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$beneficiary = "beneficiary_example"; // string | 

try {
    $result = $apiInstance->generateCouponForBeneficiary($beneficiary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->generateCouponForBeneficiary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **beneficiary** | **string**|  |

### Return type

[**\Swagger\Client\Model\CouponDto[]**](../Model/CouponDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponByTransaction**
> \Swagger\Client\Model\CouponDto[] getCouponByTransaction($transaction_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 789; // int | 

try {
    $result = $apiInstance->getCouponByTransaction($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCouponByTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\CouponDto[]**](../Model/CouponDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

