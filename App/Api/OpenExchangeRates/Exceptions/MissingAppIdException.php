<?php

namespace App\Api\OpenExchangeRates\Exceptions;

class MissingAppIdException extends \Exception
{
    protected $message = 'Client did not provide an App ID';
}
