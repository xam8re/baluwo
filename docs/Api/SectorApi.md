# Swagger\Client\SectorApi

All URIs are relative to *https://app.baluwo.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSectors**](SectorApi.md#getSectors) | **GET** /v1/external/sector/{country} | 


# **getSectors**
> \Swagger\Client\Model\SectorDto[] getSectors($country)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = "country_example"; // string | 

try {
    $result = $apiInstance->getSectors($country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectorApi->getSectors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**|  |

### Return type

[**\Swagger\Client\Model\SectorDto[]**](../Model/SectorDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

