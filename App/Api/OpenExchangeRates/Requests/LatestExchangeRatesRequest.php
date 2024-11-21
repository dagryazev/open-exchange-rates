<?php

namespace App\Api\OpenExchangeRates\Requests;

use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;

class LatestExchangeRatesRequest extends BaseRequest
{

    /**
     * @var string
     */
    protected string $base;

    /**
     * @param string $base
     */
    public function __construct(string $base)
    {
        $this->base = $base;
    }

    /**
     * @return RequestInterface
     */
    public function getRequest(): Request
    {
        return new Request('GET', '/latest.json?base=' . $this->base);
    }
}
