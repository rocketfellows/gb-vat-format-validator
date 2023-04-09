<?php

namespace rocketfellows\GBVatFormatValidator;

use rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidator;

class GBVatFormatValidator extends CountryVatFormatValidator
{
    private const VAT_NUMBER_PATTERN = '/^(GB)?(\d{9}(\d{3})?|[A-Z]{2}\d{3})$/';

    protected function isValidFormat(string $vatNumber): bool
    {
        return (bool) preg_match(self::VAT_NUMBER_PATTERN, $vatNumber);
    }
}
