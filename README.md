API для openexchangerates.org

Реализован класс для работы с API (App\Api\OpenExchangeRatesApi\OpenExchangeRatesApi.php)

Реализована фабрика запросов (App\Api\OpenExchangeRates\Requests\BaseRequest)

Пример подзапроса который релизует эндпоинт /latest.json (App\Api\OpenExchangeRates\Requests\LatestExchangeRatesRequest.php)

Реализован сервис для получения данных в формате DataTransferObject (App\Api\OpenExchangeRates\Services\GetLatestExchangeRates.php)

Инструкция для запуска:
1. composer install
2. php index.php

Если нужно заменить app_id он лежит в .env
