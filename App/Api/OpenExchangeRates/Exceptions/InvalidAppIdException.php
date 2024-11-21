<?php

namespace App\Api\OpenExchangeRates\Exceptions;

use Exception;

class InvalidAppIdException extends Exception
{
    protected $message = 'Client provided an invalid App ID';

}
