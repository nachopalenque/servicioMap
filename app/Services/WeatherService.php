<?php

namespace App\Services;

use GuzzleHttp\Client;

class WeatherService
{
 protected $client;
 protected $apiKey;

 public function __construct(){
    $this->client = new Client();
    $this->apiKey = env('WEATHER_API_KEY'); // Asegúrate de tener esta variable en tu .env
}

public function getWeather($city){
    $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&APPID={$this->apiKey}";
    try {
        $response = $this->client->get($url);

    return json_decode($response->getBody(), true);
     }  catch (\Exception $e) {
    echo "Error " . $e->getMessage();
    return null;
 }
 }
}