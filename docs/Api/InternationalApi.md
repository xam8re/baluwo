# Swagger\Client\InternationalApi

All URIs are relative to *https://app.baluwo.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPrice**](InternationalApi.md#getPrice) | **POST** /v1/external/international/price | 
[**getProducts**](InternationalApi.md#getProducts) | **GET** /v1/external/international/product/{provider} | 
[**getPromotions**](InternationalApi.md#getPromotions) | **GET** /v1/external/international/promotion/{provider} | 
[**getProviders**](InternationalApi.md#getProviders) | **GET** /v1/external/international/provider/{mobile} | 
[**saveRequest**](InternationalApi.md#saveRequest) | **POST** /v1/external/international | 


# **getPrice**
> \Swagger\Client\Model\ExternalOrderPriceDto getPrice($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InternationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ExternalOrderDataDto(); // \Swagger\Client\Model\ExternalOrderDataDto | 

try {
    $result = $apiInstance->getPrice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalApi->getPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ExternalOrderDataDto**](../Model/ExternalOrderDataDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ExternalOrderPriceDto**](../Model/ExternalOrderPriceDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProducts**
> \Swagger\Client\Model\ExternalProductDto[] getProducts($provider)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InternationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider = "provider_example"; // string | 

try {
    $result = $apiInstance->getProducts($provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider** | **string**|  |

### Return type

[**\Swagger\Client\Model\ExternalProductDto[]**](../Model/ExternalProductDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromotions**
> \Swagger\Client\Model\ExternalPromotionDescriptionDto[] getPromotions($provider)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InternationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider = "provider_example"; // string | 

try {
    $result = $apiInstance->getPromotions($provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalApi->getPromotions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider** | **string**|  |

### Return type

[**\Swagger\Client\Model\ExternalPromotionDescriptionDto[]**](../Model/ExternalPromotionDescriptionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProviders**
> \Swagger\Client\Model\ExternalOrderProviderDto[] getProviders($mobile)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InternationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mobile = "mobile_example"; // string | 

try {
    $result = $apiInstance->getProviders($mobile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalApi->getProviders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mobile** | **string**|  |

### Return type

[**\Swagger\Client\Model\ExternalOrderProviderDto[]**](../Model/ExternalOrderProviderDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveRequest**
> \Swagger\Client\Model\ExternalTransactionInfoDto saveRequest($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InternationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ExternalUserRechargeDto(); // \Swagger\Client\Model\ExternalUserRechargeDto | 

try {
    $result = $apiInstance->saveRequest($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalApi->saveRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ExternalUserRechargeDto**](../Model/ExternalUserRechargeDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ExternalTransactionInfoDto**](../Model/ExternalTransactionInfoDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

