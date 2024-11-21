<?php

namespace Tests\Unit\Api\useApp\Api\OpenExchangeRates\DTO;

use App\Api\OpenExchangeRates\DTO\LatestExchangeRatesDTO;
use Tests\TestCase;

final class LatestExchangeRatesDTOTest extends TestCase
{
    public function testGetDisclaimer() {
        $dto = new LatestExchangeRatesDTO([
            'disclaimer' => 'disclaimer',
            'license' => 'license',
            'timestamp' => time(),
            'base' => 'USD',
            'rates' => ['RUB' => 100]
        ]);

        $this->assertEquals('disclaimer', $dto->getDisclaimer());
    }

    public function testGetLicense() {
        $dto = new LatestExchangeRatesDTO([
            'disclaimer' => 'disclaimer',
            'license' => 'license',
            'timestamp' => time(),
            'base' => 'USD',
            'rates' => ['RUB' => 100]
        ]);

        $this->assertEquals('license', $dto->getLicense());
    }

    public function testGetTimestamp() {
        $time = time();
        $dto = new LatestExchangeRatesDTO([
            'disclaimer' => 'disclaimer',
            'license' => 'license',
            'timestamp' => $time,
            'base' => 'USD',
            'rates' => ['RUB' => 100]
        ]);

        $this->assertEquals($time, $dto->getTimestamp());
    }

    public function testGetBase() {
        $time = time();
        $dto = new LatestExchangeRatesDTO([
            'disclaimer' => 'disclaimer',
            'license' => 'license',
            'timestamp' => $time,
            'base' => 'USD',
            'rates' => ['RUB' => 100]
        ]);

        $this->assertEquals('USD', $dto->getBase());
    }

    public function testGetRates() {
        $time = time();
        $dto = new LatestExchangeRatesDTO([
            'disclaimer' => 'disclaimer',
            'license' => 'license',
            'timestamp' => $time,
            'base' => 'USD',
            'rates' => ['RUB' => 100]
        ]);

        $this->assertEquals(['RUB' => 100], $dto->getRates());
    }
}
