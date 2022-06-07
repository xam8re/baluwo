# Swagger\Client\BaluwocashApi

All URIs are relative to *https://app.baluwo.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkPin**](BaluwocashApi.md#checkPin) | **POST** /v1/external/baluwocash/check | 
[**createPin**](BaluwocashApi.md#createPin) | **POST** /v1/external/baluwocash | 
[**generatePins**](BaluwocashApi.md#generatePins) | **POST** /v1/external/baluwocash/bulk | 
[**reedemPin**](BaluwocashApi.md#reedemPin) | **POST** /v1/external/baluwocash/redeem | 


# **checkPin**
> \Swagger\Client\Model\BaluwoCashInfoDto checkPin($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BaluwocashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BaluwoPinDto(); // \Swagger\Client\Model\BaluwoPinDto | 

try {
    $result = $apiInstance->checkPin($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BaluwocashApi->checkPin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BaluwoPinDto**](../Model/BaluwoPinDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BaluwoCashInfoDto**](../Model/BaluwoCashInfoDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPin**
> \Swagger\Client\Model\BaluwoPinDto createPin($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BaluwocashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BaluwoCashGenerationDto(); // \Swagger\Client\Model\BaluwoCashGenerationDto | 

try {
    $result = $apiInstance->createPin($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BaluwocashApi->createPin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BaluwoCashGenerationDto**](../Model/BaluwoCashGenerationDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BaluwoPinDto**](../Model/BaluwoPinDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generatePins**
> \Swagger\Client\Model\BaluwoCashInfoDto[] generatePins($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BaluwocashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BaluwoCashBulkGenerationDto(); // \Swagger\Client\Model\BaluwoCashBulkGenerationDto | 

try {
    $result = $apiInstance->generatePins($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BaluwocashApi->generatePins: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BaluwoCashBulkGenerationDto**](../Model/BaluwoCashBulkGenerationDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BaluwoCashInfoDto[]**](../Model/BaluwoCashInfoDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reedemPin**
> reedemPin($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BaluwocashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BaluwoPinDto(); // \Swagger\Client\Model\BaluwoPinDto | 

try {
    $apiInstance->reedemPin($body);
} catch (Exception $e) {
    echo 'Exception when calling BaluwocashApi->reedemPin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BaluwoPinDto**](../Model/BaluwoPinDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

