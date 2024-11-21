<?php

namespace App\Api\OpenExchangeRates\Requests;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\RequestInterface;

abstract class BaseRequest
{
    /**
     * @return RequestInterface
     */
    abstract protected function getRequest() : Request;

    /**
     * @return RequestInterface
     */
    public function getRequestInterface() : Request {
        $request = $this->getRequest();

        /**
         * Дополняем url запрос GET параметром app_id
         */
        $newUri = Uri::withQueryValues($request->getUri(), ['app_id' => $_ENV['OER_API_ID']]);

        return $request->withUri($newUri);
    }
}
