# Swagger\Client\AirdataApi

All URIs are relative to *https://app.baluwo.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFixedAmounts**](AirdataApi.md#getFixedAmounts) | **GET** /v1/external/airdata/fixed/{mobile} | 


# **getFixedAmounts**
> \Swagger\Client\Model\ExternalFixedAmount[] getFixedAmounts($mobile)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AirdataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mobile = "mobile_example"; // string | 

try {
    $result = $apiInstance->getFixedAmounts($mobile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirdataApi->getFixedAmounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mobile** | **string**|  |

### Return type

[**\Swagger\Client\Model\ExternalFixedAmount[]**](../Model/ExternalFixedAmount.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

