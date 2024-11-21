<?php

namespace App\Api\OpenExchangeRates\Exceptions;

class InvalidBaseException extends \Exception
{
    protected $message = 'Client requested rates for an unsupported base currency';
}
