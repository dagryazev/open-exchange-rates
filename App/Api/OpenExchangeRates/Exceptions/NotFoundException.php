<?php

namespace App\Api\OpenExchangeRates\Exceptions;

use Exception;

class NotFoundException extends Exception
{
    protected $message = 'Client requested a non-existent resource/route';
}
