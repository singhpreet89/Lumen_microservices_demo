<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class HttpService
{
    /**
     *  Send the request to an external Service
     * 
     *  @param string $baseUri 
     *  @param string $method
     *  @param string $requestUrl
     *  @param array $payload
     *  @param array $headers
     * 
     *  @return array
     */
    public function performRequest(string $baseUri, string $method, string $requestUrl, array $payload = [], array $headers = []): \Illuminate\Http\Response
    {
        if(empty($headers)) {
            $response = Http::$method("{$baseUri}/{$requestUrl}", $payload);
        } else {
            $response = Http::withHeaders($headers)->$method("{$baseUri}/{$requestUrl}", $payload);
        }

        return response($response->json(), $response->status());
    }
}
