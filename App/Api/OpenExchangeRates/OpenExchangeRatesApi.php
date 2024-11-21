<?php

namespace App\Api\OpenExchangeRates;

use App\Api\OpenExchangeRates\Exceptions\AccessRestrictedException;
use App\Api\OpenExchangeRates\Exceptions\InvalidAppIdException;
use App\Api\OpenExchangeRates\Exceptions\InvalidBaseException;
use App\Api\OpenExchangeRates\Exceptions\MissingAppIdException;
use App\Api\OpenExchangeRates\Exceptions\NotAllowedException;
use App\Api\OpenExchangeRates\Exceptions\NotFoundException;
use App\Api\OpenExchangeRates\Exceptions\UnknownException;
use App\Api\OpenExchangeRates\Requests\BaseRequest;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 * Класс для работы с АПИ OpenExchangeRates
 */
class OpenExchangeRatesApi
{
    /**
     * @var Client
     */
    protected Client $client;


    public function __construct(?Client $client = null)
    {
        $this->client = $client ?? new Client([
            'base_uri' => $_ENV['OER_API_URL']
        ]);
    }

    /**
     * Выполнения запроса на основе фабрики BaseRequest
     * @param BaseRequest $request
     *
     * @return array
     *
     * @throws GuzzleException
     * @throws ClientExceptionInterface
     * @throws NotFoundException
     * @throws MissingAppIdException
     * @throws InvalidAppIdException
     * @throws NotAllowedException
     * @throws AccessRestrictedException
     * @throws InvalidBaseException
     * @throws UnknownException
     */
    public function request(BaseRequest $request): array
    {
        $response = $this->client->send($request->getRequestInterface(), ['http_errors' => false]);

        $content = $response->getBody()->getContents();

        $responseArray = json_decode($content, true);

        $statusCode = $response->getStatusCode();

        if($statusCode !== 200) {
            throw (
                match ($responseArray['message']) {
                    "not_found" => new NotFoundException,
                    "missing_app_id" => new MissingAppIdException,
                    "invalid_app_id" => new InvalidAppIdException,
                    "not_allowed" => new NotAllowedException,
                    "access_restricted" => new AccessRestrictedException,
                    "invalid_base" => new InvalidBaseException,
                    default => new UnknownException($responseArray['description'], $statusCode)
                }
            );
        }

        return $responseArray;
    }
}
