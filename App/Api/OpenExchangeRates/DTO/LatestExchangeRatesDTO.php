<?php

namespace App\Api\OpenExchangeRates\DTO;

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
     * @return string
     */
    public function getDisclaimer() : string {
        return $this->data['disclaimer'];
    }

    /**
     * @return string
     */
    public function getLicense() : string {
        return $this->data['license'];
    }

    /**
     * @return int
     */
    public function getTimestamp() : int {
        return $this->data['timestamp'];
    }

    /**
     * @return string
     */
    public function getBase() : string {
        return $this->data['base'];
    }

    /**
     * @return array
     */
    public function getRates() : array {
        return $this->data['rates'];
    }
}
