<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class TwitterService
{
    private $basicAuthString;

    private $bearerToken;

    private $client;

    public function __construct()
    {
        $this->basicAuthString = "Basic " . base64_encode(
            urlencode(config('services.twitter.key')) . ":" . urlencode(config('services.twitter.secret'))
        );

        $this->client = new Client();
    }

    public function getTweet(string $tweetId)
    {
        $response = $this->client->request('GET', 'https://api.twitter.com/1.1/statuses/show.json', [
            'headers' => $this->getAuthorizationHeader(),
            'query' => [ 'id' => $tweetId ]
        ]);

        return $this->handleResponse($response);
    }

    private function getBearerToken()
    {
        return $this->bearerToken ?? $this->bearerToken = $this->setBearerToken();
    }

    private function setBearerToken()
    {
        $response = $this->client->request('POST', 'https://api.twitter.com/oauth2/token', [
            'headers' => [ 'Authorization' => $this->basicAuthString ],
            'form_params' => [ 'grant_type' => 'client_credentials' ],
        ]);

        return $this->handleResponse($response)->access_token;
    }

    private function getAuthorizationHeader()
    {
        return [ 'Authorization' => "Bearer " . $this->getBearerToken() ];
    }

    private function handleResponse($response)
    {
        if ($response->getStatusCode() !== 200) {
            Log::error($response->getBody()->getContents());
            abort(500);
        } else {
            $data = json_decode($response->getBody()->getContents());

            return $data;
        }
    }
}