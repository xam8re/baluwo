# Swagger\Client\GiftCardApi

All URIs are relative to *https://app.baluwo.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listGiftCardSectors**](GiftCardApi.md#listGiftCardSectors) | **GET** /v1/external/giftcard/sector | 
[**listGiftCards**](GiftCardApi.md#listGiftCards) | **GET** /v1/external/giftcard/{sectorId} | 


# **listGiftCardSectors**
> \Swagger\Client\Model\GiftCardSectorDto[] listGiftCardSectors($lang)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\GiftCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lang = "lang_example"; // string | 

try {
    $result = $apiInstance->listGiftCardSectors($lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardApi->listGiftCardSectors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lang** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\GiftCardSectorDto[]**](../Model/GiftCardSectorDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listGiftCards**
> \Swagger\Client\Model\GiftCardConfigDto[] listGiftCards($sector_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\GiftCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sector_id = 789; // int | 

try {
    $result = $apiInstance->listGiftCards($sector_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardApi->listGiftCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sector_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\GiftCardConfigDto[]**](../Model/GiftCardConfigDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

