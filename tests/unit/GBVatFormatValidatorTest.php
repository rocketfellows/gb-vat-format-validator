<?php

namespace rocketfellows\GBVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;

class GBVatFormatValidatorTest extends TestCase
{
    /**
     * @var GBVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new GBVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'GB000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'GB111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'GB999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'GB123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => '000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'GB000000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'GB111111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'GB999999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'GB123456789012',
                'isValid' => true,
            ],
            [
                'vatNumber' => '000000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '111111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '999999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '123456789012',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'GBXX000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'GBXX111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'GBXX999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'GBXX123',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'XX000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'XX111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'XX999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'XX123',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'GB1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'GB12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'Gb123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'gB123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'gb123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'GB1234567890123',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'GB12345678901',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE123456789012',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'Gb123456789012',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'gB123456789012',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'gb123456789012',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'GBXX1234',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'GBXX12',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DEXX123',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'GbXX123',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'gBXX123',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'gbXX123',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567890123',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678901',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'XX1234',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'XX12',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'XXX123',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'X123',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'XX123X',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
