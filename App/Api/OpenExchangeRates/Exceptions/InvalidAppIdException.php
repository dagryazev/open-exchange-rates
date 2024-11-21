<?php

namespace App\Api\OpenExchangeRates\Exceptions;

class InvalidAppIdException extends \Exception
{
    protected $message = 'Client provided an invalid App ID';

}
