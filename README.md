# php-ga4

This package provides concrete classes that implement the Google Analytics 4 event schema. It allows you to create 
objects representing specific GA4 events and their parameters, which can then be transformed into a JSON string and 
pushed into the GTM datalayer. Each event paramenter is strictly typed and adheres to the GA4 event schema.

This package does not implement the GTM datalayer push. It only creates the JSON string that can be pushed into the 
datalayer.

## Installation

This package has not been added to packagist yet. You can install this package by adding the repository to your 
`composer.json`:
```json
...
    "repositories": {
      "php-ga4": {
        "type": "vcs",
        "url": "https://github.com/SilvertreeBrands/php-ga4.git",
        "only": [
          "silvertree/php-ga4"
        ]
      }
    }
...
```

Then run:
```php
composer require silvertree/php-ga4
```

## Usage

### Creating an event object

```php
// Initialize the event object
$event = new \Silvertree\Ga4\Event\Purchase();

$event
    ->setTransactionId('T_12345')
    ->setValue(25.42)
    ->setTax(4.90)
    ->setShipping(5.99)
    ->setCurrency('USD')
    ->setCoupon('SUMMER_SALE')
;

// Initialize the item object
$item = new \Silvertree\Ga4\Item();

$item
    ->setItemId('SKU_12345')
    ->setItemName('Stan and Friends Tee')
    ->setAffiliation('Google Merchandise Store')
    ->setCoupon('SUMMER_FUN')
    ->setDiscount(2.22)
    ->setIndex(0)
    ->setItemBrand('Google')
    ->setItemCategoryOne('Apparel')
    ->setItemCategoryTwo('Adult')
    ->setItemCategoryThree('Shirts')
    ->setItemCategoryFour('Crew')
    ->setItemCategoryFive('Short sleeve')
    ->setItemListId('related_products')
    ->setItemListName('Related Products')
    ->setItemVariant('green')
    ->setLocationId('ChIJIQBpAG2ahYAR_6128GcTUEo')
    ->setPrice(9.99)
    ->setQuantity(1)
    ->setCurrency('USD')
;

// Add the item to the event
$event->addItem($item);

// Initialize the second item object
$item = new \Silvertree\Ga4\ItemPromotion();

$item
    ->setItemId('SKU_12346')
    ->setItemName('Google Grey Women\'s Tee')
    ->setAffiliation('Google Merchandise Store')
    ->setCoupon('SUMMER_FUN')
    ->setDiscount(3.33)
    ->setIndex(1)
    ->setItemBrand('Google')
    ->setItemCategoryOne('Apparel')
    ->setItemCategoryTwo('Adult')
    ->setItemCategoryThree('Shirts')
    ->setItemCategoryFour('Crew')
    ->setItemCategoryFive('Short sleeve')
    ->setItemListId('related_products')
    ->setItemListName('Related Products')
    ->setItemVariant('gray')
    ->setLocationId('ChIJIQBpAG2ahYAR_6128GcTUEo')
    ->setPrice(20.99)
    ->setPromotionId('P_12345')
    ->setPromotionName('Summer Sale')
    ->setQuantity(1)
    ->setCurrency('USD')
;

// Add the second item to the event
$event->addItem($item);
```

### Converting the event object to a JSON string

When converting to a JSON string, all empty or null values will be removed from the JSON string. This is recommended by 
Google. To convert the event object to a JSON string, call the `toJson()` method on the event object:

```php
$event = new \Silvertree\Ga4\Event\Login();
$event->setMethod('Google');

$json = $event->toJson();
```

Output:
```json
{
  "event": "login",
  "customParams": [],
  "method": "Google"
}
```

### Converting the event object to an array

Similar to converting to a JSON string, all empty or null values will be removed from the array. To convert the event 
object to an array, call the `toArray()` method on the event object:

```php
$event = new \Silvertree\Ga4\Event\Login();
$event->setMethod('Google');

$array = $event->toArray();
```

Output:
```php
Array
(
    [event] => login
    [customParams] => Array
        (
        )

    [method] => Google
)
```

### Adding custom parameters to an event

Custom parameters are added outside of Google's "reserved" event schema. This makes it easier to identify custom 
parameters that are added to an event and helps preserve the integrity of the event schema.

To add custom parameters to an event, call the `addCustomParam()` method on the event object:

```php
$event = new \Silvertree\Ga4\Event\Login();
$event->setMethod('Google');
$event->addCustomParam('user_id', '123');
$event->addCustomParam('user_group', 'general');

$json = $event->toJson();
```

Output:
```json
{
  "event": "login",
  "customParams": {
    "user_id": "123",
    "user_group": "general"
  },
  "method": "Google"
}
```

## Adding global custom parameters

Custom parameters can also be added to the event schema that is not attached to a specific event. This is useful when 
you want to introduce global parameters:

```php
$params = new \Silvertree\Ga4\CustomParams();

$params
    ->addParam('user_id', '321')
    ->addParam('user_group', 'general')
    ->addParam('route', 'cms/page/view')
;

$json = $params->toJson();
```

Output:
```json
{
  "user_id": "321",
  "user_group": "general",
  "route": "cms/page/view"
}
```

## Customizing the event schema

```php
// INITIALIZE AND HYDRATE THE EVENT OBJECT
$event = new \Silvertree\Ga4\Event\Login();
$event->setMethod('Google');

// ADD A CUSTOM PARAMETER
$event->addCustomParam('login_position', 'modal');

// SET THE EVENT NAME PREFIX
$event->setEventNamePrefix('ga4_');

// SET THE EVENT NAME KEY
$event->setEventNameKey('eventName');

// SET THE EVENT PARAMS KEY
$event->setEventParamsKey('eventParams');

$json = $event->toJson();
```

Output:
```json
{
  "eventName": "ga4_login",
  "customParams": {
    "login_position": "modal"
  },
  "eventParams": {
    "method": "Google"
  }
}
```

## Todo

- Unit tests
- SSGTM implementation
