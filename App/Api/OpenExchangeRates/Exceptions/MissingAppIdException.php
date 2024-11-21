<?php

namespace App\Api\OpenExchangeRates\Exceptions;

use Exception;

class MissingAppIdException extends Exception
{
    protected $message = 'Client did not provide an App ID';
}
