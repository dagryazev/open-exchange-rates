<?php

namespace App\Api\OpenExchangeRates\Exceptions;

class NotFoundException extends \Exception
{
    protected $message = 'Client requested a non-existent resource/route';
}
