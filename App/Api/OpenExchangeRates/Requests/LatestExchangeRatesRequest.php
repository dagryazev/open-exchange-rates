<?php

namespace App\Api\OpenExchangeRates\Requests;

use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;

/**
 * Запрос на получение последний курсов для базовой валюты
 */
class LatestExchangeRatesRequest extends BaseRequest
{

    /**
     * Базовая валюта
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
     * Возвращает объект запроса
     * @return Request
     */
    public function getRequest(): Request
    {
        return new Request('GET', '/latest.json?base=' . $this->base);
    }
}
