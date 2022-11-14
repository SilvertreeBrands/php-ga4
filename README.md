# php-ga4

This Package only provides the ability to create PHP objects for the Google Analytics 4 event schema.

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

## Todo

- Unit tests
- SSGTM implementation
- Provide examples for implementation in M1 and M2
- Cater to all events categories
