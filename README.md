API для openexchangerates.org

Реализован класс для работы с API (App\Api\OpenExchangeRatesApi\OpenExchangeRatesApi.php)

Реализована фабрика запросов (App\Api\OpenExchangeRates\Requests\BaseRequest.php)

Пример подзапроса который реализует эндпоинт /latest.json (App\Api\OpenExchangeRates\Requests\LatestExchangeRatesRequest.php)

Реализован сервис для получения данных в формате DataTransferObject (App\Api\OpenExchangeRates\Services\GetLatestExchangeRates.php)

Инструкция для запуска:
1. **composer install**
2. Добавить в .env.example OER_API_ID его можно взять тут https://openexchangerates.org/signup/free
3. Переименовать .env.example в .env
4. Для запуска тестов - **composer test**
5. **php index.php**
