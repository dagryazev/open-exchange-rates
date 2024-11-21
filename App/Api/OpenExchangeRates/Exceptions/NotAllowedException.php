<?php

namespace App\Api\OpenExchangeRates\Exceptions;

class NotAllowedException extends \Exception
{
    protected $message = 'Client doesn’t have permission to access requested route/feature';
}
