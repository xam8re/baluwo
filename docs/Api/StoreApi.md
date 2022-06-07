# Swagger\Client\StoreApi

All URIs are relative to *https://app.baluwo.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStore**](StoreApi.md#getStore) | **GET** /v1/external/store/{id} | 
[**getStores**](StoreApi.md#getStores) | **GET** /v1/external/store/{location}/{sector} | 


# **getStore**
> \Swagger\Client\Model\StoreDto getStore($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\StoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | 

try {
    $result = $apiInstance->getStore($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->getStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\StoreDto**](../Model/StoreDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStores**
> \Swagger\Client\Model\StoreDto[] getStores($location, $sector)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\StoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location = 56; // int | 
$sector = 56; // int | 

try {
    $result = $apiInstance->getStores($location, $sector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->getStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location** | **int**|  |
 **sector** | **int**|  |

### Return type

[**\Swagger\Client\Model\StoreDto[]**](../Model/StoreDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

