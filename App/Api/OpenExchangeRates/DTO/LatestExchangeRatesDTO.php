<?php

namespace App\Api\OpenExchangeRates\DTO;

/**
 * DTO для эндпоинта https://openexchangerates.org/api/latest.json
 */
class LatestExchangeRatesDTO
{
    /**
     * @var array $data
     */
    protected array $data;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Получение ссылки на дисклеймер
     * @return string
     */
    public function getDisclaimer() : string {
        return $this->data['disclaimer'];
    }

    /**
     * Получение ссылки на документ лицензии
     * @return string
     */
    public function getLicense() : string {
        return $this->data['license'];
    }

    /**
     * Получение временной метки запроса
     * @return int
     */
    public function getTimestamp() : int {
        return $this->data['timestamp'];
    }

    /**
     * Получение базовой валюты
     * @return string
     */
    public function getBase() : string {
        return $this->data['base'];
    }

    /**
     * Получение курса валюта по отношению к базовой валюте
     * @return array
     */
    public function getRates() : array {
        return $this->data['rates'];
    }
}
