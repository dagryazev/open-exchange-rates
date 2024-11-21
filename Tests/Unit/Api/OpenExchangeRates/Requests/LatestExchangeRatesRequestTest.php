<?php

namespace Tests\Unit\Api\useApp\Api\OpenExchangeRates\Requests;

use App\Api\OpenExchangeRates\Requests\LatestExchangeRatesRequest;
use Psr\Http\Message\RequestInterface;
use Tests\TestCase;

class LatestExchangeRatesRequestTest extends TestCase
{
    public function testCreate() {
        $request = new LatestExchangeRatesRequest('USD');

        $this->assertInstanceOf(LatestExchangeRatesRequest::class, $request);
    }

    public function testGetRequest() {
        $request = new LatestExchangeRatesRequest('USD');

        $this->assertInstanceOf(RequestInterface::class, $request->getRequestInterface());
    }
}
