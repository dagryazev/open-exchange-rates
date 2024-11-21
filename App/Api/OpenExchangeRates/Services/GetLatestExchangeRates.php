<?php

namespace App\Api\OpenExchangeRates\Services;

use App\Api\OpenExchangeRates\DTO\LatestExchangeRatesDTO;
use App\Api\OpenExchangeRates\Exceptions\AccessRestrictedException;
use App\Api\OpenExchangeRates\Exceptions\InvalidAppIdException;
use App\Api\OpenExchangeRates\Exceptions\InvalidBaseException;
use App\Api\OpenExchangeRates\Exceptions\MissingAppIdException;
use App\Api\OpenExchangeRates\Exceptions\NotAllowedException;
use App\Api\OpenExchangeRates\Exceptions\NotFoundException;
use App\Api\OpenExchangeRates\Exceptions\UnknownException;
use App\Api\OpenExchangeRates\OpenExchangeRatesApi;
use App\Api\OpenExchangeRates\Requests\LatestExchangeRatesRequest;
use Psr\Http\Client\ClientExceptionInterface;

/**
 * Фасад получения последних курс валют для указанной валюты
 */
class GetLatestExchangeRates
{
    /**
     * Обработчик логики
     * @param string $base Currency. 3-letter code, default: USD
     *
     * @return LatestExchangeRatesDTO
     * @throws AccessRestrictedException
     * @throws ClientExceptionInterface
     * @throws InvalidAppIdException
     * @throws InvalidBaseException
     * @throws MissingAppIdException
     * @throws NotAllowedException
     * @throws NotFoundException
     * @throws UnknownException
     */
    public function handle(string $base = 'USD'): LatestExchangeRatesDTO
    {
        $client = new OpenExchangeRatesApi();
        $request = new LatestExchangeRatesRequest($base);

        return new LatestExchangeRatesDTO($client->request($request));
    }
}
