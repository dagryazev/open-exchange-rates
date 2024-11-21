<?php

namespace Tests\Unit\Api\useApp\Api\OpenExchangeRates;

use App\Api\OpenExchangeRates\OpenExchangeRatesApi;
use App\Api\OpenExchangeRates\Requests\LatestExchangeRatesRequest;
use Tests\TestCase;

class OpenExchangeRatesApiTest extends TestCase
{
    public function testRequest() {
        $api = new OpenExchangeRatesApi();
        $request = new LatestExchangeRatesRequest('USD');

        $this->assertIsArray($api->request($request));
    }
}
