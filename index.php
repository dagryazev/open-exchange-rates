<?php
require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$service = new App\Api\OpenExchangeRates\Services\GetLatestExchangeRates();
$dto = $service->handle('USD');

print 'Base: ' . $dto->getBase() . PHP_EOL;
print 'Disclaimer: ' . $dto->getDisclaimer() . PHP_EOL;
print 'Rates: ' . json_encode($dto->getRates()) . PHP_EOL;
print 'Timestamp: ' . $dto->getTimestamp() . PHP_EOL;
print 'License: ' . $dto->getLicense() . PHP_EOL;
