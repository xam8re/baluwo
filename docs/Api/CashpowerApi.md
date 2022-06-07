# Swagger\Client\CashpowerApi

All URIs are relative to *https://app.baluwo.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkMeter**](CashpowerApi.md#checkMeter) | **GET** /v1/external/cashpower/check/{country}/{meterId} | 


# **checkMeter**
> \Swagger\Client\Model\CashPowerMeterIdCheckDto checkMeter($country, $meter_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CashpowerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = "country_example"; // string | 
$meter_id = "meter_id_example"; // string | 

try {
    $result = $apiInstance->checkMeter($country, $meter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashpowerApi->checkMeter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**|  |
 **meter_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CashPowerMeterIdCheckDto**](../Model/CashPowerMeterIdCheckDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

