# United Kingdom vat format validator

![Code Coverage Badge](./badge.svg)

This component provides United Kingdom vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/gb-vat-format-validator
```

## Usage example

Valid United Kingdom vat number:

```php
$validator = new GBVatFormatValidator();
$validator->isValid('GB123456789');
$validator->isValid('123456789');
$validator->isValid('GB123456789012');
$validator->isValid('123456789012');
$validator->isValid('GBXX123');
$validator->isValid('XX123');
```

Returns:

```shell
true
true
true
true
true
true
```

Invalid United Kingdom vat number:

```php
$validator = new GBVatFormatValidator();
$validator->isValid('GB1234567890');
$validator->isValid('GB12345678');
$validator->isValid('DE123456789');
$validator->isValid('GB1234567890123');
$validator->isValid('GB12345678901');
$validator->isValid('DE123456789012');
$validator->isValid('GBXX1234');
$validator->isValid('GBXX12');
$validator->isValid('DEXX123');
$validator->isValid('1234567890');
$validator->isValid('12345678');
$validator->isValid('1234567890123');
$validator->isValid('12345678901');
$validator->isValid('XX1234');
$validator->isValid('XX12');
$validator->isValid('XXX123');
$validator->isValid('X123');
$validator->isValid('123');
$validator->isValid('XX123X');
$validator->isValid('');
```

```shell
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
