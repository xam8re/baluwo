# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/xam8re/baluwo.git"
    }
  ],
  "require": {
    "xam8re/baluwo": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://app.baluwo.com/rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AirdataApi* | [**getFixedAmounts**](docs/Api/AirdataApi.md#getfixedamounts) | **GET** /v1/external/airdata/fixed/{mobile} | 
*AirtimeApi* | [**getFixedAmounts1**](docs/Api/AirtimeApi.md#getfixedamounts1) | **GET** /v1/external/airtime/fixed/{mobile} | 
*BaluwocashApi* | [**checkPin**](docs/Api/BaluwocashApi.md#checkpin) | **POST** /v1/external/baluwocash/check | 
*BaluwocashApi* | [**createPin**](docs/Api/BaluwocashApi.md#createpin) | **POST** /v1/external/baluwocash | 
*BaluwocashApi* | [**generatePins**](docs/Api/BaluwocashApi.md#generatepins) | **POST** /v1/external/baluwocash/bulk | 
*BaluwocashApi* | [**reedemPin**](docs/Api/BaluwocashApi.md#reedempin) | **POST** /v1/external/baluwocash/redeem | 
*BillTypeApi* | [**getBillTypes**](docs/Api/BillTypeApi.md#getbilltypes) | **GET** /v1/external/billtype/{country}/{sector} | 
*BundleApi* | [**getFixedAmounts2**](docs/Api/BundleApi.md#getfixedamounts2) | **GET** /v1/external/bundle/fixed/{mobile} | 
*CashpowerApi* | [**checkMeter**](docs/Api/CashpowerApi.md#checkmeter) | **GET** /v1/external/cashpower/check/{country}/{meterId} | 
*CountryApi* | [**getCountries**](docs/Api/CountryApi.md#getcountries) | **GET** /v1/external/country | 
*CouponApi* | [**checkPin1**](docs/Api/CouponApi.md#checkpin1) | **POST** /v1/external/coupon/check | 
*CouponApi* | [**checkPinForTransaction**](docs/Api/CouponApi.md#checkpinfortransaction) | **POST** /v1/external/coupon/check/{transactionId} | 
*CouponApi* | [**generateCouponForBeneficiary**](docs/Api/CouponApi.md#generatecouponforbeneficiary) | **GET** /v1/external/coupon/beneficiary/{beneficiary} | 
*CouponApi* | [**getCouponByTransaction**](docs/Api/CouponApi.md#getcouponbytransaction) | **GET** /v1/external/coupon/transaction/{transactionId} | 
*GiftCardApi* | [**listGiftCardSectors**](docs/Api/GiftCardApi.md#listgiftcardsectors) | **GET** /v1/external/giftcard/sector | 
*GiftCardApi* | [**listGiftCards**](docs/Api/GiftCardApi.md#listgiftcards) | **GET** /v1/external/giftcard/{sectorId} | 
*InternationalApi* | [**getPrice**](docs/Api/InternationalApi.md#getprice) | **POST** /v1/external/international/price | 
*InternationalApi* | [**getProducts**](docs/Api/InternationalApi.md#getproducts) | **GET** /v1/external/international/product/{provider} | 
*InternationalApi* | [**getPromotions**](docs/Api/InternationalApi.md#getpromotions) | **GET** /v1/external/international/promotion/{provider} | 
*InternationalApi* | [**getProviders**](docs/Api/InternationalApi.md#getproviders) | **GET** /v1/external/international/provider/{mobile} | 
*InternationalApi* | [**saveRequest**](docs/Api/InternationalApi.md#saverequest) | **POST** /v1/external/international | 
*LocationApi* | [**getLocations**](docs/Api/LocationApi.md#getlocations) | **GET** /v1/external/location/{country}/{sector} | 
*ManagerApi* | [**getAgentBalance**](docs/Api/ManagerApi.md#getagentbalance) | **POST** /v1/external/manager/agent/balance | 
*ManagerApi* | [**getAgentLogin**](docs/Api/ManagerApi.md#getagentlogin) | **POST** /v1/external/manager/agent/login | 
*ManagerApi* | [**getAgents**](docs/Api/ManagerApi.md#getagents) | **GET** /v1/external/manager/agent | 
*ManagerApi* | [**newAgent**](docs/Api/ManagerApi.md#newagent) | **POST** /v1/external/manager/agent | 
*ManagerApi* | [**rechargeVodafone**](docs/Api/ManagerApi.md#rechargevodafone) | **POST** /v1/external/manager/topup/vodafone | 
*SectorApi* | [**getSectors**](docs/Api/SectorApi.md#getsectors) | **GET** /v1/external/sector/{country} | 
*StoreApi* | [**getStore**](docs/Api/StoreApi.md#getstore) | **GET** /v1/external/store/{id} | 
*StoreApi* | [**getStores**](docs/Api/StoreApi.md#getstores) | **GET** /v1/external/store/{location}/{sector} | 
*TransactionApi* | [**calculateOrder**](docs/Api/TransactionApi.md#calculateorder) | **POST** /v1/external/transaction/calculate | 
*TransactionApi* | [**createTransaction**](docs/Api/TransactionApi.md#createtransaction) | **POST** /v1/external/transaction | 
*TransactionApi* | [**getConditions**](docs/Api/TransactionApi.md#getconditions) | **GET** /v1/external/transaction/conditions | 
*TransactionApi* | [**getPromoTransactionNoBuyer**](docs/Api/TransactionApi.md#getpromotransactionnobuyer) | **GET** /v1/external/transaction/promotion/{transactionId} | 
*TransactionApi* | [**getTransaction**](docs/Api/TransactionApi.md#gettransaction) | **GET** /v1/external/transaction/{transactionId} | 
*TransactionApi* | [**getTransactions**](docs/Api/TransactionApi.md#gettransactions) | **GET** /v1/external/transaction | 
*TransactionApi* | [**getTransactionsForBuyer**](docs/Api/TransactionApi.md#gettransactionsforbuyer) | **GET** /v1/external/transaction/buyer/{buyerMobile} | 
*TransactionApi* | [**payTransaction**](docs/Api/TransactionApi.md#paytransaction) | **POST** /v1/external/transaction/pay/{transactionId} | 
*UserApi* | [**getBalance**](docs/Api/UserApi.md#getbalance) | **GET** /v1/external/user/balance | 
*UserApi* | [**getCyberpackreceipt**](docs/Api/UserApi.md#getcyberpackreceipt) | **GET** /v1/external/user/cyberpack/receipt | 
*UserApi* | [**getHistoricBalance**](docs/Api/UserApi.md#gethistoricbalance) | **GET** /v1/external/user/balance/historic | 
*UserApi* | [**prepayment**](docs/Api/UserApi.md#prepayment) | **GET** /v1/external/user/paymentinfo/{paymentType}/{total} | 
*UserApi* | [**registerUser**](docs/Api/UserApi.md#registeruser) | **POST** /v1/external/user/register | 
*UserApi* | [**updatePassword**](docs/Api/UserApi.md#updatepassword) | **POST** /v1/external/user/password | 


## Documentation For Models

 - [AgentBalanceHistoryDto](docs/Model/AgentBalanceHistoryDto.md)
 - [AgentLoginData](docs/Model/AgentLoginData.md)
 - [AgentManagerStatistics](docs/Model/AgentManagerStatistics.md)
 - [AgentSingUp4Manager](docs/Model/AgentSingUp4Manager.md)
 - [AgentWalletDto](docs/Model/AgentWalletDto.md)
 - [AirDataOrderDto](docs/Model/AirDataOrderDto.md)
 - [AirDataOrderInfoDto](docs/Model/AirDataOrderInfoDto.md)
 - [AirTimeOrderDto](docs/Model/AirTimeOrderDto.md)
 - [AirTimeOrderInfoDto](docs/Model/AirTimeOrderInfoDto.md)
 - [BalanceDto](docs/Model/BalanceDto.md)
 - [BaluwoCashBulkGenerationDto](docs/Model/BaluwoCashBulkGenerationDto.md)
 - [BaluwoCashGenerationDto](docs/Model/BaluwoCashGenerationDto.md)
 - [BaluwoCashInfoDto](docs/Model/BaluwoCashInfoDto.md)
 - [BaluwoPinDto](docs/Model/BaluwoPinDto.md)
 - [BaseUserDto](docs/Model/BaseUserDto.md)
 - [BillOrderDataDto](docs/Model/BillOrderDataDto.md)
 - [BillOrderDto](docs/Model/BillOrderDto.md)
 - [BillTypeDto](docs/Model/BillTypeDto.md)
 - [BundleOrderDto](docs/Model/BundleOrderDto.md)
 - [BundleOrderInfoDto](docs/Model/BundleOrderInfoDto.md)
 - [CashPowerMeterIdCheckDto](docs/Model/CashPowerMeterIdCheckDto.md)
 - [CashPowerOrderDto](docs/Model/CashPowerOrderDto.md)
 - [CashPowerOrderInfoDto](docs/Model/CashPowerOrderInfoDto.md)
 - [CatalogDto](docs/Model/CatalogDto.md)
 - [CountryDto](docs/Model/CountryDto.md)
 - [CouponDto](docs/Model/CouponDto.md)
 - [CurrencyDto](docs/Model/CurrencyDto.md)
 - [DigitalOrderDto](docs/Model/DigitalOrderDto.md)
 - [ExternalFixedAmount](docs/Model/ExternalFixedAmount.md)
 - [ExternalNewUserDto](docs/Model/ExternalNewUserDto.md)
 - [ExternalOrderDataDto](docs/Model/ExternalOrderDataDto.md)
 - [ExternalOrderPriceDto](docs/Model/ExternalOrderPriceDto.md)
 - [ExternalOrderProviderDto](docs/Model/ExternalOrderProviderDto.md)
 - [ExternalProductDto](docs/Model/ExternalProductDto.md)
 - [ExternalPromotionDescriptionDto](docs/Model/ExternalPromotionDescriptionDto.md)
 - [ExternalTransactionDto](docs/Model/ExternalTransactionDto.md)
 - [ExternalTransactionInfoDto](docs/Model/ExternalTransactionInfoDto.md)
 - [ExternalUserRechargeDto](docs/Model/ExternalUserRechargeDto.md)
 - [ExternalVodafoneOrderDto](docs/Model/ExternalVodafoneOrderDto.md)
 - [GiftCardConfigDto](docs/Model/GiftCardConfigDto.md)
 - [GiftCardOrderDto](docs/Model/GiftCardOrderDto.md)
 - [GiftCardOrderInfoDto](docs/Model/GiftCardOrderInfoDto.md)
 - [GiftCardSectorDto](docs/Model/GiftCardSectorDto.md)
 - [InternationalRechargeOrderDto](docs/Model/InternationalRechargeOrderDto.md)
 - [LocationDto](docs/Model/LocationDto.md)
 - [LongIdDto](docs/Model/LongIdDto.md)
 - [MobileDto](docs/Model/MobileDto.md)
 - [NationalRechargeOrderDto](docs/Model/NationalRechargeOrderDto.md)
 - [NationalRechargeOrderInfoDto](docs/Model/NationalRechargeOrderInfoDto.md)
 - [OrderDto](docs/Model/OrderDto.md)
 - [OrderRestrictions](docs/Model/OrderRestrictions.md)
 - [PasswordChange](docs/Model/PasswordChange.md)
 - [PriceDto](docs/Model/PriceDto.md)
 - [ProductDto](docs/Model/ProductDto.md)
 - [SectorDto](docs/Model/SectorDto.md)
 - [StoreDto](docs/Model/StoreDto.md)
 - [StoreInfoDto](docs/Model/StoreInfoDto.md)
 - [StoreOrderDto](docs/Model/StoreOrderDto.md)
 - [StoreOrderInfoDto](docs/Model/StoreOrderInfoDto.md)
 - [StoreOrderLineDto](docs/Model/StoreOrderLineDto.md)
 - [StoreRestrictions](docs/Model/StoreRestrictions.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication


## Author




