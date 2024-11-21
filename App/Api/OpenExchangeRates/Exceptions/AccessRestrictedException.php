<?php

namespace App\Api\OpenExchangeRates\Exceptions;

class AccessRestrictedException extends \Exception
{
    protected $message = 'Access restricted for repeated over-use (status: 429), or other reason given in ‘description’ (403).';
}
