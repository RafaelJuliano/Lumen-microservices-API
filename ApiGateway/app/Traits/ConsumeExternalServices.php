<?php

use GuzzleHttp\Client;

trait ConsumeExternalServices
{
    /**
     * Send a request to any service
     * @param $service
     * @param $method
     * @param $parameters
     * @return string
     */
    public function performeRequest($method, $requestUrl, $formParams = [], $headers = [])
    {
        $client = new Client([
            'base_uri' => $this->baseUri,
            'timeout'  => 2.0,
        ]);

        $response = $client->request($method, $requestUrl, [
            'headers' => $headers,
            'form_params' => $formParams,
        ]);

        return $response->getBody()->getContents();
    }
}
