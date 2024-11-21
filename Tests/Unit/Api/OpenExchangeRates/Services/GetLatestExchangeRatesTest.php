<?php

namespace Tests\Unit\Api\useApp\Api\OpenExchangeRates\Services;

use App\Api\OpenExchangeRates\DTO\LatestExchangeRatesDTO;
use App\Api\OpenExchangeRates\Services\GetLatestExchangeRates;
use Tests\TestCase;

class GetLatestExchangeRatesTest extends TestCase
{
    public function testHandle() {
        $service = new GetLatestExchangeRates();

        $this->assertInstanceOf(LatestExchangeRatesDTO::class, $service->handle());
    }
}
